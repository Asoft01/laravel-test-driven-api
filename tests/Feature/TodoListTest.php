<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{

    public function test_example()
    {
        $this->withoutExceptionHandling();
        // preparation / prepare  

        // action / perform
        // $response = $this->getJson('api/todo-list');
        // dd(route('todo-list.index')); die;
        $response = $this->getJson(route('todo-list.index'));

        // dd($response); die;
        // dd($response->json()); die;
        // assertion / predict
        $this->assertEquals(1, count($response->json()));
    }
}
