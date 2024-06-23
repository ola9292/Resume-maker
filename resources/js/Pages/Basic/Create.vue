<template>
    <Nav>

            <div class="border min-h-screen flex justify-center items-center">

                <form @submit.prevent="submit">
                    <div class="mb-8">
                        <h3 class="text-2xl">Create Profile</h3>
                    </div>

                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">First Name</label>
                            <input class="border w-64 mr-4 mb-4 py-1 rounded" type="text" v-model="form.first_name">
                            <div v-if="$page.props.errors.first_name" v-text="$page.props.errors.first_name" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Last Name</label>
                            <input class="border w-64 mr-4 py-1 rounded mb-4" type="text" v-model="form.last_name">
                            <div v-if="$page.props.errors.last_name" v-text="$page.props.errors.last_name" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Profession</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="text" v-model="form.profession">
                            <div v-if="$page.props.errors.profession" v-text="$page.props.errors.profession" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Email</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="email" v-model="form.email">
                            <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Phone</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="text" v-model="form.phone">
                            <div v-if="$page.props.errors.phone" v-text="$page.props.errors.phone" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Website</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="text" v-model="form.website">
                            <div v-if="$page.props.errors.website" v-text="$page.props.errors.website" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Country</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="text" v-model="form.country">
                            <div v-if="$page.props.errors.country" v-text="$page.props.errors.country" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">City</label>
                            <input class="border w-64 mr-4 py-1 rounded" type="text" v-model="form.city">
                            <div v-if="$page.props.errors.city" v-text="$page.props.errors.city" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col w-full">
                            <label for="">Summary</label>
                            <textarea class="border mr-4 py-1 rounded" v-model="form.summary"></textarea>
                            <div v-if="$page.props.errors.summary" v-text="$page.props.errors.summary" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="border py-2 px-4 rounded rounded-lg text-white bg-black" type="submit">Continue</button>
                    </div>
               </form>

            </div>

    </Nav>

</template>
<script>
import Nav from '../../Shared/Nav.vue'
import { Link } from '@inertiajs/vue3'
    export default{
            components:{ Nav, Link },
            data(){
                return{
                    form:{
                        first_name:'',
                        last_name:'',
                        profession:'',
                        email:'',
                        phone:'',
                        website:'',
                        country:'',
                        city:''
                    }

                }
            },
            methods:{
                submit(){
                    this.$inertia.post('/personal-details', this.form)
                }
            }
    }
</script>
<style>
.create-container{
    padding: 100px;
    width: 1000px;
}
.row{
    display: flex;
    justify-content: space-between;
    /* border w-64 mr-4: 1px solid black; */
}
.col{
    display: flex;
    flex-direction: column;
    width: 40%;
}
</style>
