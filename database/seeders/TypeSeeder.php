<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('types')->truncate();

        $categories = ['FrontEnd', 'Backend', 'FullStack'];

        foreach ($categories as $category_name) {
            $new_category = new Type();

            $new_category->name = $category_name;
            $new_category->slug = Str::slug($category_name);

            $new_category->save();
        }
    }
}
