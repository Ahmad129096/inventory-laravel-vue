<template>
    <div>
        <h1>This is report page</h1>
    </div>
</template>
<script>
export default
    {
        mounted() {
            if (!User.loggedIn()) {
                this.$router.push({ name: '/' })
            }
        },
        created() {
            this.getproducts()
        },
        data() {
            return {
                products: []
            }
        },
        methods: {
            getproducts() {
                axios.get('/api/report/inventoryvaluation')
                    .then(({ data }) => {
                        console.log(data)
                    })
                    .catch()
            }
        }

    }

</script>