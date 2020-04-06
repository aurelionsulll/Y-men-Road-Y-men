<template>
   <div>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-8">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-md-flex align-items-center">
                               <div>
                                   <h4 class="card-title">Nouveaux rendez-vous</h4>
                               </div>
                           </div>
                           <div class="row">
                               <!-- column -->
                               <div class="col-lg-12">
                                   <table class="table v-middle">
                                       <thead>
                                       <tr class="bg-light">
                                           <th class="border-top-0">nom</th>
                                           <th class="border-top-0">email</th>
                                           <th class="border-top-0">phone</th>
                                           <th class="border-top-0">date</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr v-for="slider in sliders" :key="slider.id">
                                           <td>{{slider.name}}</td>
                                           <td>{{slider.email}}</td>
                                           <td>0{{slider.phone}}</td>
                                           <td>{{slider.date}}</td>
                                       </tr>
                                       </tbody>
                                   </table>
                                   <a class="btn btn-primary float-right" href="http://laboratoireallalelfassi.ma/adminAppointment">En savoir plus</a>
                               </div>
                               <!-- column -->
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card">
                       <div class="card-body">
                           <h4 class="card-title">Lien utile</h4>
                           <div class="feed-widget">
                               <ul class="list-style-none feed-body m-0 p-b-20">
                                   <li class="feed-item">
                                       <div class="feed-icon bg-info"><i class="far fa-comment"></i></div>
                                       <a href="https://app.crisp.chat/initiate/login/" target="_blank">Ouvrir le système de chat</a>
                                   </li>
                                   <li class="feed-item">
                                       <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="ml-auto font-12 text-muted">2 Hours ago</span></li>
                                   <li class="feed-item">
                                       <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="ml-auto font-12 text-muted">31 May</span></li>
                                   <li class="feed-item">
                                       <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user registered.<span class="ml-auto font-12 text-muted">30 May</span></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <!-- column -->
               <div class="col-12">
                   <div class="card">
                       <div class="card-body">
                           <!-- title -->
                           <div class="d-md-flex align-items-center">
                               <div>
                                   <h4 class="card-title">Nouveaux message</h4>
                               </div>
                           </div>
                           <!-- title -->
                       </div>
                       <div class="table-responsive">
                           <table class="table v-middle">
                               <thead>
                               <tr class="bg-light">
                                   <th class="border-top-0">nom</th>
                                   <th class="border-top-0">email</th>
                                   <th class="border-top-0">subject</th>
                                   <th class="border-top-0">phone</th>
                                   <th class="border-top-0">message</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr v-for="slid in slider" :key="slid.id">
                                   <td>{{slid.name}}</td>
                                   <td>{{slid.mail}}</td>
                                   <td>{{slid.subject}}</td>
                                   <td>{{slid.phone}}</td>
                                   <td>{{slid.autre}}</td>
                               </tr>
                               </tbody>
                           </table>
                           <a href="http://laboratoireallalelfassi.ma/admincontact" class="btn btn-primary float-right " style="margin-right:10px;margin-bottom:10px">En savoir plus</a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <!-- column -->

               <!-- column -->

           </div>
       </div>
   </div>
</template>
<script>
    export default {
        created() {
            this.loadSliders();
            this.loadSlider();
        },
        data() {
            return {
                sliders: {},
                slider: {},
            };
        },
        methods: {
            loadSliders() {
                axios.get("/showDahboardApp").then(({ data }) => (this.sliders = data.data));
            },

            loadSlider() {
                axios.get("/showcontacts").then(({ data }) => (this.slider = data.data));
            }
        }
    };
</script>
<style lang="scss" scoped>

</style>
