<template>
    <div class="container">
        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, culpa!</h1>
        <button class="btn btn-primary" @click="Emit()">Click Me</button>
        <ul>
            <li v-for="item in items" :key="item.uid">{{ item.name }} <a href="#" @click="remove(item)">Remove</a></li>
        </ul>
    </div>
</template>
<script>
 export default {
        data(){ 
            return{
            
            }
        },
        mounted() {
          
        },
        methods:{
            
        }
    }
</script>