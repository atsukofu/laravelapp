<?php

namespace Tests\Feature;
use Illuminate\Foudation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DataTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\models\User;
use App\model\Person;

class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
       factory(USer::class)->create([
           'name' => 'AAA',
           'email' => 'BBB@CCC.com',
           'password' => 'ABCABC',
       ]);
       factory(User::class, 10)->create();

       $this->assertDatabaseHas('users', [
        'name' => 'AAA',
        'email' => 'BBB@CCC.com',
        'password' => 'ABCABC',
       ]);

       factory(Person::class)->create([
           'name' => 'XXX',
           'mail' => 'yyy@zzz.com',
            'age' => 123,
       ]);

       factory(Person::class, 10)->create();

       $this->assertDatabaseHas('people', [
           'name' => 'XXX',
           'mail' => 'yyy@zzz.com',
           'age' => 123,
       ]);
    }
}
