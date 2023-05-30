<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use TruncateTable , DisableForeignKeys;
    public function run()
    {
        $this->DisableForeignKeys();
        $posts = User::factory(5)->create();
        $this->truncate('posts');
        $this->EnableForeignKeys();

    }
}
