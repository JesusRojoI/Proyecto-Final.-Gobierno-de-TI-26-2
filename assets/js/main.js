// JS personalizado (opcional)
document.addEventListener('DOMContentLoaded', function() {
    // Agregar año actual automáticamente si se necesita
    const yearElements = document.querySelectorAll('.current-year');
    if (yearElements.length) {
        const currentYear = new Date().getFullYear();
        yearElements.forEach(el => el.textContent = currentYear);
    }
    
    // Tooltips opcionales
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    if (tooltipTriggerList.length) {
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
    
    console.log("Sistema de evidencias IT Governance listo");
});