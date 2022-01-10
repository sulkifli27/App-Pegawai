<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class PegawaiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_success_store_data_pegawai()
    {
        $data = [
            "nama_pegawai" => "Sulkifli",
            "total_gaji" => 4000000
        ];

        $this->json('POST', 'api/pegawai', $data, [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJson([
                "message" => "success create pegawai",
            ]);
    }

    public function test_success_get_data_pegawai()
    {

        $this->json('GET', 'api/pegawai', [], [], [])
            ->assertStatus(200)
            ->assertJson([
                "message" => "success get Pegawai",
            ]);
    }
}
