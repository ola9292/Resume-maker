<template>
    <Nav>
        <div class="border min-h-screen flex justify-center items-center">

               <form @submit.prevent="submit">
                <div class="mb-8">
                    <h3 class="text-2xl">Creat Work History</h3>
                </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Company Name</label>
                            <input class="border w-64 mr-4 mb-4 py-1 rounded" type="text" v-model="form.company">
                            <div v-if="$page.props.errors.company" v-text="$page.props.errors.company" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Position</label>
                            <input class="border w-64 mr-4 mb-4 py-1 rounded" type="text" v-model="form.position">
                            <div v-if="$page.props.errors.position" v-text="$page.props.errors.position" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Start Year</label>
                            <input class="border w-64 mr-4 mb-4 py-1 rounded" type="text" v-model="form.start_year">
                            <div v-if="$page.props.errors.start_year" v-text="$page.props.errors.start_year" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">End Year</label>
                            <input class="border w-64 mr-4 mb-4 py-1 rounded" type="text" v-model="form.end_year">
                            <div v-if="$page.props.errors.end_year" v-text="$page.props.errors.end_year" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Duties</label>
                            <textarea class="border mr-4 mb-4 py-1 px-4 rounded" v-model="form.duties" cols="64" rows="10"></textarea>
                            <div v-if="$page.props.errors.duties" v-text="$page.props.errors.duties" class="text-red-600 text-sm"></div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="border py-2 px-4 rounded rounded-lg text-white bg-black" type="submit">Save</button>
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
                        company:'',
                        position:'',
                        start_year:'',
                        end_year:'',
                        duties:''
                    }

                }
            },
            methods:{
                submit(){
                    this.$inertia.post('/work-history', this.form)
                }
            }
    }
</script>
<style>
    .container{
        width: 800px;
        margin: 250px auto;
        /* border:1px solid black; */
        text-align: center;
    }
    .btn{
        padding:8px 16px;
        border-radius: 5px;
        background-color: green;
        color: white;
        border: none;
    }
</style>
