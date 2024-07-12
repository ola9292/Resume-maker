<template>
    <div class="max-w-[900px] mx-auto my-12">
        <div class="text-center flex justify-between px-2">
            <h3 class="text-2xl">Preview Resume</h3>
            <Link class="underline" href="/">Back Home</Link>
        </div>
        <table v-if="userDetail != null">
            <tr>
                <th class="text-3xl">{{ userDetail.first_name.toUpperCase() }} {{ userDetail.last_name.toUpperCase() }}</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>{{ userDetail.phone }} | {{ userDetail.email }} | {{ userDetail.country }} | {{ userDetail.website }}</td>
            </tr>
        </table>
        <table v-if="userDetail != null">
            <tr class="border-b">
                <th>SUMMARY</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>{{ userDetail.summary }}</td>
            </tr>
        </table>
        <table v-if="userDetail != null">
            <tr class="border-b">
                <th>SKILLS</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>{{ userDetail.skills }}</td>
            </tr>
        </table>
        <table v-if="workHistory.length != 0">
            <tr class="border-b">
                <th>PROFFESSIONAL EXPERIENCE</th>
            </tr>
            <tr v-for="work in workHistory">
                <td>
                    <p class="text-xl">{{ work.company }}</p>
                    <p class="text-sm">{{ work.position }}</p>
                    <p class="text-sm">{{ work.start_year }} - {{ work.end_year }}</p>
                    <ul v-if="work.duties" v-for="duty in splitDuties(work.duties)">
                        <li class="list-disc ml-4">{{ duty }}</li>
                    </ul>
                </td>
            </tr>
        </table>
        <table v-if="education.length != 0">
            <tr class="border-b">
                <th>EDUCATION</th>
            </tr>
            <tr v-for="edu in education">
                <td>
                    <p class="text-xl">{{ edu.degree }}</p>
                    <p class="text-sm">{{ edu.school }}</p>
                    <p class="text-sm">{{ edu.graduation_year }}</p>
                </td>
            </tr>
        </table>
        <div class="mt-8 pl-2">
            <a class="btn" href="/download">Download</a>
        </div>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3'
import Nav from '../Shared/Nav.vue'
export default{
    components:{ Nav, Link },
    props:{
        workHistory: Array,
        education: Array,
        userDetail :Object
    },
    methods:{
        splitDuties(sentence){
            return sentence.split('\n');
        }
    },
    created(){
        console.log(this.workHistory)
        console.log(this.education)
        console.log(this.userDetail)
    }
}
</script>
<style scoped>
    .btn{
        background-color: black;
        color: white;
        padding: 5px 10px;
        display: inline-block;
        transition: 1s ease;

    }
    .btn:hover{
        background-color: red;
        transform: scale(1.1);
    }
</style>
