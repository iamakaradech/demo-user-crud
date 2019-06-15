export default {
    getUser(uuid, success) {
        axios.get(`/api/users/${uuid}`).then(success).catch((error) => {
            console.log(error)
        })
    },
    update(uuid, payload, success) {
        console.log(payload)
        axios.put(`/api/users/${uuid}`, payload).then(success).catch((error) => {
            console.log(error)
        })
    }
}
