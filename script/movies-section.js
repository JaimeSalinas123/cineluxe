document.addEventListener('DOMContentLoaded', function() {

    const allSections = document.querySelectorAll('.movie-section');
    allSections.forEach(section => {
        section.style.display = 'none';
    });

    const urlParams = new URLSearchParams(window.location.search);
    const movieParam = urlParams.get('movie');

    if (movieParam) {
        const targetSection = document.querySelector(`.movie-section[data-movie="${movieParam}"]`);
        if (targetSection) {
            targetSection.style.display = 'block';
        } else {
            allSections[0].style.display = 'block';
        }
    } else {
        allSections[0].style.display = 'block';
    }
});