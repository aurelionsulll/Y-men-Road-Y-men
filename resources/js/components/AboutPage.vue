<template>
    <div class="col-12">
        <div class>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">À propos de nous page</h4>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-primary" @click="newModal()">
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
                                                    Edit Slider
                                                    <br/>
                                                    <span
                                                        class="card-subtitle mb-2 text-muted"
                                                        style="font-size:15px"
                                                    >Max image size 5 mb</span>
                                                </h5>
                                                <h5 class="modal-title" id="exampleModalLongTitle" v-show="!this.editmode">
                                                    Upload slider
                                                    <br/>
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
                                                        <label>Slider Text</label>
                                                        <input v-model="form.text" type="text" name="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Slider sub text</label>
                                                        <input type="text"name="subtext"
                                                               id
                                                               cols
                                                               rows="6"
                                                               class="form-control"
                                                               v-model="form.subtext">
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
                            <th class="border-top-0">Text</th>
                            <th class="border-top-0" width="500px">Sub text</th>
                            <th class="border-top-0">image</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="slider in sliders" :key="slider.id">
                            <td>{{slider.text}}</td>
                            <td>{{slider.subtext}}</td>
                            <td>
                                <img :src="'/images/' + slider.image" width="70px" />
                            </td>
                            <td>
                                <a @click="editModal(slider)" style="cursor: pointer;">
                                    <i class="fas fas fa-edit" style="color:#3490dc;font-size: 17px"></i>
                                </a>
                                <span style="font-size:22px; margin-left:2px;margin-right:2px;">|</span>
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
            setInterval(() => this.loadSliders(), 1500);
        },

        data() {
            return {
                editmode: false,
                sliders: {},
                form: new Form({
                    id: "",
                    text: "",
                    subtext: "",
                    image: ""
                })
            };
        },

        methods: {
            upd() {
                this.$Progress.start();
                this.form
                    .post("/abouts_upd/" + this.form.id)
                    .then(() => {
                        this.$Progress.finish();
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
                    .post("/abouts_upl")

                    .then(data => {
                        this.$Progress.finish();
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
                        this.form.delete("/abouts_deleteSlider/" + id);
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
                axios.get("/abouts_show").then(({ data }) => (this.sliders = data));
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
