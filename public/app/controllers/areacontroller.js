tntApp.controller('AreaController', function($scope,$http,API){
	$http.get(API + '/area/list').then(function(response){
		$scope.results = response.data;		
	});

	$scope.modal = function (state, id) {
		$scope.state = state;		
		switch (state) {
			case "add" :
				$scope.modalTitle = "Thêm";
				break;
			case "edit" :
				$scope.modalTitle = "Sửa";
				$scope.id = id;
				$http.get(API + '/area/edit/' + id).then(function (response) {
					$scope.item = response.data;
				});
				break;

		}		
		$("#myModal").modal("show");
	}

	$scope.save = function (state,id){		
		if (state == "add") {
			var url = API  + '/area/add';
			var data = $.param($scope.item);			
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {				
				location.reload();
			})
			;
		}

		if (state == "edit") {
			var url = API  + '/area/edit/' + id;
			var data = $.param($scope.item);			
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {				
				location.reload();
			})
			;
		}
	}
	$scope.delete = function (id){
		$http.get(API + "/area/delete/" + id).then(function (response){
			location.reload();
		});
	}
});