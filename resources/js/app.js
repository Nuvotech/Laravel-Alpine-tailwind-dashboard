import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;

Alpine.store("sidebar", {
    full: true,
    active: "home",
    navOpen: true,
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
    toggle() {
        this.open = !this.open;
    },
    activetab: "bg-gray-800 text-gray-200",
}));

Alpine.start();
