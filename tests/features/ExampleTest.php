<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name'  =>  'Carlos Abrisqueta',
            'email' =>  'cmabris@gmail.com',
        ]);

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Carlos Abrisqueta')
             ->see('cmabris@gmail.com');
    }
}
