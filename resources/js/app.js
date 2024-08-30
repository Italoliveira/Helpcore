import './bootstrap';
import 'alpinejs';

window.Alpine = Alpine;

Alpine.data('Consumer', filterComponent);

Alpine.start();

export function filterComponent(uri) {
    
    return {
        filters: {
            search: '',
            priority: 'Todos',
            responsible: 'Todos',
            subject: 'Todos',
            status: 'Todos',
        },
        filteredData: [],

        async fetchData() {
            try {
                let response = await fetch(`api/${uri}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(this.filters),
                });
                this.filteredData = await response.json();
            } catch (error) {
                console.error('Erro ao buscar dados:', error);
            }
        },
    };
}