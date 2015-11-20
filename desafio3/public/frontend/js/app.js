angular.module('myTodoList', ['TodoService'])
  .controller('TodoListCtrl', function ($scope, Task) {
    var tasks = Task.query(function () {
        $scope.tasks = tasks;
    });

    $scope.submit = function () {
      new Task({task: $scope.newTitle, done: false})
        .$save(function (newTask) {
          $scope.tasks.push(newTask);
          $scope.newTitle = '';
        });
    };

    $scope.changeStatus = function (task) {
      Task.update({taskId: task.id, done: task.done});
    };

    $scope.delete = function (key, taskId) {
      Task.delete({taskId: taskId}, function () {
        $scope.tasks.splice(key, 1);
      });
    };
  });
