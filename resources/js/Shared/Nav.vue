<template>
    <div class="nav p-8">
        <Link href="/"><h2 class="text-3xl"><i class="fa-solid fa-book-bookmark"></i> Resumy</h2></Link>

        <div class="nav-links">
            <Link class="item" href="/personal-details">Basic Info</Link>
            <Link class="item" href="/education">Education</Link>
            <Link class="item" href="/work-history">Work history</Link>
            <Link class="bg-white text-black border border-black px-4 py-2" as="button" method="POST" href="/logout">Logout</Link>
        </div>

    </div>
    <slot/>
</template>
<script>
import { Link } from '@inertiajs/vue3'
    export default{
        components:{ Link }
    }
</script>
<style>
body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background-color:  #dc3545;
    color: #fff;
}
.nav-links > .item{
    margin-right: 10px;
    text-decoration: none;
    color: #fff;
}
</style>
