<template>
<Layout>
    <Head title="Home" />
    <h1>Hello {{ title }}! </h1>
</Layout>
</template>

<style>

</style>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout.vue';
export default {
    props: ['title'],
    components: {
    Link,
    Layout,
    }

}
</script>