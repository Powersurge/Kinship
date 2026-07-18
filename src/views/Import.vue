<template>

<div>

<h2>
    Import GEDCOM
</h2>


<input
    type="file"
    @change="upload"
/>


<p v-if="message">
    {{ message }}
</p>


</div>

</template>


<script>

export default {


name:'Import',


data() {

return {

message:''

};

},


methods:{


async upload(event) {


const file =
event.target.files[0];


const content =
await file.text();


const response =
await fetch(

OC.generateUrl(
'/apps/kinship/api/v1/import/gedcom'
),

{

method:'POST',

headers:{

'Content-Type':
'application/json'

},

body:
JSON.stringify({
content
})

}

);


const result =
await response.json();


this.message =
'Imported ' +
result.imported +
' people';

}


}


}

</script>
