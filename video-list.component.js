angular.
	module('sagetime').
	component('videoList', {
	template:'<div class="list-group">'+
				'<a ng-repeat="video in $ctrl.videos" href="video/{{video.name}}/{{video.filename}}" class="list-group-item list-group-item-action">{{video.name + "/" + video.sauce}}</a>'+
			'</div>',
	controller: function VideoListController($http) {
		var self = this;
		$http.get('data.json').then(function(response){
			self.videos = response.data;
		})
	}
});