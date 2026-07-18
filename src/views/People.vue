<template>
    <div>
        <h2>People</h2>

        <ul>
            <li
                v-for="person in people"
                :key="person.id"
            >
                {{ person.firstName }}
                {{ person.lastName }}

                <router-link
                    :to="'/people/' + person.id + '/edit'"
                >
                    Edit
                </router-link>
            </li>
        </ul>

        <router-link to="/people/create">
            Add Person
        </router-link>

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
