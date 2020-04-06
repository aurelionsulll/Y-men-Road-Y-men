<template>
    <div class="col-12">
        <div class>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Message</h4>
                            <h5 class="card-subtitle"></h5>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <!--<button type="button" class="btn btn-primary" @click="newModal()">  Add new <i class="far fa-plus-square"></i></button>-->
                                <div
                                    class="modal fade"
                                    id="exampleModalLong"
                                    tabindex="-1"
                                    role="dialog"
                                    aria-labelledby="exampleModalLongTitle"
                                    aria-hidden="true"
                                >
                                    <form
                                        @submit.prevent="editmode ? upd() : upl()"
                                        enctype="multipart/form-data"
                                    >
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Slider Text</label>
                                                <input
                                                    v-model="form.readed"
                                                    type="text"
                                                    name="readed"
                                                    class="form-control"
                                                />
                                            </div>
                                            <button v-show="!this.editmode" type="submit" class="btn btn-primary">Save</button>
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
            <div>
                <div>
                    <table class="table v-middle">
                        <thead>
                        <tr class="bg-light">
                            <th class="border-top-0">nom</th>
                            <th class="border-top-0">email</th>
                            <th class="border-top-0">subject</th>
                            <th class="border-top-0">phone</th>
                            <th class="border-top-0">message</th>
                            <th class="border-top-0">action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="slider in sliders" :key="slider.id" :class="slider.readed ? 'alert alert-success' : 'alert alert-danger'" style="b">
                            <td>{{slider.name}}</td>
                            <td>{{slider.mail}}</td>
                            <td>0{{slider.subject}}</td>
                            <td>{{slider.phone}}</td>
                            <td>{{slider.autre}}</td>
                            <td>
                                <a style="cursor: pointer;" :href="'tel:' + slider.phone">
                                    <i class="fas fa-phone" style="color:#F39C12;font-size:17px; margin-right: 5px"></i>
                                </a>
                                <a style="cursor: pointer;" :href="'mailto:' + slider.mail">
                                    <i class="fas fa-envelope" style="color:#3498DB;font-size:17px; margin-right: 5px"></i>
                                </a>
                                <a @click="deleteSlider(slider.id)"  style="cursor: pointer;">
                                    <i class="fas fa-trash" style="color:#E74C3C;font-size:17px;margin-right: 5px"></i>
                                </a>
                                <a v-show="!slider.readed" type="submit" class="fas fa-check-square" style="color:#48C9B0; font-size:17px; cursor: pointer;" @click="uplapp(slider.id)"></a>
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

                    readed : 0
                })
            };
        },

        methods: {

            uplapp(id) {
                this.$Progress.start();
                this.form.readed = 1;
                this.form.post("/uplcon/"+ id)
                    .then((data) => {
                        this.$Progress.finish();
                        $("#exampleModalLong").modal("hide");
                        this.form.reset();
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
                        });
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
                        this.form.delete("/deleteSlidercon/" + id);
                    }
                });
            },

            loadSliders() {
                axios.get("/showcon").then(({ data }) => (this.sliders = data));
            }
        }
    };
</script>
<style lang="scss" scoped>

</style>
