<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use Tests\TestCase;
use Mockery;

class UserTest extends TestCase
{
    /**
     * @dataProvider providerRole
     *
     * @return void
     */
    public function testHasRole($msg, $role)
    {
        $roles = new Collection([
            ['name' => 'Musico', 'description' => 'Desc'],
            ['name' => 'Admin', 'description' => 'Desc2']
        ]);

        $userMock = Mockery::mock('App\User')->makePartial();
        $userMock->shouldReceive('roles')->andReturn($roles);
        var_dump($msg);
        $this->assertEquals(true, $userMock->hasRole($role));
    }

    public function providerRole(): array
    {
        return [
            ['Testing Musico','Musico'],
            ['Testing Admin','Admin']
        ];
    }
}
