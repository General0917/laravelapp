<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use App\Models\Person;
use Illuminate\Support\Facades\Hash;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    // public function testHello() {
    //     $this->assertTrue(true);

    //     $arr = [];
    //     $this->assertEmpty($arr);

    //     $msg = "Hello";
    //     $this->assertEquals('Hello', $msg);

    //     $n = random_int(0, 100);
    //     $this->assertLessThan(100, $n);
    // }

    /*
    use DatabaseMigrations;

    public function testHello() {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        // Laravel8以降のモデル作成は、以下の記載（Modelsクラスを指定して、factory()メソッドを呼び出し、アロー演算子でcreate()メソッドを呼び出し）で行う。
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('no_route');
        $response->assertStatus(404);
    }
    */

    use DatabaseMigrations;

    public function testHello() {
        $password = Hash::make('ABCDEF');
        // ダミーで利用するデータ（Userモデル）
        // Laravel8以降は以下の記載でテストデータを用意する。
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => $password,
        ]);
        User::factory(10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => $password,
        ]);

        // ダミーで利用するデータ(Personモデル)
        // Laravel8以降は以下の記載でテストデータを用意する。
        Person::factory()->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 123,
        ]);
        Person::factory(10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 123,
        ]);
    }
}
