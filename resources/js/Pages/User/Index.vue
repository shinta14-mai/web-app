<template>
<Layout>
    <Head title="User-List" />
    <div>
    <h1> {{ title }} List</h1>
    <Link href="/users/create">Register</Link>
    <ul>
        <li v-for="user in users">
            <p>{{ user.name }}</p>
            <Link :href="`/users/${user.id}`">Details</Link>
        </li>
    </ul>
</div>
</Layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout.vue';
export default {
    props: {
        title: String,
        users: Array
    },
    components: {
        Link,
        Layout,
    }
}
</script>