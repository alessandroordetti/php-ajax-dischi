const app = new Vue ({
        el: '#app',
        data: {
            dischi: []
        },
        
        created(){
            //chiamata AXIOS VA QUA!!!!!!!!!!!!!!!!!!!!!!!!!!!

            axios.get('http://localhost/php-ajax-dischi-/server/controller.php').then(
                (result) => {
                    this.dischi = result.data.results;
                }).catch((error) => {
                    console.warn (error);
                });
        }
    }
)