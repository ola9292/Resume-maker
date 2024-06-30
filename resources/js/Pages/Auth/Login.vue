<template>
    <div class="form-container">
                <form class="border rounded-lg form-sub-container-small" action="" @submit.prevent="submit">
                    <div class="my-4">
                        <h3 class="text-2xl">Login</h3>
                    </div>
                    <div class="">
                        <div class="form-item-full mb-4">
                            <label for="">Email</label>
                            <input v-model="form.email" type="email" class="" placeholder="Email">
                        </div>
                        <div class="form-item-full mb-4">
                            <label for="">Password</label>
                            <input v-model="form.password" type="password" class="" placeholder="Password">
                        </div>
                        <div class="my-2">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Login</button>
                        </div>
                        <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-600 text-sm"></div>
                        <p>Click to register <a href="/register" class="text-blue-700">Register</a></p>
                    </div>
                </form>

</div>
</template>
<script>
export default{
    data(){
   return{
        form:{
            password:'',
            email:''
        }
   }
},
methods:{
    submit(){
        this.$inertia.post('/login',this.form)
    }
}
}
</script>




