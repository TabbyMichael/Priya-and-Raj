export async function includePartials(root = document) {
  const nodes = Array.from(root.querySelectorAll('[data-include]'));
  await Promise.all(
    nodes.map(async (node) => {
      const url = node.getAttribute('data-include');
      if (!url) return;
      const res = await fetch(url, { cache: 'no-store' });
      if (!res.ok) {
        node.innerHTML = `<div style="padding:1rem; color:#b00020">Failed to load partial: ${url}</div>`;
        return;
      }
      node.innerHTML = await res.text();
      node.removeAttribute('data-include');
    })
  );
}
