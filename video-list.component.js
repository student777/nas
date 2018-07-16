angular.
	module('sagetime').
	component('videoList', {
	template:'<div class="list-group">'+
				'<a ng-repeat="video in $ctrl.videos" href="{{video.src}}" class="list-group-item list-group-item-action">{{video.name}}</a>'+
			'</div>',
	controller: function VideoListController($http) {
		var self = this;
		$http.get('data.json').then(function(response){
			self.videos = response.data;
		})
	}
});