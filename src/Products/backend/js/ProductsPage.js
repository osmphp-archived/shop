import Controller from "Osm_Framework_Js/Controller";

export default class ProductsPage extends Controller {
    get events() {
        return Object.assign({}, super.events, {
            // handle JS events here
        });
    }
};