<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sponsor::class, 7)->create();
        factory(App\Leadership::class, 6)->create();
        factory(App\Event::class, 6)->create([ 'type' => 'business' ]);
        factory(App\Event::class, 6)->create([ 'type' => 'slo' ]);
        factory(App\Event::class, 6)->create([ 'type' => 'fans' ]);
        factory(App\Post::class, 8)->create();
    }
}
