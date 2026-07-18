<template>

<form @submit.prevent="submit">

    <label>
        Title

        <input
            v-model="form.title"
            required
        />

    </label>


    <label>
        Type

        <select v-model="form.type">

            <option value="birth">
                Birth
            </option>

            <option value="death">
                Death
            </option>

            <option value="marriage">
                Marriage
            </option>

            <option value="education">
                Education
            </option>

            <option value="military">
                Military
            </option>

            <option value="custom">
                Custom
            </option>

        </select>

    </label>


    <label>
        Date

        <input
            type="date"
            v-model="form.eventDate"
        />

    </label>


    <label>
        Location

        <input
            v-model="form.location"
        />

    </label>


    <button>
        Save Event
    </button>

</form>

</template>


<script>

export default {

name:'EventForm',


data(){

return {

form:{

title:'',

type:'birth',

eventDate:'',

location:''

}

};

},


methods:{


submit(){

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

display:flex;

flex-direction:column;

gap:12px;

max-width:400px;

}

</style>
