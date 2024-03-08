import UrlapModel from "../Model/UrlapModel";
import UrlapView from "../View/UrlapView";
import DataService from "../Model/DataService";
import TablaModel from "../Model/TablazatModel";
import TablaView from "../View/TablazatView";

class Controller {

    constructor() {
        const adat = {};
        const model = new UrlapModel(adat);
        const szuloElem = document.querySelector(".urlap");
        this.dataService = new DataService();
        this.view = new UrlapView(model.getAdat(), szuloElem);
      }
    
}

export default Controller;

