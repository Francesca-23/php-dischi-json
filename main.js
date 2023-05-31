const { createApp } = Vue

createApp({

    data() {
        return {
            dischi: '',
            indexDisc: '',
        }
    },

    created() {
        this.chiamataApi()
    },

    methods: {

        chiamataApi() {
            axios.get('server.php').then((res) => {
                this.dischi = res.data
            })
        },

        clickDisc(i) {
            this.indexDisc = this.dischi[i]
        },

        closeDisc() {
            this.indexDisc = ''
        }

    }

}).mount('#app')