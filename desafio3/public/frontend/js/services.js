angular.module('TodoService', ['ngResource'])
  .factory('Task', ['$resource', function ($resource) {
    return $resource('/task/:taskId', {taskId: '@taskId'});
  }]);
