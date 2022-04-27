<template>
  <Table></Table>
</template>

<script>
import axios from "axios"
import Table from "../../components/Table.vue"
export default {
    name: 'UserIndex',
    components: {
        Table
    },
    data () {
        return {
            users : null
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/v1/admin')
        .then(response => {
            this.users = response.data
        })
    }
}
</script>
