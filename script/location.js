document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('underline_select');
    const locationSections = document.querySelectorAll('.location-section');
    locationSections.forEach(section => {
        section.style.display = 'none';
    });

    selectElement.addEventListener('change', function() {
        locationSections.forEach(section => {
            section.style.display = 'none';
        });
        
        const selectedValue = this.value;
        if (selectedValue) {
            const sections = document.querySelectorAll('.location-section');
            sections.forEach(section => {
                const h2 = section.querySelector('h2');
                if (h2) {
                    const sectionName = h2.textContent.trim().toUpperCase();
                    const selectedName = getLocationName(selectedValue).toUpperCase();
                    
                    if (sectionName === selectedName) {
                        section.style.display = 'block';
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        }
    });

    function getLocationName(value) {
        switch(value) {
            case 'MC': return 'METROCENTRO';
            case 'GA': return 'GALERIAS';
            case 'MU': return 'MULTIPLAZA';
            default: return '';
        }
    }
});