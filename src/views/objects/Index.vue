<template>
  <Table></Table>
</template>

<script>
import axios from "axios"
import Table from "../../components/Table.vue"
export default {
    name: 'ObjectIndex',
    components: {
        Table
    },
    data () {
        return {
            objects: null
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/v1/object')
        .then(response => {
            this.objects = response.data
        })
    }
}
</script>
