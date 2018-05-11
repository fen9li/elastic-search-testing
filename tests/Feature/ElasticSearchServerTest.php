<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ElasticSearchServerTest extends TestCase
{

    private function getUrl()
    {
      return 'http://' . gethostname() . ':9200';
    }

    public function testElasticSearchServerUp()
    {
        $this->get($this->getUrl())->assertStatus(200);
    }

    public function testElasticSearchServer()
    {
        $str = file_get_contents($this->getUrl());
        $this->assertTrue(strpos($str, 'homestead') !== false);
    }
}
