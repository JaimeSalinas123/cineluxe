    document.addEventListener('DOMContentLoaded', function() {
        const resumeBtn = document.getElementById('resumeBtn');
        const closeModal = document.getElementById('closeModal');
        const modal = document.getElementById('resumeModal');
        const getTicketBtn = document.getElementById('getTicketBtn');
        
        // Get form elements
        const cineSelect = document.querySelector('select');
        const viewingOptions = document.querySelectorAll('input[name="viewing_option"]');
        const dateInput = document.querySelector('input[type="date"]');
        const timeSelect = document.querySelectorAll('select')[1];
        
        // Modal elements
        const modalCine = document.getElementById('modalCine');
        const modalFormat = document.getElementById('modalFormat');
        const modalDate = document.getElementById('modalDate');
        const modalFood = document.getElementById('modalFood');
        
        // Almacenamiento para alimentos seleccionados
        let selectedFood = [];
        
        // Agregar event listeners a los botones de comida
        document.querySelectorAll('.bg-blue-600.text-white').forEach((btn, index) => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const foodContainer = this.closest('.border');
                const foodName = foodContainer.querySelector('h4').textContent;
                const foodPrice = foodContainer.querySelector('.font-bold').textContent;
                
                // Verificar si el combo ya fue agregado
                const existingIndex = selectedFood.findIndex(item => item.name === foodName);
                
                if(existingIndex >= 0) {
                    // Si ya existe, incrementar cantidad
                    selectedFood[existingIndex].quantity += 1;
                } else {
                    // Si no existe, agregarlo
                    selectedFood.push({
                        name: foodName,
                        price: foodPrice,
                        quantity: 1
                    });
                }
                
                // Feedback visual
                this.textContent = '✓ Agregado';
                this.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                this.classList.add('bg-green-500', 'hover:bg-green-600');
                
                // Resetear después de 1 segundo
                setTimeout(() => {
                    this.textContent = 'Agregar';
                    this.classList.remove('bg-green-500', 'hover:bg-green-600');
                    this.classList.add('bg-blue-600', 'hover:bg-blue-700');
                }, 1000);
            });
        });
        
        // Mostrar modal
        resumeBtn.addEventListener('click', function() {
            // Get selected cine
            modalCine.textContent = cineSelect.options[cineSelect.selectedIndex].text || '--';
            
            // Get selected format
            let selectedFormat = '--';
            viewingOptions.forEach(option => {
                if (option.checked) {
                    selectedFormat = option.value;
                }
            });
            modalFormat.textContent = selectedFormat;
            
            // Get selected date and time
            const dateValue = dateInput.value ? new Date(dateInput.value).toLocaleDateString('es-ES') : '--';
            const timeValue = timeSelect.options[timeSelect.selectedIndex].text || '--';
            modalDate.textContent = `${dateValue} ${timeValue !== '--' ? 'a las ' + timeValue : ''}`;
            
            // Mostrar alimentos seleccionados
            if(selectedFood.length > 0) {
                let foodHtml = '';
                selectedFood.forEach(item => {
                    foodHtml += `${item.name} (${item.quantity}x ${item.price})<br>`;
                });
                modalFood.innerHTML = foodHtml;
            } else {
                modalFood.textContent = '--';
            }
            
            modal.classList.remove('hidden');
        });
        
        // Cerrar modal
        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
        
        // Obtener boleto
        getTicketBtn.addEventListener('click', function() {
            alert('¡Boleto generado con éxito! Gracias por su compra.');
            modal.classList.add('hidden');
            // Aquí normalmente enviarías el formulario o procesarías el pago
        });
    });