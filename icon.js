const nav_links = document.querySelectorAll('.nav-links i');

nav_links.forEach(element => {
    element.addEventListener('click', (e) => {
        const icon = e.srcElement.id;
    });
});