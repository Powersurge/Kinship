<template>
    <div>

        <h2>
            Edit Person
        </h2>

        <PersonForm
            v-if="person"
            :value="person"
            @submit="updatePerson"
        />

    </div>
</template>


<script>

import PersonForm from '../components/PersonForm.vue';

export default {

    name: 'PersonEdit',

    components: {
        PersonForm
    },

    data() {
        return {
            person: null
        };
    },

    mounted() {
        this.loadPerson();
    },

    methods: {

        async loadPerson() {

            const response = await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/people/' +
                    this.$route.params.id
                )
            );

            this.person =
                await response.json();

        },


        async updatePerson(data) {

            await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/people/' +
                    this.$route.params.id
                ),
                {
                    method: 'PUT',

                    headers: {
                        'Content-Type':
                            'application/json'
                    },

                    body: JSON.stringify(data)
                }
            );

            this.$router.push('/people');

        }

    }

}

</script>
