<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Sepatu Running',
            'code' => 'SR',
            'detail' => 'Sepatu yang dirancang khusus untuk aktivitas lari,
            memberikan kenyamanan dan dukungan yang optimal.']);

        Category::create(['name' => 'Sepatu Casual',
            'code' => 'SC',
            'detail' => 'Sepatu yang nyaman untuk digunakan sehari-hari, 
            cocok untuk berbagai kesempatan.']);

        Category::create(['name' => 'Sepatu basket',
            'code' => 'SB',
            'detail' => 'Sepatu yang dirancang khusus untuk permainan basket, 
            memberikan dukungan dan kestabilan saat bergerak di lapangan.']);

        Category::create(['name' => 'Sepatu futsal',
            'code' => 'SF',
            'detail' => 'Sepatu yang dirancang khusus untuk permainan futsal,
            memberikan grip yang baik di permukaan lantai.']);

        Category::create(['name' => 'Sepatu sneakers',
            'code' => 'SS',
            'detail' => 'Sepatu yang stylish dan nyaman, 
            cocok untuk digunakan sehari-hari atau sebagai fashion statement.']);

        Category::create(['name' => 'Sepatu boots',
            'code' => 'SBO',
            'detail' => 'Sepatu yang dilengkapi dengan bagian atas yang tinggi,
            memberikan perlindungan dan dukungan tambahan untuk kaki.']);
        Category::create(['name' => 'Sepatu formal',
            'code' => 'SF',
            'detail' => 'Sepatu yang dirancang khusus untuk keperluan formal, 
            memberikan kesan profesional dan nyaman saat dipakai.']);
    }
}
