<template>
    <div id="kinship">
        <h1>Kinship</h1>

        <nav>
            <router-link to="/">Dashboard</router-link>
            |
            <router-link to="/people">People</router-link>
            |
            <router-link to="/families">Families</router-link>
            |
            <router-link to="/events">Events</router-link>
            |
            <router-link to="/events/create">Add Event</router-link>
            |
            <router-link to="/relationships/create">Relationships</router-link>
            |
            <router-link to="/tree">Family Tree</router-link>
            |
            <router-link to="/import">Import</router-link>
        </nav>

        <router-view />
    </div>
</template>

<script>
export default {
    name: 'App'
}
</script>

<style scoped>
#kinship {
    padding: 20px;
}

nav {
    margin-bottom: 20px;
}
</style>
