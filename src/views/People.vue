<template>
    <div>
        <h2>People</h2>

        <router-link to="/people/create">
            Add Person
        </router-link>

        <ul>
            <li
                v-for="person in people"
                :key="person.id"
            >
                {{ person.firstName }}
                {{ person.lastName }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'People',

    data() {
        return {
            people: []
        };
    },

    mounted() {
        this.loadPeople();
    },

    methods: {
        async loadPeople() {
            const response = await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/people'
                )
            );

            const data = await response.json();

            this.people = data.people;
        }
    }
}
</script>
