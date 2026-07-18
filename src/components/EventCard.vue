<template>
    <div class="card">
        <h3>
            {{ event.title }}
        </h3>

        <p>
            Type: {{ event.type }}
        </p>

        <p v-if="event.eventDate">
            Date: {{ event.eventDate }}
        </p>

        <p v-if="event.location">
            Location: {{ event.location }}
        </p>
    </div>
</template>

<script>
export default {
    name: 'EventCard',

    props: {
        event: {
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
