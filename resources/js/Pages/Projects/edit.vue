<template>
    <Head title="Project Add" />
    
    <AuthenticatedLayout>
     

        <div class="container-fluid mt-5">
             <div class="row justify-content-center">
              
           <div class="col-md-5 shadow rounded-4 p-5">
            <form @submit.prevent="submit">

                <div class="mb-3">
                 <InputLabel for="skill_id" value="Skill" />
                    <select v-model="form.skill_id" class="form-select form-select-sm rounded-3" name="skill_id" id="skill_id">
                        <option  v-for="skill in skills" :key="skill" :value="skill.id"> {{skill.name}} </option>
                    </select>
                    <InputError class="mt-2 text-danger" :message="$page.props.errors.skill_id" />
                </div>

                 <div class="mb-3">
                     <InputLabel for="name" value="Name" />
                     <TextInput id="name" type="text" class="form-control form-control-sm rounded-3" v-model="form.name" autofocus autocomplete="name" />
                     <InputError class="mt-2 text-danger" :message="$page.props.errors.name" />
                 </div>
     
                 <div class="mb-3">
                     <InputLabel for="project_url" value="Url" />
                     <TextInput id="project_url" type="text" class="form-control form-control-sm rounded-3" v-model="form.project_url" autofocus autocomplete="url" />
                     <InputError class="mt-2 text-danger" :message="$page.props.errors.project_url" />
                 </div>

                 <div class="mb-3">
                     <InputLabel for="image" value="Image" />
                           <TextInput id="image" type="file" class="form-control form-control-sm rounded-3 border p-1" v-model="form.image" @input="form.image = $event.target.files[0]"/>
                           <InputError class="mt-2 text-danger" :message="$page.props.errors.image" />
                       </div>
           

             

                 
     
             
     
                 <div class="d-flex justify-content-center mt-4">
                   
     
                     <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                       Update
                     </PrimaryButton>
                 </div>
             </form> 
           </div>

             </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Inertia } from '@inertiajs/inertia';

   const props = defineProps({
        skills : Array,
        project : Object
    })

const form = useForm({
    skill_id : props.project?.skill_id,
    name : props.project?.name,
    project_url: props.project?.project_url,
    image: null,


});

const submit = () =>{
    Inertia.post(`/projects/${props.project.id}`,{
         _method: "put",
         name: form.name,
         skill_id: form.skill_id,
         project_url: form.project_url,
         image: form.image, 
    })
}

</script>