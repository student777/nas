angular.
	module('sagetime').
	component('videoList', {
	templateUrl: 'video-list.template.html',
	controller: function VideoListController($http) {
		var self = this;
		$http.get('data.json').then(function(response){
			self.videos = response.data;
		})
	}
});