<template>
    <Nav>

            <div class="form-container">

                <form @submit.prevent="submit" class="form-sub-container">
                    <div class="mb-8">
                        <h3 class="text-2xl">Create Profile</h3>
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
                            <textarea class="textarea" v-model="form.summary"></textarea>
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
.form-container{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

}
.form-sub-container-small{
    padding: 0 20px;
    width: 800px;
}
.form-sub-container{
    width: 800px;
    padding: 0 20px;
}
.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 10px;
}
input, textarea{
    border: 1px solid #dc3545;
    padding: 15px 6px;

}
.form-item{
    display: flex;
    flex-direction: column;
    width: 49%;
}
.form-item-full{
    display: flex;
    flex-direction: column;
    width: 100%;
}
.col{
    display: flex;
    flex-direction: column;
    width: 40%;
}
@media only screen and (max-width: 600px) {
 .row{
    flex-direction: column;
 }
 .form-item{
    width: 100%;
}
}
</style>
