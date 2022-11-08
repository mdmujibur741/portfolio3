<script setup>
 
 import {ref} from 'vue';
 import { useForm } from '@inertiajs/inertia-vue3';

 const showMessage = ref(false);

 function SetShowMessage(value){
    showMessage.value = value
 }

 function cleanForm(){
    form.reset();
    SetShowMessage(true);
    setTimeout(() =>SetShowMessage(false),3000)
 }


 const form = useForm({
      name: "",
      email : "",
      message : ""
 })

 const submit =  () => {
        form.post(route('contact'),{
            preserveScroll: true,
            onSuccess: () => cleanForm(),
        })
 }

</script>


<template>
 <section id="contact" style="min-height: 85vh; background:#D7DEF1; color:#040462;">
           <div class="container p-5">
                   <h2 class="text-center"> <b>Contact me</b> </h2>
                   <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aspernatur tenetur suscipit cumque distinctio veritatis natus ad, necessitatibus repellat molestiae quis non quidem porro! Voluptatibus consectetur est facere ullam praesentium.</p>
               <div class="row py-5">
                        <div class="col-md-6 col-sm-12">
                             <div class="row py-5">
                                <div class="col-2 py-4">
                                    <img :src="'/storage/Logo/message.png'" alt="" class="float-end" style="width:50px">
                                </div>
                                 <div class="col-10 py-4"> 
                                    <strong> Have A Question <br> I am Here To Help You <br> @contact@gmail.com </strong>
                                 </div>
                                 <div class="col-2 py-4">
                                    <img :src="'/storage/Logo/location.png'" alt="" class="float-end" style="width:50px">
                                </div>
                                <div class="col-10 py-4"> 
                                    <strong> Have A Question <br> I am Here To Help You <br> @contact@gmail.com </strong>
                                 </div>
                             </div>
                                 
                        </div>

                        <div class="col-md-6 col-sm-12">

                            <div v-if="showMessage" class="text-center rounded-3 py-1 shadow mb-4" style="background:#E6C7AD">
                                <strong class="py-4" >Thank You For Messaging</strong>
                            </div>

                              <form @submit.prevent="submit" >
                                   <div class="mb-3">
                                    <label for="name" class="px-2"> <b>Name</b> </label>
                                        <input type="text" v-model="form.name" class="form-control form-control-sm rounded-3" placeholder="Enter Your name">
                                        <strong v-if="form.errors.name" class="text-danger"> {{form.errors.name}} </strong>
                                   </div>
                                   <div class="mb-3">
                                    <label for="email" class="px-2"> <b>Email</b> </label>
                                        <input type="text" v-model="form.email" class="form-control form-control-sm rounded-3" placeholder="Enter Your Email">
                                        <strong v-if="form.errors.email" class="text-danger"> {{form.errors.email}} </strong>
                                    </div>
                                   <div class="mb-3">
                                    <label for="message" class="px-2"> <b>Message</b> </label>
                                         <textarea v-model="form.message" rows="3" class="form-control rounded-4" spellcheck="false" placeholder="Enter Your Message"></textarea>
                                         <strong v-if="form.errors.message" class="text-danger"> {{form.errors.message}} </strong>
                                        </div>
                                   <div class="mb-3 text-center">
                                          <input type="submit" class="btn text-light" value="Send" style="background: #040462;">
                                   </div>
                              </form>
                        </div>
               </div>
           </div>
 </section>
</template>