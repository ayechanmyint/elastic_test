
<template>
	<div>
	        <radio-select name="options" label="1" :value="selectedValue" @change="changeValue('1')"/>
           
	</div>

</template>

<script>
	export default{

		data(){

	        return {
	            selectedValue: ""
	        };

		},

	    methods: {
	        changeValue(newValue){
	            return this.selectedValue = newValue;
	        }
	    }

	}
</script>