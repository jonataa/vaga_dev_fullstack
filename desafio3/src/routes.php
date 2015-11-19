<?php

$app->post('/task/', App\Todo\Rest\TaskCreate::class);
$app->get('/task/', App\Todo\Rest\TaskList::class);
$app->delete('/task/{id}/', App\Todo\Rest\TaskDelete::class);

return $app;
