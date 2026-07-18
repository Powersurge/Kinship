<template>
    <div>

        <h2>
            Add Person
        </h2>

        <PersonForm
            @submit="createPerson"
        />

    </div>
</template>


<script>

import PersonForm from '../components/PersonForm.vue';

export default {

    name: 'PersonCreate',

    components: {
        PersonForm
    },

    methods: {

        async createPerson(person) {

            await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/people'
                ),
                {
                    method: 'POST',

                    headers: {
                        'Content-Type':
                            'application/json'
                    },

                    body: JSON.stringify(person)
                }
            );

            this.$router.push('/people');
        }

    }

}

</script>
