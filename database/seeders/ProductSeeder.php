<?php

namespace Database\Seeders;


use App\Models\Product;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
        $this->truncate('products');
        $category = Product::factory(10)->create();
        $this->EnableForeignKeys();
    }
}
