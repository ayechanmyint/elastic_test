<template>
         <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" :id="name" :name="name" :placeholder="placeholder" :value="value" :rows="rows"></textarea>
         </div> 

</template>

<script>
export default{
	props : ['name','placeholder','rows','value']
}

</script>