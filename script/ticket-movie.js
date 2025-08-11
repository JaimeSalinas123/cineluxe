document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[class^="movie-"]').forEach(movieSection => {
        const resumeBtn = movieSection.querySelector('#resumeBtn');
        const closeModal = movieSection.querySelector('#closeModal');
        const modal = movieSection.querySelector('#resumeModal');
        const getTicketBtn = movieSection.querySelector('#getTicketBtn');
        
        const cineSelect = movieSection.querySelector('select');
        const viewingOptions = movieSection.querySelectorAll('input[name="viewing_option"]');
        const dateInput = movieSection.querySelector('input[type="date"]');
        const timeSelect = movieSection.querySelectorAll('select')[1];
        const movieTitle = movieSection.querySelector('h1').textContent;
        
        const modalCine = movieSection.querySelector('#modalCine');
        const modalFormat = movieSection.querySelector('#modalFormat');
        const modalDate = movieSection.querySelector('#modalDate');
        const modalFood = movieSection.querySelector('#modalFood');
        
        let selectedFood = [];
        
        movieSection.querySelectorAll('.bg-blue-600.text-white').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const foodContainer = this.closest('.border');
                const foodName = foodContainer.querySelector('h4').textContent;
                const foodPrice = foodContainer.querySelector('.font-bold').textContent;
                const foodDescription = foodContainer.querySelector('p.text-sm').textContent;

                const existingIndex = selectedFood.findIndex(item => item.name === foodName);
                
                if(existingIndex >= 0) {
                    selectedFood[existingIndex].quantity += 1;
                } else {
                    selectedFood.push({
                        name: foodName,
                        description: foodDescription,
                        price: foodPrice,
                        quantity: 1
                    });
                }
                
                this.textContent = '✓ Added';
                this.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                this.classList.add('bg-green-500', 'hover:bg-green-600');
                
                setTimeout(() => {
                    this.textContent = 'Add';
                    this.classList.remove('bg-green-500', 'hover:bg-green-600');
                    this.classList.add('bg-blue-600', 'hover:bg-blue-700');
                }, 1000);
            });
        });

        resumeBtn.addEventListener('click', function() {
            modalCine.textContent = cineSelect.options[cineSelect.selectedIndex].text || '--';
            
            let selectedFormat = '--';
            viewingOptions.forEach(option => {
                if (option.checked) {
                    selectedFormat = option.value;
                }
            });
            modalFormat.textContent = selectedFormat;
            
            const dateValue = dateInput.value ? new Date(dateInput.value).toLocaleDateString('en-US') : '--';
            const timeValue = timeSelect.options[timeSelect.selectedIndex].text || '--';
            modalDate.textContent = `${dateValue} ${timeValue !== '--' ? 'at ' + timeValue : ''}`;

            if(selectedFood.length > 0) {
                let foodHtml = '';
                selectedFood.forEach(item => {
                    foodHtml += `${item.name} (${item.quantity}x ${item.price})<br><small class="text-gray-500">${item.description}</small><br>`;
                });
                modalFood.innerHTML = foodHtml;
            } else {
                modalFood.textContent = '--';
            }
            
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    });
});