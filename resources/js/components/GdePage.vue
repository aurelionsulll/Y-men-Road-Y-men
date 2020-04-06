<template>
    <div class="col-12">
        <div class>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Les Analyses</h4>
                            <h5 class="card-subtitle"></h5>
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
                                    <i class="fas fa-search"></i>
                                </button>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-outline-primary" @click="newModal()">
                                    Add new
                                </button>
                                <div
                                    class="modal fade"
                                    id="exampleModalLong"
                                    tabindex="-1"
                                    role="dialog"
                                    aria-labelledby="exampleModalLongTitle"
                                    aria-hidden="true"
                                >
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" v-show="this.editmode">
                                                    Edit activity
                                                    <br />
                                                    <span
                                                        class="card-subtitle mb-2 text-muted"
                                                        style="font-size:15px"
                                                    >Max image size 5 mb</span>
                                                </h5>
                                                <h5 class="modal-title" id="exampleModalLongTitle" v-show="!this.editmode">
                                                    Upload activity
                                                    <br />
                                                    <span
                                                        class="card-subtitle mb-2 text-muted"
                                                        style="font-size:15px"
                                                    >Max image size 5mb</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form
                                                @submit.prevent="editmode ? upd() : upl()"
                                                enctype="multipart/form-data"
                                            >
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>nom</label>
                                                        <input v-model="form.nom" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input v-model="form.description" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>recommandations</label>
                                                        <input v-model="form.recommandations" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>prelevement</label>
                                                        <input v-model="form.prelevement" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>definition</label>
                                                        <input v-model="form.definition" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>technique</label>
                                                        <input v-model="form.technique" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>delais</label>
                                                        <input v-model="form.delais" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="custom-file">
                                                        <input
                                                            type="file"
                                                            name="image"
                                                            class="custom-file-input"
                                                            id="customFile"
                                                            @change="onInputChange"
                                                        />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button v-show="!this.editmode" type="submit" class="btn btn-primary">Save</button>
                                                    <button
                                                        v-show="this.editmode"
                                                        type="submit"
                                                        class="btn btn-success"
                                                    >Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr class="bg-light">
                            <th class="border-top-0">nom</th>
                            <th class="border-top-0" width="500px">Description</th>
                            <th class="border-top-0">recommandations</th>
                            <th class="border-top-0">prelevement</th>
                            <th class="border-top-0">definition</th>
                            <th class="border-top-0">technique</th>
                            <th class="border-top-0">delais</th>
                            <th class="border-top-0">image</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="slider in sliders.data" :key="slider.id">
                            <td>{{slider.nom}}</td>
                            <td>{{slider.description}}</td>
                            <td>{{slider.recommandations}}</td>
                            <td>{{slider.prelevement}}</td>
                            <td>{{slider.definition}}</td>
                            <td>{{slider.technique}}</td>
                            <td>{{slider.delais}}</td>
                            <td>
                                <img :src="'/images/' + slider.image" width="70px" />
                            </td>
                            <td>
                                <a @click="editModal(slider)" style="cursor: pointer;">
                                    <i class="fas fas fa-edit" style="color:#3490dc;font-size: 17px"></i>
                                </a>
                                <a @click="deleteSlider(slider.id)" style="cursor: pointer;">
                                    <i class="fas fa-trash" style="color:red;font-size:17px"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <div class="float-right">
                <pagination :data="sliders" @pagination-change-page="getResults"></pagination>
            </div>
    </div>
</template>
<script>

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: toast => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        }
    });

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
            // setInterval(() => this.loadSliders(), 1500);
        },

        data() {
            return {
                search : '',
                editmode: false,
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

            // searchon : _.debounce(() => {
            //     Fire.$emit('searching');
            // },1000),
            searchon () {
                Fire.$emit('searching');
            },

            getResults(page = 1) {
                axios.get('/gde_show?page='+ page)
                    .then(response => {
                        this.sliders = response.data;
                    });
            },

            upd() {
                this.$Progress.start();
                this.form
                    .post("/gde_upd/" + this.form.id)
                    .then(() => {
                        this.$Progress.finish();
                        this.loadSliders();
                        $("#exampleModalLong").modal("hide");
                        Toast.fire({
                            icon: "success",
                            title: "Successfully updated"
                        });
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    });
            },

            editModal(slider) {
                this.editmode = true;
                this.form.reset();
                $("#exampleModalLong").modal("show");
                this.form.fill(slider);
            },

            newModal() {
                this.editmode = false;
                this.form.reset();
                $("#exampleModalLong").modal("show");
            },

            upl() {
                this.$Progress.start();
                this.form
                    .post("/gde_upl")

                    .then(data => {
                        this.$Progress.finish();
                        this.loadSliders();
                        $("#exampleModalLong").modal("hide");
                        Toast.fire({
                            icon: "success",
                            title: "Successfully added"
                        });
                    })
                    .catch(() => {
                        this.$Progress.fail();
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!"
                        }),
                            $("#exampleModalLong").modal("hide");
                    });
            },

            deleteSlider(id) {
                Swal.fire({
                    title: "Are you sure?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then(result => {
                    if (result.value) {
                        this.form.delete("/gde_deleteSlider/" + id);
                        this.loadSliders();
                    }
                });
            },

            onInputChange(e) {
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onloadend = file => {
                    this.form.image = reader.result;
                };
                reader.readAsDataURL(file);
            },

            loadSliders() {
                axios.get("/gde_show").then(({ data }) => (this.sliders = data));
            }
        }
    };
</script>
<style lang="scss" scoped>
    .inner-wrapper {
        width: 500px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
