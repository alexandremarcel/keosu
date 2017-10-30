var importedPackages = ["keosu-base","angularJs","jQuery","keosu-push","keosu-around-me","keosu-comments","lib-js"];
var app = angular.module('keosuApp', ['angularSpinner','angular-carousel','ngSanitize', 'ngTouch', 'ngRoute','angular-inview','LocalStorageModule','CacheManagerModule','ui.bootstrap']);

app.config(function( $compileProvider ) {
	$compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|file|ghttps?|ms-appx|x-wmapp0):/);

	$compileProvider.imgSrcSanitizationWhitelist(/^\s*(https?|ftp|file|ms-appx|x-wmapp0):|data:image\//);
});



app.controller('main_Controller', function($http, $rootScope, $scope) {

	/**
	 * Init Buttons
	 */
    $rootScope.initButton = function() {
        // $rootScope;previousButton : used to display a return button in the header
        // to show the button you should set the value true to the boolean
        // when you click on the button, the method $rootScope.prev is called
        $rootScope.previousButton = true;
        $rootScope.closeButton = false;
    };

	/**
	 * Manage buttons when calling previous page
	 */
	$rootScope.back = function() {
        $rootScope.previousButton = true;
        if ($rootScope.closeButton) {
            $rootScope.closeButton = false;
        }
        else {
            window.history.back();
        }
        $scope.$broadcast('back',null);
    };

	/**
	 * Manage buttons when opening an list element
	 * @param arg
	 */
	$rootScope.open = function (arg) {
        $rootScope.previousButton = false;
        $rootScope.closeButton = true;

        $scope.$broadcast('open', arg);
    };

    $http.get('data/globalParam.json').success(function(data) {
		$rootScope.appName = data.name;
	});
	$rootScope.initButton();
	$rootScope.offline = false;
	document.addEventListener("offline", function() {
		$rootScope.offline = true;
		alert("Network unreachable. The page will be reload soon as possible.");
		document.addEventListener("online", function() {
			$rootScope.offline = false;
			alert("Reconnection !");
			document.removeEventListener("online", function(){}, false);
			location.reload();
		}, false);
	}, false);

	$scope.alert = function(title, message) {
		if (typeof navigator.notification === 'undefined') {
			alert(message);
		} else {
			navigator.notification.alert(
				message,
				function(){},
				title,
				'OK'
			);
		}
	};
});

