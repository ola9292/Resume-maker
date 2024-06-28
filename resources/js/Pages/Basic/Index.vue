<template>
    <Nav>
        <div class="px-2">
            <div class="max-w-[700px] shadow-lg shadow-gray-500/50 border border-red-300 hover:border-green-800 rounded-lg mx-auto mt-10 p-8 bg-black/10">
            <div class="mb-2">
                <p>Name: {{ user_profile.first_name }} {{ user_profile.last_name }}</p>
            </div>
            <div class="mb-2">
                <p>Email: {{ user_profile.email }}</p>
            </div>
            <div class="mb-2">
                <p>Profession: {{ user_profile.profession }}</p>
            </div>
            <div class="mb-2">
                <p>Contact: {{ user_profile.phone }}</p>
            </div>
            <div class="mb-2">
                <p>Website: {{ user_profile.website }}</p>
            </div>
            <div class="mb-2">
                <p>Country: {{ user_profile.country }}</p>
            </div>
            <div class="mb-2">
                <p>Summary</p>
                <p>{{ user_profile.summary }}</p>
            </div>



            <div class="flex justify-between items-center">
                <Link class="mt-8 border px-4 py-1 bg-green-600 text-white" :href="'/personal-details/edit/' + user_profile.id" as="button">Edit</Link>
                <Link class="mt-8 border px-4 py-1 bg-black text-white" href="/education/create" as="button">Continue</Link>
            </div>
        </div>
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
    }
}
</script>
