<template>

    <div class="form-container">

                <form class="border px-4 py-8 rounded-lg form-sub-container-small" action="" @submit.prevent="submit">
                    <div class="my-4">
                        <h3 class="text-2xl">Register</h3>
                    </div>
                    <div class="">
                        <div class="my-2 form-item-full">
                            <label for="">Name</label>
                            <input v-model="form.name" type="text" class="" placeholder="Name">
                            <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="my-2 form-item-full">
                            <label for="">Email</label>
                            <input v-model="form.email" type="email" class="" placeholder="Email">
                            <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="my-2 form-item-full">
                            <label for="">Password</label>
                            <input v-model="form.password" type="password" class="" placeholder="Password">
                            <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-600 text-sm"></div>
                        </div>
                        <div class="my-2">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Register</button>
                        </div>


                    </div>
                </form>
    </div>

</template>

<script>
export default{
data(){
    return{
        form:{
            name:'',
            email:'',
            password:''
        }
    }
},
methods:{
    submit(){
        this.$inertia.post('/register', this.form)
    }
}


}
</script>
