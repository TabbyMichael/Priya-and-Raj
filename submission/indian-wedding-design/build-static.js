const fs = require('fs').promises;
const path = require('path');
const { exec } = require('child_process');

async function copyDirectory(src, dest) {
  try {
    await fs.mkdir(dest, { recursive: true });
    const entries = await fs.readdir(src, { withFileTypes: true });
    
    for (let entry of entries) {
      const srcPath = path.join(src, entry.name);
      const destPath = path.join(dest, entry.name);
      
      if (entry.isDirectory()) {
        await copyDirectory(srcPath, destPath);
      } else {
        await fs.copyFile(srcPath, destPath);
      }
    }
  } catch (error) {
    console.error(`Error copying directory ${src}:`, error.message);
  }
}

async function buildStaticSite() {
  try {
    // Create dist directory
    await fs.mkdir(path.join(__dirname, 'dist'), { recursive: true });
    
    // Read the main index.html file
    let indexHtml = await fs.readFile(path.join(__dirname, 'index.html'), 'utf8');
    
    // Extract all data-include attributes
    const includeRegex = /<div data-include="(.*?)"><\/div>/g;
    const matches = [...indexHtml.matchAll(includeRegex)];
    
    // Process each include
    for (const match of matches) {
      const fullPath = match[0];
      const partialPath = match[1];
      
      try {
        // Read the partial file
        const partialContent = await fs.readFile(path.join(__dirname, partialPath), 'utf8');
        // Replace the include div with the actual content
        indexHtml = indexHtml.replace(fullPath, partialContent);
      } catch (error) {
        console.error(`Error reading partial ${partialPath}:`, error.message);
        // Replace with error message if file not found
        indexHtml = indexHtml.replace(fullPath, `<div style="padding:1rem; color:#b00020">Failed to load partial: ${partialPath}</div>`);
      }
    }
    
    // Remove the data-include attributes and script that handles includes
    indexHtml = indexHtml.replace(/ data-include=".*?"/g, '');
    
    // Write the final static HTML file
    await fs.writeFile(path.join(__dirname, 'dist', 'index.html'), indexHtml, 'utf8');
    
    // Copy assets directory
    await copyDirectory(path.join(__dirname, 'assets'), path.join(__dirname, 'dist', 'assets'));
    
    // Copy images directory
    await copyDirectory(path.join(__dirname, 'images'), path.join(__dirname, 'dist', 'images'));
    
    // Copy favicon
    try {
      await fs.copyFile(path.join(__dirname, 'favicon.ico'), path.join(__dirname, 'dist', 'favicon.ico'));
    } catch (error) {
      console.warn('Warning: Could not copy favicon.ico');
    }
    
    // Create _redirects file for Netlify SPA support
    try {
      await fs.writeFile(path.join(__dirname, 'dist', '_redirects'), '/*    /index.html    200\n', 'utf8');
    } catch (error) {
      console.warn('Warning: Could not create _redirects file');
    }
    
    console.log('Static site built successfully!');
    console.log('Output directory: dist/');
  } catch (error) {
    console.error('Error building static site:', error.message);
  }
}

buildStaticSite();