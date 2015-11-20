angular.module('myTodoList', [])
  .controller('TodoListCtrl', function ($scope) {    
    $scope.tasks = [
      {'title': 'Fazer desafio da iTFLEX', done: false},
      {'title': 'Tomar um café', done: true}
    ];
  });
