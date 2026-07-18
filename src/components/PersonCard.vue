<template>
    <div class="card">
        <h3>
            {{ person.firstName }}
            {{ person.lastName }}
        </h3>

        <p v-if="person.birthDate">
            Born: {{ person.birthDate }}
        </p>

        <p v-if="person.alive">
            Living
        </p>

        <p v-else>
            Deceased
        </p>
    </div>
</template>

<script>
export default {
    name: 'PersonCard',

    props: {
        person: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>
.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 12px;
    margin: 8px;
}
</style>
