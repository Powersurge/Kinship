<template>
    <div class="card">
        <h3>
            {{ family.name }}
        </h3>

        <p v-if="family.description">
            {{ family.description }}
        </p>
    </div>
</template>

<script>
export default {
    name: 'FamilyCard',

    props: {
        family: {
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
