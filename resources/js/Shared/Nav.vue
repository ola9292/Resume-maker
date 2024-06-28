<template>
    <div class="nav p-8">
        <Link href="/"><h2 class="text-3xl"><i class="fa-solid fa-book-bookmark"></i> CVForge</h2></Link>

        <div class="nav-links">
            <Link class="item" href="/personal-details">Basic Info</Link>
            <Link class="item" href="/education">Education</Link>
            <Link class="item" href="/work-history">Work history</Link>
            <Link class="bg-white text-black border border-black px-4 py-2" as="button" method="POST" href="/logout">Logout</Link>
        </div>
        <i @click="toggleHamburger" class="fa-solid fa-bars hamburger fa-xl"></i>
    </div>
    <Transition name="slide-fade">
        <div v-if="open" class="hamburger-menu">
            <ul>
                <li><Link class="item" href="/personal-details">Basic Info</Link></li>
                <li><Link class="item" href="/education">Education</Link></li>
                <li><Link class="item" href="/work-history">Work history</Link></li>
                <li><Link class="" as="button" method="POST" href="/logout">Logout</Link></li>
            </ul>
        </div>
    </Transition>
    <slot/>
</template>
<script>
import { Link } from '@inertiajs/vue3'
    export default{
        data(){
            return{
                open:false,
            }
        },
        components:{ Link },
        methods:{
            toggleHamburger(){
                this.open = !this.open
            }
        }
    }

</script>
<style>
body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.hamburger{
    display: none;
}
.hamburger-menu{
    background-color: #dc3545;
    position: absolute;
    right: 0;
    height: 100%;
    padding: 60px 70px;
    color: #fff;
    font-size: 20px;
    z-index: 1;
}
.hamburger-menu > ul > li{
    margin-bottom: 20px;
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
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
@media only screen and (max-width: 600px) {
.hamburger{
    display: block;
}
.nav-links{
    display: none;
}
}
@media only screen and (min-width: 601px) {
.hamburger-menu{
    display: none;
}
}
</style>
