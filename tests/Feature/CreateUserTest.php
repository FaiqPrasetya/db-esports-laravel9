<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        //acting as superadmin
        $this->actingAs(User::find(1));
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_new_user()
    {
        //tambahkan post ke /create
        $response = $this->post(
            '/user-management/user',
            [
                "name" => "Hora Umum",
                "email" => "supersekali@gmail.com",
                "password" => Hash::make("password"),
            ]
        );
        // pastikan ga ada error
        $response->assertSessionHasNoErrors();
        // pastikan redirect nya bener
        $response->assertRedirect("/user-management/user");
        // pastikan keluar notifikasi
        $response->assertSessionHas("success", "Data Berhasil Ditambahkan");
        // cek di tabel muncul apa gak
        $search = $this->get("/user-management/user", [
            "name" => "Hora Umum",
        ]);
        // pastikan tampil emailnya
        $search->assertSeeText("supersekali@gmail.com");
        // cek di database ada apa gak
        $this->assertDatabaseHas('users', [
            "name" => "Hora Umum",
            "email" => "supersekali@gmail.com",
        ]);
    }

    public function test_name_field_required()
    {
        //tambahkan post ke /create
        $response = $this->post(
            '/user-management/user',
            [
                "name" => "",
                "email" => "supersekali@gmail.com",
                "password" => Hash::make("password"),
            ]
        );

        $response->assertSessionHasErrors(["name"]);
    }

    public function test_email_field_required()
    {
        //tambahkan post ke /create
        $response = $this->post(
            '/user-management/user',
            [
                "name" => "Hora Umum",
                "email" => "",
                "password" => Hash::make("password"),
            ]
        );

        $response->assertSessionHasErrors(["email"]);
    }

    public function test_password_field_required()
    {
        //tambahkan post ke /create
        $response = $this->post(
            '/user-management/user',
            [
                "name" => "Hora Umum",
                "email" => "supersekali@gmail.com",
                "password" => "",
            ]
        );

        $response->assertSessionHasErrors(["password"]);
    }
}
