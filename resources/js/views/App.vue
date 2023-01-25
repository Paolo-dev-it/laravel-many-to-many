<template>
    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <router-link :to="{ name: 'admin.posts.index' }"
                    >Lista Post</router-link
                >
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "App",
    components: {
        //qui inseriremo i componenti
    },
};
</script>
