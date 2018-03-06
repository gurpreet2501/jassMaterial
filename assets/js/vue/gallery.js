new Vue({
	el: '#gallery',
	data: {
		slides:3
	},
	computed: {},
	methods: {
		addImage: function(){
			return this.slide+1
		},

		removeImage: function(){
			return this.slide-1;
		},

	}
});