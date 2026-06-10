<div class="lm-layout">
    <!-- BARRA LATERAL IZQUIERDA -->
    <aside class="lm-sidebar">
        <div class="sidebar-header">
            <!-- LOGO ESCOM - Coloca tu archivo logo-escom.png en assets/img/ -->
            <img src="assets/img/logo-escom.png" alt="ESCOM Logo" class="escom-logo">
            <h3>IT Governance</h3>
            <p>ESCOM - IPN</p>
        </div>
        
        <ul class="sidebar-nav">
            <li>
                <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-info-circle"></i> <span>Información del Servicio</span>
                </a>
            </li>
            <li>
                <a href="evidencias.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'evidencias.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-pdf"></i> <span>Evidencias (Entregables)</span>
                </a>
            </li>
        </ul>
        
        <div style="padding: 2rem 1.5rem; margin-top: auto; font-size: 0.7rem; opacity: 0.6; border-top: 1px solid rgba(255,255,255,0.1); margin-top: 2rem;">
            <p>Instituto Politécnico Nacional<br>Proyecto Final - IT Governance</p>
        </div>
    </aside>
    
    <!-- CONTENIDO PRINCIPAL -->
    <main class="lm-content">