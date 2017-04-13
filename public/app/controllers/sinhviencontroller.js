tntApp.controller('SinhVienController', function($scope,$http,API){
	$http.get(API + '/sinhvien/list').then(function(response){
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
				$http.get(API + '/sinhvien/edit/' + id).then(function (response) {
					$scope.item = response.data;
				});
				break;

		}		
		$("#myModal").modal("show");
	}

	$scope.save = function (state,id){		
		if (state == "add") {
			var url = API  + '/sinhvien/add';
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
			var url = API  + '/sinhvien/edit/' + id;
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
		$http.get(API + "/sinhvien/delete/" + id).then(function (response){
			location.reload();
		});
	}
});



        tntApp.controller("demoController", function ($scope) {
            // Grid data.
            var data = new Array();

            var firstNames = ["Nancy", "Andrew", "Janet", "Margaret", "Steven", "Michael", "Robert", "Laura", "Anne"];
            var lastNames = ["Davolio", "Fuller", "Leverling", "Peacock", "Buchanan", "Suyama", "King", "Callahan", "Dodsworth"];
            var titles = ["Sales Representative", "Vice President, Sales", "Sales Representative", "Sales Representative", "Sales Manager", "Sales Representative", "Sales Representative", "Inside Sales Coordinator", "Sales Representative"];
            var address = ["507 - 20th Ave. E. Apt. 2A", "908 W. Capital Way", "722 Moss Bay Blvd.", "4110 Old Redmond Rd.", "14 Garrett Hill", "Coventry House", "Miner Rd.", "Edgeham Hollow", "Winchester Way", "4726 - 11th Ave. N.E.", "7 Houndstooth Rd."];
            var city = ["Seattle", "Tacoma", "Kirkland", "Redmond", "London", "London", "London", "Seattle", "London"];
            var country = ["USA", "USA", "USA", "USA", "UK", "UK", "UK", "USA", "UK"];
      
            for (var i = 0; i < firstNames.length; i++) {
                var row = {};
                row["firstname"] = firstNames[i];
                row["lastname"] = lastNames[i];
                row["title"] = titles[i];
                row["address"] = address[i];
                row["city"] = city[i];
                row["country"] = country[i];
                data[i] = row;
            }

            $scope.people = data;
            $scope.columns =
            [
                { text: 'Name', datafield: 'firstname', width: 120 },
                { text: 'Last Name', datafield: 'lastname', width: 120 },
                { text: 'Title', datafield: 'title', width: 180 },
                { text: 'Address', datafield: 'address', width: 180},
                { text: 'City', datafield: 'city', width: 90 },
                { text: 'Country', datafield: 'country' }
            ];
        });

