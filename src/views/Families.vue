<template>
    <div>
        <h2>Families</h2>

        <ul>
            <li
                v-for="family in families"
                :key="family.id"
            >
                {{ family.name }}

                <router-link
                    :to="'/families/' + family.id + '/edit'"
                >
                    Edit
                </router-link>
            </li>
        </ul>

        <router-link to="/families/create">
            Add Family
        </router-link>

    </div>
</template>

<script>
export default {
    name: 'Families',

    data() {
        return {
            families: []
        };
    },

    mounted() {
        this.loadFamilies();
    },

    methods: {
        async loadFamilies() {
            const response = await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/families'
                )
            );

            const data = await response.json();

            this.families = data.families;
        }
    }
}
</script>
