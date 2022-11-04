<template>
    <Head title="Skill Index" />
    
    <AuthenticatedLayout>
     

        <div class="container">
             <div class="row">
                <div class="m-2 p-2"> 
                    <Link :href="route('skills.create')" class="btn btn-sm btn-success float-end rounded-pill">Add Skill </Link>
                </div>
                <table class="table table-bordered shadow p-2 border-light rounded-4">
                    <thead>
                       <tr  >
                           <th>Serial Non</th>
                           <th>Name</th>
                           <th>Image</th>
                           <th>Action</th>
                       </tr>

                    </thead>
                    <tbody>
                          <tr v-for="skill in skills.data" :key="skill">
                              <td> {{skill.id}} </td>
                              <td> {{skill.name}} </td>
                              <td> 
                                 <img :src="skill.image" alt="" srcset="" class="rounded-circle" style="width:40px; height:40px !important; ">
                              </td>
                              <td> 
                                   <Link :href="route('skills.edit',skill.id)" class="btn btn-sm btn-success px-2 me-3 rounded-pill"> Edit  </Link>
                                   <Link :href="route('skills.destroy',skill.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger px-2 rounded-pill"> Delete  </Link>
                              </td>
                          </tr>
                    </tbody>
               </table>
             </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link  } from '@inertiajs/inertia-vue3';

defineProps({
        skills: Object,
})

</script>


