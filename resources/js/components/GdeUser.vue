<template>
    <div class="col-12">
        <div class>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">labo activity</h4>
                            <h5 class="card-subtitle">Add ur labo activity</h5>
                        </div>
                        <div class="form-inline my-2 my-lg-0" style="margin-left:05%;margin-right:05%" >
                            <input class="form-control mr-sm-2"
                                   type="search"
                                   placeholder="Search"
                                   aria-label="Search"
                                   v-model="search"
                                   @keyup="searchon"
                                   style="width:500px">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" @click="searchon">
                                Search
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
<!--                    <div class="card"  v-for="slider in sliders.data" :key="slider.id" style="width: 20%; float : left;" >-->
<!--                        <img :src="'/images/' + slider.image" class="card-img-top" alt="...">-->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title">Card title</h5>-->
<!--                            <a href="#" class="btn btn-primary">Go somewhere</a>-->
<!--                        </div>-->
<!--                    </div>-->
                <div class="card"  v-for="slider in sliders.data" :key="slider.id" style="width: 20%; float : left;">
                    <img :src="'/images/' + slider.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{slider.nom}}</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-right">
            <pagination :data="sliders" @pagination-change-page="getResults"></pagination>
        </div>
    </div>
</template>
<script>


    export default {
        created() {
            this.loadSliders();
            Fire.$on('searching',() => {
                let query = this.search;
                axios.get('/gdesearch?q=' +query)
                    .then((data) => {
                        this.sliders = data.data
                    })
                    .catch(() => {
                        console.log('bla bla')
                    })
            })
        },

        data() {
            return {
                search : '',
                sliders: {},
                form: new Form({
                    id: "",
                    nom: "",
                    description: "",
                    recommandations : "",
                    prelevement : "",
                    definition : "",
                    technique : "",
                    delais : "",
                    image: ""
                })
            };
        },

        methods: {

            searchon () {
                Fire.$emit('searching');
            },

            getResults(page = 1) {
                axios.get('/gde_show?page='+ page)
                    .then(response => {
                        this.sliders = response.data;
                    });
            },

            loadSliders() {
                axios.get("/gde_show").then(({ data }) => (this.sliders = data));
            }
        }
    };
</script>
<style lang="scss" scoped>
</style>
