<template>
    <div>
        <div class="table table-borderless table-striped">
            <button class="btn btn-primary" @click="update">Push ---- {{id}}</button>
            <div class="progress mt-4">
                <div class="progress-bar progress-bar-striped" role="progressbar" :style="{width: pr + '%'}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <thead>
                <th>Name</th>
                <th>url</th>
            </thead>
            <tbody>
                <tr v-for="urldata in url">
                    <td>{{urldata.name}}</td>
                    <td>{{urldata.url}}</td>
                </tr>
            </tbody>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
          return{
              url: [],
              is_refresh: false,
              id: 0,
              pr: 0
          }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function(){
                this.is_refresh = true;
               this.pr=100;

                axios.get('/home/ajax').then((response)=>{
                    this.is_refresh = false;
                    this.url = response.data;
                    this.id++;

                    this.pr=0;
                })
                // this.pr=0;

            }
        }
    }
</script>
