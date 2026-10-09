<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::updateOrCreate(
            ['nama_kategori' => 'Fiksi'],
            [
                'deskripsi' => 'Buku cerita rekaan seperti novel dan kumpulan cerpen.',
            ]
        );

        Category::updateOrCreate(
            ['nama_kategori' => 'Teknologi'],
            [
                'deskripsi' => 'Buku seputar teknologi, pemrograman, dan ilmu komputer.',
            ]
        );

        Category::updateOrCreate(
            ['nama_kategori' => 'Sejarah'],
            [
                'deskripsi' => 'Buku bertema sejarah dan biografi tokoh.',
            ]
        );
    }
}