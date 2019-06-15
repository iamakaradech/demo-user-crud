<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Edit User</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control" id="first_name" v-model="user.first_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">First name</label>
                                    <input type="text" class="form-control" id="last_name" v-model="user.last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nickname">Nickname</label>
                                    <input type="text" class="form-control" id="nickname" v-model="user.nickname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" v-model="user.email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="national_id">National ID</label>
                                    <input type="text" class="form-control" id="national_id" v-model="user.national_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_of_birth">Date of birth</label>
                                    <DatePicker v-model="user.date_of_birth" :format="customFormatter" input-class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input type="text" class="form-control" id="phone_number" v-model="user.phone_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" v-model="user.gender">
                                        <option value="m">ชาย</option>
                                        <option value="f">หญิง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" v-model="user.facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" v-model="user.twitter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="line">Line</label>
                                    <input type="text" class="form-control" id="line" v-model="user.line">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" id="youtube" v-model="user.youtube">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" v-model="user.website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="about_me">About me</label>
                                    <input type="text" class="form-control" id="about_me" v-model="user.about_me">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Published</label>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_email"
                                                       v-model="user.is_publish_email">
                                                <label class="form-check-label" for="is_publish_email">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_phone_number"
                                                       v-model="user.is_publish_phone_number">
                                                <label class="form-check-label" for="is_publish_phone_number">
                                                    Phone number
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_facebook"
                                                       v-model="user.is_publish_facebook">
                                                <label class="form-check-label" for="is_publish_facebook">
                                                    Facebook
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_twitter"
                                                       v-model="user.is_publish_twitter">
                                                <label class="form-check-label" for="is_publish_twitter">
                                                    Twitter
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_line"
                                                       v-model="user.is_publish_line">
                                                <label class="form-check-label" for="is_publish_line">
                                                    Line
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_youtube"
                                                       v-model="user.is_publish_youtube">
                                                <label class="form-check-label" for="is_publish_youtube">
                                                    Youtube
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_publish_website"
                                                       v-model="user.is_publish_website">
                                                <label class="form-check-label" for="is_publish_website">
                                                    Website
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" class="form-control-file" id="avatar"  accept="image/x-png,image/gif,image/jpeg" @change="uploadImage($event, 'avatar')">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img :src="user.avatar" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cover_photo">Cover photo</label>
                                    <input type="file" class="form-control-file" id="cover_photo"  accept="image/x-png,image/gif,image/jpeg" @change="uploadImage($event, 'cover_photo')">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img :src="user.cover_photo" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6 text-left">
                                <router-link to="/"><button class="btn btn-secondary">Cancel</button></router-link>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-primary" @click="saveData">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import moment from 'moment'
    import DatePicker from 'vuejs-datepicker'
    import UserService from '../services/User'

    export default {
        components: {
            DatePicker
        },
        data: () => {
            return {
                user: {
                    uuid: null,
                    first_name: null,
                    last_name: null,
                    nickname: null,
                    email: null,
                    national_id: null,
                    date_of_birth: null,
                    phone_number: null,
                    gender: null,
                    facebook: null,
                    twitter: null,
                    line: null,
                    youtube: null,
                    website: null,
                    about_me: null,
                    avatar: null,
                    cover_photo: null,
                    is_publish_email: 0,
                    is_publish_phone_number: 0,
                    is_publish_facebook: 0,
                    is_publish_twitter: 0,
                    is_publish_line: 0,
                    is_publish_youtube: 0,
                    is_publish_website: 0
                }
            }
        },
        mounted() {
            UserService.getUser(this.$route.params.uuid, (response) => [
                this.user = response.data.data
            ])
        },
        methods: {
            customFormatter(date) {
                return moment(date).format('DD/MM/YYYY');
            },
            saveData() {
                UserService.update(this.user.uuid, this.user, (response) => {
                    this.$router.push('/')
                })
            },
            uploadImage(e, fieldName) {
                const file = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    this.user[fieldName] =reader.result
                };
                reader.onerror = function (error) {
                    console.log('Error: ', error);
                };
            }
        }
    }
</script>
