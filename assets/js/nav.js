// Marca el enlace activo en la barra lateral según la página actual
(function () {
  const currentFile = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.sidebar nav a').forEach(function (link) {
    const href = link.getAttribute('href').split('/').pop();
    if (href === currentFile) {
      link.classList.add('active');
    }
  });
})();

// PDF viewer: intenta cargar el iframe; si falla, muestra el placeholder
function initPdfViewer(iframeId, placeholderId, pdfPath) {
  const iframe = document.getElementById(iframeId);
  const placeholder = document.getElementById(placeholderId);
  if (!iframe) return;

  iframe.onload = function () {
    try {
      // Si el documento está vacío (archivo no encontrado), muestra placeholder
      const doc = iframe.contentDocument || iframe.contentWindow.document;
      if (!doc || doc.title === '404') throw new Error('not found');
    } catch (e) {
      // cross-origin o 404 → se muestra el iframe normal de todas formas
    }
  };

  iframe.onerror = function () {
    if (placeholder) {
      iframe.style.display = 'none';
      placeholder.style.display = 'flex';
    }
  };
}
