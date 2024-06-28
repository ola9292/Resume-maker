<template>
     <Nav>

            <div class="form-container">
               <form @submit.prevent="submit" class="form-sub-container">
                <div class="mb-8">
                        <h3 class="text-2xl">Update Profile</h3>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">First Name</label>
                            <input class="" type="text" v-model="form.first_name">
                            <div v-if="$page.props.errors.first_name" v-text="$page.props.errors.first_name" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">Last Name</label>
                            <input class="" type="text" v-model="form.last_name">
                            <div v-if="$page.props.errors.last_name" v-text="$page.props.errors.last_name" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Profession</label>
                            <input class="" type="text" v-model="form.profession">
                            <div v-if="$page.props.errors.profession" v-text="$page.props.errors.profession" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">Email</label>
                            <input class="" type="email" v-model="form.email">
                            <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Phone</label>
                            <input class="" type="text" v-model="form.phone">
                            <div v-if="$page.props.errors.phone" v-text="$page.props.errors.phone" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">Website</label>
                            <input class="" type="text" v-model="form.website">
                            <div v-if="$page.props.errors.website" v-text="$page.props.errors.website" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item">
                            <label for="">Country</label>
                            <input class="" type="text" v-model="form.country">
                            <div v-if="$page.props.errors.country" v-text="$page.props.errors.country" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="form-item">
                            <label for="">City</label>
                            <input class="" type="text" v-model="form.city">
                            <div v-if="$page.props.errors.city" v-text="$page.props.errors.city" class="text-red-600 text-sm"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item-full">
                            <label for="">Summary</label>
                            <textarea class="" v-model="form.summary"></textarea>
                            <div v-if="$page.props.errors.summary" v-text="$page.props.errors.summary" class="text-red-600 text-sm"></div>
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
                user_profile: Object
            },
            data(){
                return{
                    form:{
                        first_name:this.user_profile.first_name,
                        last_name:this.user_profile.last_name,
                        profession:this.user_profile.profession,
                        email:this.user_profile.email,
                        phone:this.user_profile.phone,
                        website:this.user_profile.website,
                        country:this.user_profile.country,
                        city:this.user_profile.city,
                        summary:this.user_profile.summary
                    }

                }
            },
            methods:{
                submit(){
                    const url = `/personal-details/edit/${this.user_profile.id}`;
                    this.$inertia.put(url, this.form);
                }
            }
    }
</script>
<style>
    .big-container{
        width: 1200px;
        margin: 250px auto;
        text-align: center;
    }
    .btn{
        padding:8px 16px;
        border-radius: 5px;
        color: white;
        border: none;
    }
</style>
