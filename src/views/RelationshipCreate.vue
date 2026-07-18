<template>

<div>

<h2>
    Add Relationship
</h2>


<RelationshipForm

    :people="people"

    @submit="createRelationship"

/>


</div>

</template>


<script>

import RelationshipForm
from '../components/RelationshipForm.vue';


export default {


name: 'RelationshipCreate',


components: {

    RelationshipForm

},


data() {

return {

    people: []

};

},


mounted() {

this.loadPeople();

},


methods: {


async loadPeople() {

const response = await fetch(

OC.generateUrl(
'/apps/kinship/api/v1/people'
)

);


const data =
await response.json();


this.people =
data.people;

},


async createRelationship(data) {


await fetch(

OC.generateUrl(
'/apps/kinship/api/v1/relationships'
),

{

method:'POST',

headers: {

'Content-Type':
'application/json'

},

body:
JSON.stringify(data)

}

);


this.$router.push('/people');


}


}


}

</script>
