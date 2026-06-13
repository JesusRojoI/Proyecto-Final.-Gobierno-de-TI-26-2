/* Genera el header y la barra lateral de forma consistente en todas las páginas.
   Cada página llama a renderLayout(rootPath) donde rootPath es la ruta relativa
   a la raíz del proyecto ('' para index.html, '../' para pages/*.html). */

function renderLayout(rootPath) {
  rootPath = rootPath || '';

  const activities = [
    { file: 'planeacion.html',      icon: '📋', label: 'Planeación y Alcance (RoE)' },
    { file: 'reconocimiento.html',  icon: '🔍', label: 'Reconocimiento (OSINT)' },
    { file: 'vulnerabilidades.html',icon: '🛡️', label: 'Evaluación de Vulnerabilidades' },
    { file: 'pentesting.html',      icon: '💻', label: 'Pentesting Web e Infraestructura' },
    { file: 'ingenieria-social.html',icon: '🎣', label: 'Ingeniería Social (Phishing)' },
    { file: 'analisis.html',        icon: '📊', label: 'Análisis de Resultados' },
    { file: 'reporte.html',         icon: '📄', label: 'Reporte y Cierre' },
  ];

  const navItems = activities.map(a => `
    <li>
      <a href="${rootPath}pages/${a.file}">
        <span class="nav-icon">${a.icon}</span>
        ${a.label}
      </a>
    </li>`).join('');

  const header = `
  <header class="site-header">
    <div class="header-inner">
      <div class="header-logos">
        <img src="${rootPath}assets/img/ipn-logo.svg" alt="Logo IPN" onerror="this.style.display='none'">
      </div>
      <div class="header-text">
        <h1>Instituto Politécnico Nacional</h1>
        <span class="school">Escuela Superior de Cómputo (ESCOM)</span>
        <span class="subject">IT Governance — Grupo 7CV4</span>
      </div>
      <div class="header-logos">
        <img src="${rootPath}assets/img/escom-logo.svg" alt="Logo ESCOM" onerror="this.style.display='none'">
      </div>
    </div>
  </header>`;

  const sidebar = `
  <aside class="sidebar">
    <a class="home-link" href="${rootPath}index.html">🏠 Inicio</a>
    <p class="sidebar-section-title">Actividades del Proyecto</p>
    <nav>
      <ul>${navItems}</ul>
    </nav>
  </aside>`;

  // Inserta header antes del .layout
  document.getElementById('site-header-placeholder').innerHTML = header;
  document.getElementById('sidebar-placeholder').innerHTML = sidebar;

  // Marca enlace activo
  const currentFile = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.sidebar nav a').forEach(function (link) {
    const href = link.getAttribute('href').split('/').pop();
    if (href === currentFile) link.classList.add('active');
  });
}
