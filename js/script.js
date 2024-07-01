const { createApp } = Vue

createApp({
    data() {
        return{
            todoList: [],
        }
    },
    methods: {
        getData: function() {
            axios.get('./server.php')
                .then((response) => {
                    this.todoList = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                })
                .finally(function () {

                });
        }
    },
    created() {
        this.getData()
    }
}).mount('#app')