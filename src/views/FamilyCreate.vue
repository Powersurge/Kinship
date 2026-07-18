<template>
    <div>

        <h2>
            Create Family
        </h2>

        <FamilyForm
            @submit="createFamily"
        />

    </div>
</template>


<script>

import FamilyForm from '../components/FamilyForm.vue';

export default {

    name: 'FamilyCreate',

    components: {
        FamilyForm
    },

    methods: {

        async createFamily(family) {

            await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/families'
                ),
                {
                    method: 'POST',

                    headers: {
                        'Content-Type':
                            'application/json'
                    },

                    body: JSON.stringify(family)
                }
            );

            this.$router.push('/families');

        }

    }

}

</script>
