// Agrega funcionalidad para que los enlaces se abran en una nueva pestaña
document.querySelectorAll('nav a').forEach(a => {
    a.target = '_blank';
});