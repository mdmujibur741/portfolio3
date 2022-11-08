<template>
    <Head title="Skill Add" />
    
    <AuthenticatedLayout>
    

        <div class="container-fluid">
             <div class="row justify-content-center mt-5">
             
            <div class="col-md-5 shadow p-5 rounded-4">
                <form @submit.prevent="submit" class="py-6 px-2">
                    <div class="mb-3">
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="form-control form-control-sm rounded-3" v-model="form.name" autofocus autocomplete="name" />
                        <InputError class="mt-2 text-danger" :message="$page.props.errors.name" />
                    </div>


                    <div class="mb-3">
                  <InputLabel for="image" value="Image" />
                        <TextInput id="image" type="file" class="form-control form-control-sm rounded-3 border p-1" v-model="form.image" @input="form.image = $event.target.files[0]"/>
                        <InputError class="mt-2 text-danger" :message="$page.props.errors.image" />
                    </div>
        
                   
        
              
        
                    <div class="d-flex justify-content-center mt-4">
                     
        
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Submit
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
import { Head, useForm  } from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
        skill: Object, 
    })


const form = useForm({
      name: props.skill?.name,
      image: null
})

const submit = () => {
      Inertia.post(`/skills/${props.skill.id}`,{
        _method: "put",
        name: form.name,
        image: form.image,
      } )
}

 
</script>