/************************************************************************
 Keosu is an open source CMS for mobile app
 Copyright (C) 2013  Vincent Le Borgne

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU Affero General Public License as
 published by the Free Software Foundation, either version 3 of the
 License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU Affero General Public License for more details.

 You should have received a copy of the GNU Affero General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
// Don't forget to take a look at exportListener.php before edit this file

app.directive('keosuPush', function () {
    return {
        restrict: 'E',
        templateUrl: 'plugins/keosu-push/templates/default.html',
        controller: ['$scope', '$http', function ($scope, $http) {

            $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

            console.log('function init');
            $scope.init = function () {
                document.addEventListener('deviceready', function () {
                    console.log('i\'m ready');

                    $http.get('data/globalParam.json').success(function (data) {
                        console.log(data);
                    });

                    if (typeof(device) != 'undefined' && typeof(PushNotification) != 'undefined') {
                        $http.get('data/globalParam.json').success(function (data) {
                            $scope.host = data.host;
                            var push = PushNotification.init({
                                android: {
                                    senderID: pushNotificationData.senderID + "", 'ecb': "appAndroid.onNotification"
                                },
                                ios: {
                                    alert: "true",
                                    badge: "true",
                                    sound: "true"
                                },
                                windows: {}
                            });

                            push.on('registration', function (data) {
                                var deviceId = (device.platform == 'android' || device.platform == 'Android' || device.platform == "amazon-fireos") ? 2 : 1;
                                $http.post($scope.host + 'service/push/plugin/addDevice/' + deviceId, 'token=' + data.registrationId);
                            });

                            push.on('notification', function (data) {
                                function onConfirm(buttonIndex) {
                                }

                                navigator.notification.confirm(
                                    data.message,   // message
                                    onConfirm,      // callback to invoke with index of button pressed
                                    'Notification', // title
                                    ['OK']          // buttonLabels
                                );
                            });

                            push.on('error', function (e) {
                            });
                        });
                    }

                });
            };
        }]
    };
});


app.config(function($routeProvider,$locationProvider){
	$routeProvider.when("/Page/:pageName",{
		templateUrl: function(params) {
			return params.pageName+".html";
		}
	})
	.otherwise({redirectTo:"/Page/1"});
});app.directive('keosuComments', function(){
	return {
		restrict : 'E',
		scope : {
			objectId: '=objectId',
			objectName: '=objectName',
			enableComments: '=enableComments'
		},
		templateUrl : 'plugins/keosu-comments/templates/default.html',
		controller : ['$scope','$http', function ($scope, $http) {
		
			$scope.$watch('objectId', function() {
				$scope.myinit();
        	});
			
			$scope.myinit = function() {
				$http.get('data/globalParam.json').success(function(data){
					$scope.host = data.host;
					$scope.commentListAction();
				});
			}

			$scope.commentListAction = function() {
				if ($scope.objectId) {
					$http.get($scope.host + 'service/gadget/myaccount/info').success(function(data) {
						if(data.connect) {
							$http.get($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId).success(function(data){
								$scope.comments = data.comments;
								$scope.connect = data.connect;
							});
						}

					});

				}
			};

			$scope.commentAddAction = function() {
				var data = "message="+$scope.messageComment;
				$scope.messageComment = "";
				if (data != "message=") {//check if the commentaire is not empty
					$http.post($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId,data).success(function(data){
						$scope.comments = data.comments;
						$scope.connect = data.connect;
					});
				};
			};
		}]
	};
});
/************************************************************************
 Keosu is an open source CMS for mobile app
 Copyright (C) 2013  Vincent Le Borgne

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU Affero General Public License as
 published by the Free Software Foundation, either version 3 of the
 License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU Affero General Public License for more details.

 You should have received a copy of the GNU Affero General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/

//Main controller
app.controller('keosu-around-meController', function ($rootScope, $scope, $http, $sce, usSpinnerService, cacheManagerService) {

    var mapDefault = null;

    var initMap = function () {
        if (document.getElementById("map_default")) {
            mapDefault = new MapElement({
                name: "map_default",
                requiredUserPosition: true,
                requiredDestination: true
            });
            mapDefault.addMarker("user", [$scope.position.latitude, $scope.position.longitude]);
            mapDefault.addMarker("position", [0, 0]);
        }
        // init map all markers
        else {
            var mapAll = new MapElement({
                name: "map_all",
                requiredUserPosition: true,
                requiredDestination: true
            });
            for (var i = 0; i < $scope.pages.length; i++) {
                var positionName = "position" + i.toString();
                mapAll.addMarker(positionName, [$scope.pages[i].lat, $scope.pages[i].lng]);
            }
            updateMap("map_all", mapAll);
        }
    };

    var updateMap = function (name, map) {
        window.setTimeout(function () {
            google.maps.event.trigger(document.getElementById(name), 'resize');
            map.bound();
        }, 100);
    }
    /**
     * specific action when the 'open' button is called
     */
    $scope.$on('open', function (event, page) {

        //Init map
        $scope.curPage = page;
        $scope.curPage.descHtml = $('<div/>').html($scope.curPage.description).text();
        $scope.isList = false;
        mapDefault.editMarker("position", [page.lat, page.lng]);
        updateMap("map_default", mapDefault);


    });
    /**
     * specific action when the 'back' or 'close' button is called
     */
    $scope.$on('back', function () {
        $scope.isList = true;
    });

    $scope.init = function (params) {
        console.log("init around me gadget");
        $scope.isList = true;
        usSpinnerService.spin('spinner'); // While loading, there will be a spinner
        $scope.param = params;

        var onGpsSuccess = function (position) {
            $scope.position = position;
            cacheManagerService.get($scope.param.host + 'service/gadget/aroundme/' + $scope.param.gadgetId + '/'
                + position.latitude + '/'
                + position.longitude + '/0/' + '10' + '/json', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
                $scope.pages = data.data;
                $scope.title = $scope.param.gadgetParam.title;
                // init map
                initMap();
                usSpinnerService.stop('spinner');
            }).error(function (error) {
                $scope.error = (error);
                usSpinnerService.stop('spinner');
            });
        };

        cacheManagerService.getLocation()
            .success(
                function (position) {
                    onGpsSuccess(position);
                }).error(function (error) {
            $scope.error = error;
            usSpinnerService.stop('spinner');
        });
    }
});
