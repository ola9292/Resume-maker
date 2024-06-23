<template>
    <Nav>
        <div class="border min-h-screen flex justify-center items-center">

               <form @submit.prevent="submit">
                <div class="mb-8">
                        <h3 class="text-2xl">Edit Education</h3>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Degree</label>
                            <input class="border w-64 mr-4 mb-4  px-2 py-1 rounded" type="text" v-model="form.degree">
                            <div v-if="$page.props.errors.degree" v-text="$page.props.errors.degree" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Institution Name</label>
                            <input class="border w-64 mr-4 mb-4 px-2 py-1 rounded" type="text" v-model="form.school">
                            <div v-if="$page.props.errors.school" v-text="$page.props.errors.school" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex flex-col">
                            <label for="">Graduation Year</label>
                            <input class="border w-64 mr-4 mb-4 px-2 py-1 rounded" type="text" v-model="form.graduation_year">
                            <div v-if="$page.props.errors.graduation_year" v-text="$page.props.errors.graduation_year" class="text-red-600 text-sm"></div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="border py-2 px-4 rounded rounded-lg text-white bg-black" type="submit">Update</button>
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
            props:{
                education: Object
            },
            data(){
                return{
                    form:{
                        degree:this.education.degree,
                        school:this.education.school,
                        graduation_year:this.education.graduation_year,
                    }

                }
            },
            methods:{
                submit(){
                    const url = `/education/edit/${this.education.id}`;
                    this.$inertia.put(url, this.form);
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
