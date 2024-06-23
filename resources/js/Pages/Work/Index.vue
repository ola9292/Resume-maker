<template>
    <Nav>

        <div class="max-w-[1000px] border rounded-lg mx-auto mt-10 p-8">
            <div class="flex justify-between mb-4">
                <h3 class="text-2xl">Your Work Summary</h3>
                <Link class="bg-purple-600 px-4 py-1 text-white" href="/work-history/create" as="button">Add More</Link>
            </div>
            <div class="flex flex-col rounded-lg gap-8">
                <div class="bg-black/10 p-4 shadow-lg shadow-gray-500/50 rounded border border-red-300 hover:border-green-800" v-for="work in workHistory" :key="work.id">
                    <div class="mb-2">
                    <p>Company Name: {{ work.company }}</p>
                    </div>
                    <div class="mb-2">
                        <p>Email: {{ work.position }}</p>
                    </div>
                    <div class="mb-2">
                        <p>Profession: {{ work.duties }}</p>
                    </div>
                    <div class="mb-2">
                        <p>Contact: {{ work.start_year }}</p>
                    </div>
                    <div class="mb-2">
                        <p>Website: {{ work.end_year }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                    <Link class="border px-4 py-1 bg-black text-white" :href="'/work-history/edit/' + work.id" as="button">Edit</Link>
                    <Link class="border px-4 py-1 bg-red-700 text-white" :href="'/work-history/delete/' + work.id" method="delete" as="button">Delete</Link>

                </div>
            </div>


        </div>

        <div class="flex justify-between mt-4">
                <Link class="bg-green-600 px-4 py-1 text-white" href="/education">Go back to Education Summary</Link>
            <Link class="bg-blue-600 px-4 py-1 text-white" href="/preview" as="button">Preview Your Resume</Link>
            </div>


        </div>
    </Nav>

</template>
<script>
import { Link } from '@inertiajs/vue3'
import Nav from '../../Shared/Nav.vue'
export default{
    components:{ Nav, Link },
    props:{
        workHistory: Array
    }
}
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  /* border: 1px solid #dddddd; */
  text-align: left;
  padding: 8px;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */
</style>
