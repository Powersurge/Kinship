<template>
    <form @submit.prevent="submit">

        <label>
            Family Name
            <input
                v-model="form.name"
                required
            />
        </label>

        <label>
            Description
            <textarea
                v-model="form.description"
            />
        </label>

        <button type="submit">
            Save Family
        </button>

    </form>
</template>

<script>
export default {

    name: 'FamilyForm',

    props: {
        value: {
            type: Object,
            default: () => ({})
        }
    },

    data() {
        return {
            form: {
                name: '',
                description: ''
            }
        };
    },

    mounted() {
        Object.assign(
            this.form,
            this.value
        );
    },

    methods: {

        submit() {
            this.$emit(
                'submit',
                this.form
            );
        }

    }

}

</script>

<style scoped>

form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-width: 400px;
}

textarea {
    min-height: 100px;
}

</style>
