<?php

namespace Database\Seeders;


use App\Models\Ingredients;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
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
        $this->truncate('ingredients');
        $category = Ingredients::factory(10)->create();
        $this->EnableForeignKeys();
    }
}
