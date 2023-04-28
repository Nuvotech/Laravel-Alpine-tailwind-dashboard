import "./bootstrap";
import.meta.glob(["../images/**"]);

import Alpine from "alpinejs";
window.Alpine = Alpine;

Alpine.store("sidebar", {
    full: true,
    active: "home",
    navOpen: false,
    on: false,
    open: false,

    toggle() {
        console.log(this.navOpen);
        this.open = !this.open;
    },
});

// dropdown
Alpine.data("dropdown", () => ({
    open: false,
    toggle(some) {
        this.open = !this.open;
    },
    activetab: "bg-gray-800 text-gray-200",
}));

Alpine.start();
