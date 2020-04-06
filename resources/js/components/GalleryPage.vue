<template>
    <div class="col-12">
        <div class>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Gallery</h4>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-primary" @click="newModal()" style="border:0">  Add new</button>
<!--                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleeModal" style="border:0; background-color:yellowgreen">-->
<!--                                    Add new Category-->
<!--                                </button>-->


                                <div class="modal fade" id="exampleeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New categorie</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form @submit.prevent="uplc()" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                        <input v-model="form.categoryy"
                                                               type="text"
                                                               class="form-control"/>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



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
                                                    Edit image
                                                    <br />
                                                    <span
                                                        class="card-subtitle mb-2 text-muted"
                                                        style="font-size:15px"
                                                    >Max image size 5 mb</span>
                                                </h5>
                                                <h5 class="modal-title" id="exampleModalLongTitle" v-show="!this.editmode">
                                                    Upload image
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
                                                        <label>Category</label>
<!--                                                        <input-->
<!--                                                            v-model="form.subtext"-->
<!--                                                            type="color"-->
<!--                                                            name="subtext"-->
<!--                                                            class="form-control"-->
<!--                                                        />-->
                                                        <select class="custom-select" id="validationCustom04"  v-model="form.subtext" name="subtext" >
                                                            <option selected  value="">Choose...</option>
                                                            <option value="Dental">Dental</option>
                                                            <option value="Surgery">Surgery</option>
                                                            <option value="Laboratory">Laboratory</option>
                                                        </select>

                                                        <!-- <has-error :form="form" field="subtext"></has-error> -->
                                                    </div>
                                                    <div class="custom-file">
                                                        <input
                                                            type="file"
                                                            name="image"
                                                            class="custom-file-input"
                                                            id="customFileLangHTML"
                                                            @change="onInputChange"
                                                        />

                                                        <!-- <has-error :form="form" field="image"></has-error> -->
                                                        <label class="custom-file-label" for="customFileLangHTML"  data-browse="image file">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button v-show="!this.editmode" type="submit" class="btn btn-primary">Save</button>
                                                    <button v-show="this.editmode" type="submit" class="btn btn-success">Update</button>
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
                            <th class="border-top-0">Image</th>
                            <th class="border-top-0">Category</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="slider in sliders" :key="slider.id">
                            <td>
                                <img :src="'/images/' + slider.image" width="70px" />
                            </td>
                            <td>{{slider.subtext}}</td>
                            <td>
                                <a @click="editModal(slider)"  style="cursor: pointer;">
                                    <i class="fas fas fa-edit" style="color:#3490dc;font-size: 17px"></i>
                                </a><span style="font-size:22px; margin-left:2px;margin-right:2px;">|</span>
                                <a @click="deleteSlider(slider.id)"  style="cursor: pointer;">
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
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
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
                    subtext: "",
                    image: "",
                    categoryy :""
                })
            };
        },

        methods: {
            upd() {
                this.$Progress.start();
                this.form.post("/updg/" + this.form.id)
                    .then(() => {
                        this.$Progress.finish();
                        $("#exampleModalLong").modal("hide");
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully updated'
                        })
                    })
                    .catch(()=>{
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
                this.form.post("/uplg")

                    .then((data) => {
                        this.$Progress.finish();
                        $("#exampleModalLong").modal("hide");
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully added'
                        })
                    })
                    .catch(() =>
                    {
                        this.$Progress.fail();
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        }),
                            $("#exampleModalLong").modal("hide")
                    });
            },




            uplc() {
                // this.$Progress.start();
                this.form.post("/uplc")
                    .then((data) => {
                        this.$Progress.finish();
                        // $("#exampleeModalLong").modal("hide");
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully added'
                        })
                    })
                    .catch(() =>
                    {
                        // this.$Progress.fail();
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                            // $("#exampleeModalLong").modal("hide")
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
                        this.form.delete("/deleteSliderg/" + id);
                        // Swal.fire("Deleted!", "Your file has been deleted.", "success");
                    }
                });
            },

            onInputChange(e) {
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onloadend = file => {
                    // console.log('RESULT', reader.result)
                    this.form.image = reader.result;
                };
                reader.readAsDataURL(file);
            },

            loadSliders() {
                axios.get("/showg").then(({ data }) => (this.sliders = data));
            },
        }
    };
</script>
<style lang="scss" scoped>

</style>
