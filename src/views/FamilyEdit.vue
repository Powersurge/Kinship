<template>
    <div>

        <h2>
            Edit Family
        </h2>

        <FamilyForm
            v-if="family"
            :value="family"
            @submit="updateFamily"
        />

    </div>
</template>


<script>

import FamilyForm from '../components/FamilyForm.vue';

export default {

    name: 'FamilyEdit',

    components: {
        FamilyForm
    },

    data() {
        return {
            family: null
        };
    },

    mounted() {
        this.loadFamily();
    },

    methods: {

        async loadFamily() {

            const response = await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/families/' +
                    this.$route.params.id
                )
            );

            this.family =
                await response.json();

        },


        async updateFamily(data) {

            await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/families/' +
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

            this.$router.push('/families');

        }

    }

}

</script>
