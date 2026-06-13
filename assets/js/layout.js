// Layout dinámico para header y sidebar

function renderLayout(basePath = '') {
    const path = basePath ? (basePath.endsWith('/') ? basePath : basePath + '/') : '';
    
    // Renderizar header
    const headerPlaceholder = document.getElementById('site-header-placeholder');
    if (headerPlaceholder) {
        headerPlaceholder.innerHTML = `
            <header class="site-header">
                <div class="header-inner">
                    <div class="header-logos">
                        <img src="${path}assets/img/ipn-logo.svg" alt="IPN Logo" onerror="this.style.display='none'">
                    </div>
                    <div class="header-text">
                        <h1>Servicio de Seguridad Ofensiva</h1>
                        <span class="school">Escuela Superior de Cómputo · IPN</span>
                        <span class="subject">IT Governance · Grupo 7CV4</span>
                    </div>
                    <div class="header-logos">
                        <img src="${path}assets/img/escom-logo.svg" alt="ESCOM Logo" onerror="this.style.display='none'">
                    </div>
                </div>
            </header>
        `;
    }

    // Renderizar sidebar
    const sidebarPlaceholder = document.getElementById('sidebar-placeholder');
    if (sidebarPlaceholder) {
        const currentPath = window.location.pathname.split('/').pop();
        
        sidebarPlaceholder.innerHTML = `
            <aside class="sidebar">
                <a href="${path}index.html" class="home-link">
                    <i class="fas fa-home nav-icon"></i>
                    <span>Inicio / Dashboard</span>
                </a>
                <div class="sidebar-section-title">ACTIVIDADES DEL PROYECTO</div>
                <nav>
                    <ul>
                        <li><a href="${path}pages/metas-corporativas.html" class="${currentPath === 'metas-corporativas.html' ? 'active' : ''}">
                            <i class="fas fa-chart-line nav-icon"></i>
                            <span>Metas Corporativas (COBIT + BSC)</span>
                        </a></li>
                        <li><a href="${path}metas-it.html" class="${currentPath === 'metas-it.html' ? 'active' : ''}">
                            <i class="fas fa-microchip nav-icon"></i>
                            <span>Metas IT (COBIT + BSC)</span>
                        </a></li>
                        <li><a href="${path}cascada-metas.html" class="${currentPath === 'cascada-metas.html' ? 'active' : ''}">
                            <i class="fas fa-sitemap nav-icon"></i>
                            <span>Cascada de Metas (Mapeo)</span>
                        </a></li>
                        <li><a href="${path}mapa-estrategico.html" class="${currentPath === 'mapa-estrategico.html' ? 'active' : ''}">
                            <i class="fas fa-map nav-icon"></i>
                            <span>Mapa Estratégico (BSC)</span>
                        </a></li>
                        <li><a href="${path}caso-negocio.html" class="${currentPath === 'caso-negocio.html' ? 'active' : ''}">
                            <i class="fas fa-briefcase nav-icon"></i>
                            <span>Caso de Negocio</span>
                        </a></li>
                        <li><a href="${path}cedula-servicio.html" class="${currentPath === 'cedula-servicio.html' ? 'active' : ''}">
                            <i class="fas fa-file-alt nav-icon"></i>
                            <span>Cédula de Servicio (ITIL)</span>
                        </a></li>
                        <li><a href="${path}inventario-activos.html" class="${currentPath === 'inventario-activos.html' ? 'active' : ''}">
                            <i class="fas fa-database nav-icon"></i>
                            <span>Inventario de Activos</span>
                        </a></li>
                        <li><a href="${path}matriz-riesgos.html" class="${currentPath === 'matriz-riesgos.html' ? 'active' : ''}">
                            <i class="fas fa-exclamation-triangle nav-icon"></i>
                            <span>Matriz de Riesgos (ISO 27000)</span>
                        </a></li>
                        <li><a href="${path}bia-tactico.html" class="${currentPath === 'bia-tactico.html' ? 'active' : ''}">
                            <i class="fas fa-chart-bar nav-icon"></i>
                            <span>BIA Táctico (3 procesos)</span>
                        </a></li>
                        <li><a href="${path}bia-operacional.html" class="${currentPath === 'bia-operacional.html' ? 'active' : ''}">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <span>BIA Operacional</span>
                        </a></li>
                        <li><a href="${path}plan-continuidad.html" class="${currentPath === 'plan-continuidad.html' ? 'active' : ''}">
                            <i class="fas fa-redo-alt nav-icon"></i>
                            <span>Plan de Continuidad</span>
                        </a></li>
                    </ul>
                </nav>
            </aside>
        `;
    }
}