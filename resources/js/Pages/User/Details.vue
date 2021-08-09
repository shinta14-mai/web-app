<template>
<Layout>
    <Head title="User-Details" />
    <div>
    <h1>{{ title }}</h1>
    <ul>
        <li>
            <h3>{{ user.name }}</h3>
            <p>Email: <strong> {{ user.email }} </strong></p>
            <Link href="/users">Back</Link>
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
        user: Object
    },
    components: {
        Link,
        Layout,
    }
}
</script>