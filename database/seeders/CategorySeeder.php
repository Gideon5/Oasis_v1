<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventCategory;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Sports' , 'Concert', 'Comedy', 'Others'];

        foreach ($categories as $category){
            EventCategory::create(['name' => $category]);
        }
    }
}