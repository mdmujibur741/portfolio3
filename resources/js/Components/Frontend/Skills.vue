<script setup>

defineProps({
      skills: Object
});

</script>



<template>
    <div>
         <section id="skill" style="color:#040462; min-height: 85vh; background: #e7c6aaf1;">
             <div class="container py-5">
                <h3 class="py-2 text-center fw-bold">My Programing Skill </h3>
                                                  <p class="text-center text-light">Lorem ipsum, dolntur accusamus!</p>
                   <div class="row justify-content-center">
                 
                    <div class="col-md-4 col-lg-3 py-3" v-for="skill in skills.data" :key="skill.id">
                            <div class="card" style="background: #D7DEF1;">
                                  <div class="card-body text-center">
                                          <img :src="skill.image" :alt="skill.name" class="img-fluid rounded-3" style="width: 100%; height:200px !important">
                                  </div>
                                  <div class="card-footer text-center">
                                      <h4 class="fw-lighter text-capitalize fst-italic"> {{skill.name}} </h4>
                              </div>
                            </div>
                    </div>
                         
                   </div>
             </div>
         </section>
    </div>
</template>


