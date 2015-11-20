angular.module('myTodoList', [])
  .controller('TodoListCtrl', function ($scope) {
    $scope.tasks = [
      {title: 'Fazer desafio da iTFLEX', done: false},
      {title: 'Tomar um café', done: true}
    ];

    $scope.submit = function () {
      $scope.tasks.push({'title': $scope.newTitle, 'done': false});
      $scope.newTitle = '';
    };

    $scope.delete = function (key) {
      $scope.tasks.splice(key, 1);
    };
  });
