<template>

<div>

<h2>
    Family Tree
</h2>


<FamilyTreeComponent

    v-if="root"

    :person="root"

    :children="root.children"

/>


</div>

</template>


<script>

import FamilyTreeComponent
from '../components/FamilyTree.vue';


export default {


name:'FamilyTreeView',


components: {

FamilyTreeComponent

},


data() {

return {

root:null

};

},


mounted() {

this.loadTree();

},


methods: {


async loadTree() {


/*
 Future API:

 GET /api/v1/tree/{personId}

 Returns:

 {
   id:1,
   firstName:"John",
   lastName:"Smith",
   children:[]
 }

*/


const response =
await fetch(

OC.generateUrl(

'/apps/kinship/api/v1/tree/1'

)

);


this.root =
await response.json();


}


}


}

</script>
