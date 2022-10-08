const app = new Vue({
    el: '#appSw',

    data: {
        
        active_side_left: false,
        desactive_side_left: true,
    },

    methods: {

        toggleClassInSideLeft() {
            
            this.desactive_side_left = false;
            this.active_side_left = true;
        },
        toggleClassOfSideLeft() {
            this.active_side_left = false;
            this.desactive_side_left = true;
        },
    }
})