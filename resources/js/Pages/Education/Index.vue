<template>
    <Nav>
        <div class="p-24">
            <div class="flex flex-wrap justify-between mb-4">
                <h3 class="text-2xl">Your Education Summary</h3>
                <Link v-if="education != ''" class="border px-4 py-1 bg-purple-700 text-white" href="/education/create" as="button">Add More</Link>
                <Link v-else class="border px-4 py-1 bg-purple-700 text-white" href="/education/create" as="button">Create Education</Link>
            </div>
            <div  v-if="education != ''">
                <div style="overflow: scroll;">
                    <table class="border">
                        <tr class="border">
                            <th>No</th>
                            <th>Degree</th>
                            <th>Institute</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                        <tr class="border" v-for="edu in education" :key="edu.id">
                            <td>{{ edu.id }}</td>
                            <td>{{ edu.degree }}</td>
                            <td>{{ edu.school }}</td>
                            <td>{{ edu.graduation_year }}</td>
                            <td>
                                <Link class="border px-4 py-1 bg-black text-white" :href="'/education/edit/' + edu.id" as="button">Edit</Link>
                                <Link class="border px-4 py-1 bg-red-700 text-white" :href="'/education/delete/' + edu.id" method="delete" as="button">Delete</Link>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="mt-4">
                    <Link class="border px-4 py-1 bg-green-700 text-white" href="work-history/create">Continue to Next</Link>
                </div>
            </div>
            <div v-else>
                <p class="p-10">You have no education record! <Link class="underline text-red-500" href="/education/create">create one</Link> </p>
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
        education: Array
    }
}
</script>
<style>

/* table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
} */

/* tr:nth-child(even) {
  background-color: #dddddd;
} */
</style>
