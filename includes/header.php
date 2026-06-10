<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-shield-alt me-2"></i>
            <strong>IT Governance</strong> | ESCOM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">
                        <i class="fas fa-info-circle me-1"></i> Información del Servicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'evidencias.php' ? 'active' : ''; ?>" href="evidencias.php">
                        <i class="fas fa-file-pdf me-1"></i> Evidencias (Entregables)
                    </a>
                </li>
            </ul>
            <span class="navbar-text ms-3 small">
                <i class="fas fa-calendar-alt me-1"></i> <?php echo YEAR; ?>
            </span>
        </div>
    </div>
</nav>

<div class="bg-primary text-white py-3 mb-4">
    <div class="container">
        <h1 class="h3 mb-0"><?php echo SITE_TITLE; ?></h1>
        <small><?php echo SITE_SUBTITLE; ?></small>
    </div>
</div>