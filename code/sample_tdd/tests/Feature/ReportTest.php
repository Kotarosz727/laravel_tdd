<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * @test
     */
    public function get_response_code_200()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function post_response_code_200()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function get_response_code_200_with_customer_id()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function put_response_code_200_with_customer_id()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function delete_response_code_200_with_customer_id()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function get_response_code_200_reports()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function post_response_code_200_reports()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }
}
