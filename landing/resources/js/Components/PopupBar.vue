<template>
    <!-- Popup Bar -->
    <div id="popup-bar" class="popup-bar bg-gradient invert-gradient scheme-3 shadow d-none">
        <p class="description white-85">{{ message }}</p>
        <a href="https://codings.dev/?buy=shock-html" target="_blank" class="button simple">
            <span class="button-text white white-hover"><mark class="animated-underline tertiary active">Save Now</mark></span>
            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
        </a>
        <button id="popup-bar-dismiss" class="button close-button">
            <i class="fa-solid fa-xmark button-icon white primary-hover"></i>
        </button>
    </div>
</template>

<script setup>
defineProps({
    message: {
        type: String,
        default: 'Flash Sale! The best time to buy more licenses.',
    },
});
</script>


<style scoped>

</style>
