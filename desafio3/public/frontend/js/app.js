angular.module('myTodoList', ['TodoService'])
  .controller('TodoListCtrl', function ($scope, Task) {
    var tasks = Task.query(function () {
        $scope.tasks = tasks;
    });

    $scope.submit = function () {
      $scope.tasks.push({'title': $scope.newTitle, 'done': false});
      $scope.newTitle = '';
    };

    $scope.delete = function (key) {
      $scope.tasks.splice(key, 1);
    };
  });
