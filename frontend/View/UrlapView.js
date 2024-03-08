class UrlapView{
    #adat = {};
    constructor(adat, szuloElem) {
        this.#adat = adat;
        this.szuloElem = szuloElem;
        this.szuloElem.innerHTML = `
            <form>
                <div class="mb-3">
                    <label for="osztaly" class="form-label"></label>
                    <select class="form-select" id="osztaly" name="osztaly">
                            ${adat.map(osztaly => `<option value="${osztaly.id}" ${this.#adat.neve === osztaly.neve ? "selected" : ""}>${osztaly.neve}</option>`)}
                        </select>
                </div>
                <div class="mb-3">
                    <label for="osztaly" class="form-label"></label>
                    <select class="form-select" id="osztaly" name="osztaly">
                            ${adat.map(osztaly => `<option value="${osztaly.id}" ${this.#adat.neve === osztaly.neve ? "selected" : ""}>${osztaly.neve}</option>`)}
                        </select>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Küldés</button>
            </form>
        `;
    }

}

export default UrlapView;