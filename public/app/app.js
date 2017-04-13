var tntApp = angular.module('agentApp', ['jqwidgets'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
tntApp.constant('API', APP_URL);


