export default class Boger {
    constructor() {
        this.data = {
            password: "Fantasy",
        }

        this.rootElem = document.querySelector('.boger');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init() {
        this.nameSearch.addEventListener('input', () => {
            if(this.nameSearch.value.length >= 3){
                this.render();
            }
        });

        await this.render();
    }

    async render() {
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data) {
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
                
                <div class="flex-container-1">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${item.prodNavn}</h5>
                                    <p class="class-header">${item.prodBeskrivelse}</p>
                                    <p class="forfatter">${item.prodForfatter}</p>
                                    <p class="hashtags">${item.prodTag}</p>
                                    <p class="class-header">${item.prodForlag}</p>
                                    <p class="class-header">${item.prodPris}</p>
                                    <p class="class-header">${item.prodType}</p>
                                    <p class="class-header"><small class="text-muted">${item.prodType}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData() {
        this.data.nameSearch = this.nameSearch.value;
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }


}