<script setup>

 import {Link} from '@inertiajs/inertia-vue3';
 import {ref} from 'vue';
         defineProps({
                skills: Object,
                projects: Object
         })

</script>


<template>
     <section id="portfolio" style="background:#D7DEF1; min-height:85vh;color:#040462">
       
        <div class="container py-5">
            <div class="row">
                  <h3 class="text-center"> <b>My Latest Work</b> </h3>
                  <p class="text-center">Lorem ipsum repellat quae vitae. et ipsum, ut cum explicabo suscipit quas eius doloribus eaque nulla hic</p>
            </div>
            <div class="row">
                 <div class="col-md-4 col-lg-3" v-for="project in projects.data" :key="project.id">
                         <div class="card my-2 rounded-4 shadow-lg" style="background: #D7DEF1;">
                           <a :href="project.project_url" class="nav-link" target="blank">
                            <div class="card-header">
                             
                              <h5 class="text-center" style="color:#040462">{{project.name}}</h5>
                           
                             
                            </div>
                               <div class="card-body">
                             
                                 <img :src="project.image" :alt="project.name" class="w-100 rounded-3" style="height:200px;">
                                    
                             
                               </div>
                               <div class="card-footer">
                                 <p class="text-center" style="color:#040462">{{project.skill.name}}</p>
                               </div>
                              </a>
                         </div>
                 </div>
            </div>

            
        </div>

     </section>
</template>
