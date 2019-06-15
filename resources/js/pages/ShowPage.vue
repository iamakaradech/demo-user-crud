<template>
    <div>
        <br>
        <div class="row" v-if="user">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">UUID : {{ user.uuid }}</h1>
                        <table class="table table-striped table-bordered table-responsive-md">
                            <tbody>
                            <tr>
                                <th>First name</th>
                                <td>{{ user.first_name }}</td>
                                <th>Last name</th>
                                <td>{{ user.last_name }}</td>
                            </tr>
                            <tr>
                                <th>Nickname</th>
                                <td>{{ user.nickname }}</td>
                                <th>Email</th>
                                <td>{{ user.email || '-' }}</td>
                            </tr>
                            <tr>
                                <th>National ID</th>
                                <td>{{ user.national_id || '-' }}</td>
                                <th>Date of birth</th>
                                <td>{{ user.date_of_birth || '-' }}</td>
                            </tr>
                            <tr>
                                <th>Phone number</th>
                                <td>{{ user.phone_number || '-' }}</td>
                                <th>Gender</th>
                                <td>{{ user.gender || '-' }}</td>
                            </tr>
                            <tr>
                                <th>Facebook</th>
                                <td>{{ user.facebook || '-' }}</td>
                                <th>Twitter</th>
                                <td>{{ user.twitter || '-' }}</td>
                            </tr>
                            <tr>
                                <th>Line</th>
                                <td>{{ user.line || '-' }}</td>
                                <th>Youtube</th>
                                <td>{{ user.youtube || '-' }}</td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td>{{ user.website || '-' }}</td>
                                <th>About me</th>
                                <td>{{ user.about_me || '-' }}</td>
                            </tr>
                            <tr>
                                <th>Avatar</th>
                                <td>
                                    <img :src="user.avatar" v-if="user.avatar" class="img-fluid"><span v-else>-</span></td>
                                <th>Cover photo</th>
                                <td>
                                    <img :src="user.cover_photo" v-if="user.cover_photo" class="img-fluid"><span v-else>-</span></td>
                            </tr>
                            <tr>
                                <th>is_publish_email</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_email, 'fa-times': ! user.is_publish_email }"></i></td>
                                <th>is_publish_phone_number</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_phone_number, 'fa-times': ! user.is_publish_phone_number }"></i>    </td>
                            </tr>
                            <tr>
                                <th>is_publish_facebook</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_facebook, 'fa-times': ! user.is_publish_facebook }"></i></td>
                                <th>is_publish_twitter</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_twitter, 'fa-times': ! user.is_publish_twitter }"></i></td>
                            </tr>
                            <tr>
                                <th>is_publish_line</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_line, 'fa-times': ! user.is_publish_line }"></i></td>
                                <th>is_publish_youtube</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_youtube, 'fa-times': ! user.is_publish_youtube }"></i></td>
                            </tr>
                            <tr>
                                <th>is_publish_website</th>
                                <td><i class="fa" :class="{'fa-check': user.is_publish_website, 'fa-times': ! user.is_publish_website }"></i></td>
                                <th></th>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-left">
                                <router-link to="/"><button class="btn btn-secondary">Back</button></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import UserService from '../services/User'

    export default {
        name: 'show-page',
        data: () => {
            return {
                user: null
            }
        },
        mounted() {
            UserService.getUser(this.$route.params.uuid, (response) => {
                this.user = response.data.data
            })
        }
    }
</script>
<style scoped>
    th {
        width: 30%;
    }
</style>
