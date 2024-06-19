<script setup>
import Layout from '../Layouts/Layout.vue'

    defineProps({user: String})
    defineOptions({layout: Layout})
</script>

<template>

            <div>
                <h1>Hello Vue</h1>
            <h1> {{ user.name }}</h1>
            </div>
</template>
