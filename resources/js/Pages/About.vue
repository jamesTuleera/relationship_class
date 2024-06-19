<script setup>
import Layout from '../Layouts/Layout.vue'

    // defineProps({user: String})
    defineOptions({layout: Layout})

</script>



<template>

        <h1> {{ $page.props.user }}</h1>

</template>


