angular.
	module('sagetime').
	component('videoList', {
	templateUrl: 'video-list.template.html',
	controller: function VideoListController($http) {
		var self = this;
		$http.get('data.json').then(function(response){
			self.videos = response.data;
		});
		this.play_video = function(video){
			$('#modal-title').text(video.sauce)
			var modal_video = $('#modal_video').get(0)
			modal_video.pause();
			$('#modal_source').attr('src', '/video/'+ video.name + '/' + video.filename)
			modal_video.load();
			modal_video.play();
		};
	}
});