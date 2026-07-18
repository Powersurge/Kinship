<template>
    <form @submit.prevent="submit">

        <label>
            First Name
            <input
                v-model="form.firstName"
                required
            />
        </label>

        <label>
            Middle Name
            <input
                v-model="form.middleName"
            />
        </label>

        <label>
            Last Name
            <input
                v-model="form.lastName"
                required
            />
        </label>

        <label>
            Preferred Name
            <input
                v-model="form.preferredName"
            />
        </label>

        <label>
            Birth Date
            <input
                type="date"
                v-model="form.birthDate"
            />
        </label>

        <button type="submit">
            Save
        </button>

    </form>
</template>

<script>
export default {

    name: 'PersonForm',

    props: {
        value: {
            type: Object,
            default: () => ({})
        }
    },

    data() {
        return {
            form: {
                firstName: '',
                middleName: '',
                lastName: '',
                preferredName: '',
                birthDate: ''
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

input {
    display: block;
    width: 100%;
}

</style>
