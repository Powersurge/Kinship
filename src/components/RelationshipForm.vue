<template>
    <form @submit.prevent="submit">

        <label>
            Person A
            <select v-model="form.personA">
                <option
                    v-for="person in people"
                    :key="person.id"
                    :value="person.id"
                >
                    {{ person.firstName }}
                    {{ person.lastName }}
                </option>
            </select>
        </label>


        <label>
            Relationship Type

            <select v-model="form.type">

                <option value="parent">
                    Parent
                </option>

                <option value="child">
                    Child
                </option>

                <option value="spouse">
                    Spouse
                </option>

                <option value="sibling">
                    Sibling
                </option>

            </select>
        </label>


        <label>
            Person B

            <select v-model="form.personB">

                <option
                    v-for="person in people"
                    :key="person.id"
                    :value="person.id"
                >
                    {{ person.firstName }}
                    {{ person.lastName }}
                </option>

            </select>

        </label>


        <button type="submit">
            Save Relationship
        </button>

    </form>
</template>


<script>

export default {

    name: 'RelationshipForm',

    props: {
        people: {
            type: Array,
            required: true
        }
    },


    data() {
        return {

            form: {

                personA: null,

                personB: null,

                type: 'parent'

            }

        };
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
