<template>
    <div>
        <button class="btn btn-primary" @click="update">Get Chart Values</button>
        <line-charts :chart-data="data"></line-charts>
    </div>
</template>

<script>
    import LineCharts from "./LineCharts";
    export default {
        components:{
          LineCharts
        },
        data: function() {
          return{
              data: []
          }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function(){

                axios.get('/home/getchartdata').then((response)=>{

                    this.data= response.data;

                })


            }
        }
    }
</script>
