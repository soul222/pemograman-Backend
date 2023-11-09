<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;
use App\Models\students;

class StudentsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    /** @test */
    public function it_can_get_all_students()
    {
        // Given
        Students::factory()->count(3)->create();

        // When
        $response = $this->getJson('/students');

        // Then
        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'message',
                'data' => [
                    '*' => [
                        'id',
                        'nama',
                        'nim',
                        'email',
                        'jurusan',
                        'created_at',
                        'updated_at',
                        // tambahkan properti lainnya
                    ],
                ],
            ]);
    }

    /** @test */
    public function it_can_create_a_student()
{
    // Given
    $studentData = [
        "nama"=>"Muhammad",
        "nim"=>"0110222",
        "email"=>"muha222ti@student.nurulfikri.ac.id",
        "jurusan"=>"Teknik Informatika",
        // tambahkan properti lainnya jika diperlukan
    ];

    // When
    $response = $this->postJson('/students', $studentData);

    // Then
    $response->assertStatus(Response::HTTP_CREATED)
        ->assertJsonStructure([
            'message',
            'data' => [
                'id',
                'nama',
                'nim',
                'email',
                'jurusan',
                'created_at',
                'updated_at',
                // tambahkan properti lainnya jika diperlukan
            ],
        ]);

    $this->assertDatabaseHas('students', $studentData);
}

}
