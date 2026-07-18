<template>

<div>

<h2>
Create Event
</h2>


<EventForm
    @submit="createEvent"
/>


</div>

</template>


<script>

import EventForm
from '../components/EventForm.vue';


export default {


name:'EventCreate',


components:{

EventForm

},


methods:{


async createEvent(event){


await fetch(

OC.generateUrl(
'/apps/kinship/api/v1/events'
),

{

method:'POST',

headers:{

'Content-Type':
'application/json'

},

body:JSON.stringify(event)

}

);


this.$router.push('/events');


}


}


}

</script>
