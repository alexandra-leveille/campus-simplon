function wrapCake() {
    var that, Cake = function Cake(flavor) {
        that = this;
        this.icon = null;
        this.prix = null;
        this.flavor = flavor;
        this.fullName = "un cake aromatisé " + flavor;
        console.log(this);
    };

    Cake.prototype.sentirBon = function sentirBon() {
        return "Huumm ça sent bon un cake au " + this.flavor;
    };

    Cake.prototype.action = function action() {
        log(this);
    };

    Cake.prototype.observer = function observer() {
        this.icon.onclick = this.action.bind(this);
    };
}
