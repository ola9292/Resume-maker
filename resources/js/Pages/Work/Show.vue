<template>
    <Nav>
        <div class="form-container">

               <form @submit.prevent="submit" class="form-sub-container">
                <div class="mb-8">
                    <h3 class="text-2xl">Edit Work History</h3>
                </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Company Name</label>
                            <input class="" type="text" v-model="form.company">
                            <div v-if="$page.props.errors.company" v-text="$page.props.errors.company" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">Position</label>
                            <input class="" type="text" v-model="form.position">
                            <div v-if="$page.props.errors.position" v-text="$page.props.errors.position" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Start Year</label>
                            <input class="" type="text" v-model="form.start_year">
                            <div v-if="$page.props.errors.start_year" v-text="$page.props.errors.start_year" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">End Year</label>
                            <input class="" type="text" v-model="form.end_year">
                            <div v-if="$page.props.errors.end_year" v-text="$page.props.errors.end_year" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item-full">
                            <label for="">Duties</label>
                            <textarea class="" v-model="form.duties"></textarea>
                            <div v-if="$page.props.errors.duties" v-text="$page.props.errors.duties" class="text-red-600 text-sm"></div>
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
                workHistory:Object
            },
            data(){
                return{
                    form:{
                        company:this.workHistory.company,
                        position:this.workHistory.position,
                        start_year:this.workHistory.start_year,
                        end_year:this.workHistory.end_year,
                        duties:this.workHistory.duties
                    }

                }
            },
            methods:{
                submit(){
                    const url = `/work-history/edit/${this.workHistory.id}`;
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
