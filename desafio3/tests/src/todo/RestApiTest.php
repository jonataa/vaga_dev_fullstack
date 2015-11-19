<?php

namespace Test;

class RestApiTest extends AbstractTestCase
{

  public function testGetTaskList()
  {
    $output = $this->request('GET', '/task/');
    $tasks = json_decode($output, true);
    $this->assertEquals(200, $this->response->getStatusCode());
    $this->assertCount(2, $tasks);
    $this->assertEquals('Tomar um café', end($tasks)['title']);
  }

}
