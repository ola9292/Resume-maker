<template>
    <div class="border min-h-screen flex justify-center items-center">
        <div>
            <h1 class="text-3xl">Login</h1>
            <div class="border px-4 py-8 rounded-lg">
                <form action="" @submit.prevent="submit">
                    <div class="flex flex-col">
                        <div class="my-2 flex flex-col">
                            <label for="">Email</label>
                            <input v-model="form.email" type="email" class="w-96 p-2 border rounded" placeholder="Email">
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="">Password</label>
                            <input v-model="form.password" type="password" class="w-96 p-2 border rounded" placeholder="Password">
                        </div>
                        <div class="my-2">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Login</button>
                        </div>
                        <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-600 text-sm"></div>
                        <p>Click to register <a href="/register" class="text-blue-700">Register</a></p>
                    </div>
                </form>
            </div>
        </div>

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




