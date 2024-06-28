<template>
    <Nav>
        <div class="home-container">
            <div class="marque mb-6">
                <span>'Resume' </span>
                <span>'Top Jobs' </span>
                <span>'New Jobs' </span>
                <span>'Recent Postings' </span>
            </div>
            <h1 class="text-3xl">Stand Out from the Crowd with Our Professional Resume Builder.</h1>
            <p class="text-2xl">Unlock Your Career Potential and Be Among the Top 2%</p>

            <Link v-if="name" class="btn" href="/personal-details" as="button">My Profile</Link>
            <Link v-else class="btn" href="/personal-details/create" as="button">Create My Resume</Link>
        </div>
    </Nav>

</template>
<script>
import Nav from '../Shared/Nav.vue'
import { Link } from '@inertiajs/vue3'
    export default{
            components:{ Nav, Link },
            props:{
                name : String
            }
    }
</script>
<style scoped>
.home-container{
    max-width: 800px;
    overflow: hidden;
    margin: 200px auto;
    text-align: center;
}
    .marque{
        overflow: hidden;
        color: #dc3545;
        animation: marq 10s linear forwards infinite;
    }
    @keyframes marq {
        from{
            transform: translateX(-1000px);
        }
        to{
            transform: translateX(1200px);
        }
    }
.btn{
    background-color: #dc3545;
        color: white;
        padding: 8px 10px;
        display: inline-block;
        transition: 1s ease;
        margin-top: 20px;
}
.btn:hover{
    transform:scale(1.2);
}
</style>
