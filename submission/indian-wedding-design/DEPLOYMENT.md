# Deployment Instructions for Vercel

## Prerequisites
1. A Vercel account (free at vercel.com)
2. This built static site in the `dist` folder

## Deployment Steps

### Method 1: Using Vercel CLI (Recommended)
1. Install Vercel CLI globally:
   ```bash
   npm install -g vercel
   ```

2. Run the build script to generate static files:
   ```bash
   npm run build
   ```

3. Deploy to Vercel:
   ```bash
   vercel --prod
   ```

### Method 2: Using Git Integration
1. Push your code to GitHub/GitLab/Bitbucket
2. Import your repository in Vercel dashboard
3. Configure the project with these settings:
   - Build Command: `npm run build:vercel`
   - Output Directory: `dist`
   - Install Command: `npm install`

### Method 3: Manual Deployment
1. Run the build script:
   ```bash
   npm run build
   ```
2. Go to Vercel dashboard
3. Click "New Project"
4. Select "Import Third-Party Git Provider" -> "Other"
5. Choose the `dist` folder for upload

## Troubleshooting

### 404 Errors
If you encounter 404 errors after deployment, make sure:
1. The build script ran successfully
2. All assets were copied to the dist folder
3. Your vercel.json configuration is correct

### Missing Styles/Images
If styles or images are missing:
1. Check that all asset paths in index.html are relative
2. Verify that the assets folder was copied to dist/
3. Make sure there are no broken image links

## Custom Domain
To use a custom domain:
1. Add your domain in Vercel dashboard
2. Follow Vercel's DNS configuration instructions
3. Wait for DNS propagation (usually a few minutes to hours)

## Need Help?
For deployment issues, contact support or check Vercel's documentation at vercel.com/docs