<template>
    <Nav>
        <div class="form-container">
               <form @submit.prevent="submit" class="form-sub-container">
                <div class="mb-8">
                        <h3 class="text-2xl">Create Education</h3>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Degree</label>
                            <input class="" type="text" v-model="form.degree">
                            <div v-if="$page.props.errors.degree" v-text="$page.props.errors.degree" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">Institution Name</label>
                            <input class="" type="text" v-model="form.school">
                            <div v-if="$page.props.errors.school" v-text="$page.props.errors.school" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Graduation Year</label>
                            <input class="" type="text" v-model="form.graduation_year">
                            <div v-if="$page.props.errors.graduation_year" v-text="$page.props.errors.graduation_year" class="text-red-600 text-sm"></div>
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
                        degree:'',
                        school:'',
                        graduation_year:'',
                    }

                }
            },
            methods:{
                submit(){
                    this.$inertia.post('/education', this.form)
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
        /* background-form-itemor: green; */
        color: white;
        border: none;
    }
</style>
