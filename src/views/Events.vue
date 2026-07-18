<template>
    <div>
        <h2>Events Timeline</h2>

        <ul>
            <li
                v-for="event in events"
                :key="event.id"
            >
                {{ event.title }}
                -
                {{ event.eventDate }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Events',

    data() {
        return {
            events: []
        };
    },

    mounted() {
        this.loadEvents();
    },

    methods: {
        async loadEvents() {
            const response = await fetch(
                OC.generateUrl(
                    '/apps/kinship/api/v1/events'
                )
            );

            const data = await response.json();

            this.events = data.events;
        }
    }
}
</script>
