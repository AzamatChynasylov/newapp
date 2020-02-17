<template>
    <div>
        <div class="table table-borderless table-striped">
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
        props:[
          'url'
        ],
        mounted() {

        },
        methods: {

        }
    }
</script>
