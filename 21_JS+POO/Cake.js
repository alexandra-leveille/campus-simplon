var Cake = function Cake(conf) {

    var that, CakeFactory = function CakeFactory(conf) {
        that = this;
        this.icon = conf.icon || null;
        this.price = conf.price || null;
        this.flavor = conf.flavor;
        this.fullName = "un cake aromatisé " + conf.flavor;

        if (this.icon) {
            this.observer();
        }
    };

    CakeFactory.prototype.miam = function miam() {
        return "Huumm ça sent bon un cake au " + this.flavor;
    };

    CakeFactory.prototype.action = function action() {
        log(this); // que vaut this ici ?
    };

    CakeFactory.prototype.observer = function observer() {
        this.icon.onclick = this.action.bind(this);
    };

    return new CakeFactory(conf);
};
