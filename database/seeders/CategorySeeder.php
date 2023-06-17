<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use TruncateTable, DisableForeignKeys;
    public function run()
    {
        $this->DisableForeignKeys();
        $this->truncate('categories');
        $category = Category::factory(10)->create();
        $this->EnableForeignKeys();
    }
}
