<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Users</h1>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>UUID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Nickname</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users">
                                <td><router-link :to="`users/${user.uuid}`">{{ user.uuid }}</router-link></td>
                                <td>{{ user.first_name }}</td>
                                <td>{{ user.last_name }}</td>
                                <td>{{ user.nickname }}</td>
                                <td>{{ user.updated_at }}</td>
                                <td class="text-center">
                                    <router-link :to="`users/${user.uuid}`"><button class="btn btn-secondary btn-sm">View</button></router-link>
                                    <router-link :to="`users/${user.uuid}/edit`"><button class="btn btn-primary btn-sm">Edit</button></router-link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: () => {
            return {
                users: []
            }
        },
        mounted() {
            this.fetchUser()
        },
        methods: {
            fetchUser() {
                axios.get('/api/users').then((response) => {
                    this.users = response.data.data
                })
            }
        }
    }
</script>
