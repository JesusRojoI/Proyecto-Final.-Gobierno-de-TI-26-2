<?php include 'includes/config.php'; 

// Lista de todos los entregables con su nombre para mostrar y archivo esperado
$entregables = [
    ['nombre' => 'Introducción (mínimo 1 cuartilla)', 'archivo' => '01_introduccion.pdf', 'icono' => 'fa-file-alt'],
    ['nombre' => 'Caso de Negocio (Formato completo)', 'archivo' => '02_caso_negocio.pdf', 'icono' => 'fa-briefcase'],
    ['nombre' => 'Cédula de Servicio (ITIL - completa)', 'archivo' => '03_cedula_servicio.pdf', 'icono' => 'fa-clipboard-list'],
    ['nombre' => 'Inventario de Activos (3 procesos)', 'archivo' => '04_inventario_activos.pdf', 'icono' => 'fa-database'],
    ['nombre' => 'Matriz de Riesgos (ISO 27000 + Matriz CID)', 'archivo' => '05_matriz_riesgos.pdf', 'icono' => 'fa-shield-virus'],
    ['nombre' => 'BIA Táctico - Proceso 1', 'archivo' => '06_bia_tactico_1.pdf', 'icono' => 'fa-chart-simple'],
    ['nombre' => 'BIA Táctico - Proceso 2', 'archivo' => '07_bia_tactico_2.pdf', 'icono' => 'fa-chart-simple'],
    ['nombre' => 'BIA Táctico - Proceso 3', 'archivo' => '08_bia_tactico_3.pdf', 'icono' => 'fa-chart-simple'],
    ['nombre' => 'BIA Operacional (1 integrado)', 'archivo' => '09_bia_operacional.pdf', 'icono' => 'fa-chart-line'],
    ['nombre' => 'Plan de Continuidad (BCP completo)', 'archivo' => '10_plan_continuidad.pdf', 'icono' => 'fa-truck-fast'],
    ['nombre' => 'Metas Corporativas (COBIT + BSC)', 'archivo' => '11_metas_corporativas.pdf', 'icono' => ' fa-building'],
    ['nombre' => 'Metas IT (COBIT + BSC)', 'archivo' => '12_metas_it.pdf', 'icono' => 'fa-microchip'],
    ['nombre' => 'Cascada de Metas (Mapeo COBIT)', 'archivo' => '13_cascada_metas.pdf', 'icono' => 'fa-project-diagram'],
    ['nombre' => 'Mapa Estratégico (Balanced Scorecard)', 'archivo' => '14_mapa_estrategico.pdf', 'icono' => 'fa-map']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?> - Evidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-info shadow-sm">
                <i class="fas fa-info-circle me-2"></i> 
                <strong>Instrucciones para el profesor:</strong> Todos los PDFs deben ubicarse en la carpeta <code>/pdfs/</code> con los nombres exactos listados a continuación. Los archivos se mostrarán automáticamente.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0"><i class="fas fa-file-pdf me-2"></i>Entregables del Proyecto Final</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Entregable</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador = 1; foreach ($entregables as $item): 
                                    $ruta_pdf = 'pdfs/' . $item['archivo'];
                                    $existe = file_exists($ruta_pdf);
                                ?>
                                <tr>
                                    <td><?php echo $contador++; ?></td>
                                    <td>
                                        <i class="fas <?php echo $item['icono']; ?> me-2 text-primary"></i>
                                        <?php echo htmlspecialchars($item['nombre']); ?>
                                    </td>
                                    <td>
                                        <?php if ($existe): ?>
                                            <span class="badge bg-success"><i class="fas fa-check-circle me-1"></i> Cargado</span>
                                        <?php else: ?>
                                            <span class="badge bg-danger"><i class="fas fa-times-circle me-1"></i> Pendiente</span>
                                            <br><small class="text-muted">Falta: <?php echo $item['archivo']; ?></small>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($existe): ?>
                                            <a href="<?php echo $ruta_pdf; ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                                <i class="fas fa-eye me-1"></i> Ver PDF
                                            </a>
                                            <a href="<?php echo $ruta_pdf; ?>" class="btn btn-sm btn-outline-secondary" download>
                                                <i class="fas fa-download me-1"></i> Descargar
                                            </a>
                                        <?php else: ?>
                                            <button class="btn btn-sm btn-secondary" disabled>
                                                <i class="fas fa-upload me-1"></i> Subir pendiente
                                            </button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-folder-open me-1"></i> Carpeta de PDFs: <code>/pdfs/</code></span>
                        <a href="index.php" class="btn btn-link"><i class="fas fa-arrow-left me-1"></i> Volver a información del servicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>