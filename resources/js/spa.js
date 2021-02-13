window.app = () => {
	return {
		'is_logged':false,
		'token': '',
		'user': {},
		'feiras': [],
		login(event){
			if(event && event.detail && event.detail.token){
				this.token = event.detail.token
				axios.post(`/api/auth/me?token=${this.token}`, {})
				.then(response =>{
					this.user = response.data
					this.is_logged = true
					this.loadFeiras()
				})
			}
		},

		loadFeiras() {
			axios.get(`/api/feiras?token=${this.token}`)
			.then(response => {
				this.feiras = response.data
			})
		}
	}
}

window.loginForm = (loginUrl) => {
	return {
		'email': '',
		'pw': '',
		login() {
			axios.post(loginUrl, {
				'email': this.email,
				'password': this.pw
			}).then(response =>{
				console.log(response.data)
				dispatchEvent(
					new CustomEvent('set-token', {detail: { token: response.data.access_token} })
				)
			}).catch(err_res =>{
				console.error(err_res)
			})
		}
	}
}