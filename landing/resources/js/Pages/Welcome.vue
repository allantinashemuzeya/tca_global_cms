<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Preloader from "@/Components/Preloader.vue";
import PopupBar from "@/Components/PopupBar.vue";
import Header from "@/Components/Header.vue";
import Slider from "@/Components/Slider.vue";
import ImageSection from "@/Components/ImageSection.vue";
import ActivitiesCarousel from "@/Components/ActivitiesCarousel.vue";
import Contact from "@/Components/Contact.vue";
import Testimonials from "@/Components/Testimonials.vue";
import Footer from "@/Components/Footer.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="TCA Global | Landing" />
    <Preloader/>
    <PopupBar/>
    <Header/>
    <Slider/>
    <ImageSection/>
    <ActivitiesCarousel/>
    <Contact/>
    <Testimonials/>
    <Footer/>

</template>

<style>

</style>
