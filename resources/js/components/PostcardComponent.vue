<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <h3>Lista Postcards:</h3>
                        <!-- recupero la route in props -->
                        <a class="btn btn-primary mx-2" :href="route">CREATE NEW POSTCARD</a>
                    </div>

                    <div v-for="postcard in postcards" :key="postcard.id" class="card-body">
                        {{postcard.name}} - {{postcard. address}} - 
                        <span v-if="postcard.image"> {{postcard.image}} </span>
                        <span v-else>no-image</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                postcards: [],
            }
        },
        // route è un obj: {route: String, required: true}
        props: {
            route: {
                route: String,
                required: true
            }
        },
        mounted() {
            axios.get('api/postcards/list')
                .then((result) => {
                    console.log(result.data);
                    this.postcards = result.data;
                }).catch((err) => {
                    console.error(err);
                });
        }
    }
</script>
