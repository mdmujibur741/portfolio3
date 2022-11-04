<template>
    <Head title="Project Index" />
    
    <AuthenticatedLayout>
      

        <div class="container py-4">
             <div class="row">
                <div class="d-flex justify-content-end m-2 p-2"> 
                    <Link :href="route('projects.create')" class="btn btn-sm btn-success rounded-pill">Add  Project</Link>
                </div>
                <table class="table p-5 table-bordered border-light shadow" style="border-radius: 10px;">
                    <thead>
                       <tr >
                           <th>Serial No</th>
                           <th>Skill</th>
                           <th>Name</th>
                           <th>Project url</th>
                           <th>Image</th>
                           <th>Action</th>
                       </tr>

                    </thead>
                    <tbody>
                          <tr v-for="project in projects.data" :key="project">
                              <td> {{project.id}} </td>
                              <td> {{project.skill.name}} </td>
                              <td> {{project.name}} </td>
                              <td> {{project.project_url}} </td>
                              <td> 
                                      <img :src="project.image" alt="" srcset="" class="rounded-circle" style="width:40px ; height:40px !important">
                             </td>
                              <td> 
                                   <Link :href="route('projects.edit',project.id)" class="btn btn-sm btn-success px-2 me-3 rounded-pill"> Edit</Link>
                                   <Link :href="route('projects.destroy',project.id)" method="delete" type="button" as="button" onclick="return confirm('Are You Sure You delete This Item')" class="btn btn-sm btn-danger px-2 mr-3 rounded-pill"> Delete</Link>
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
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    projects : Object,
});

</script>