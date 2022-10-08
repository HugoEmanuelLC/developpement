const app = new Vue({
    el: '#appSw',

    data: {
        
        active_side_leftPhone: false,
        active_side_leftMenu: false,
        desactive_side_left: true,
    },

    methods: {

        toggleClassInSideLeftPhone() {
            this.desactive_side_left = false;
            this.active_side_leftPhone = true;
        },
        toggleClassInSideLeftMenu() {
            this.desactive_side_left = false;
            this.active_side_leftMenu = true;
        },
        toggleClassOfSideLeft() {
            this.active_side_leftPhone = false;
            this.active_side_leftMenu = false;
            this.desactive_side_left = true;
        },
    }
})