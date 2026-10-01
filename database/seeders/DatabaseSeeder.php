<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Member;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		Category::insert([
			[
				'id' => 1,
				'nama_kategori' => 'Fiksi',
				'deskripsi' => 'Buku cerita rekaan seperti novel dan kumpulan cerpen.',
			],
			[
				'id' => 2,
				'nama_kategori' => 'Teknologi',
				'deskripsi' => 'Buku seputar teknologi, pemrograman, dan ilmu komputer.',
			],
			[
				'id' => 3,
				'nama_kategori' => 'Sejarah',
				'deskripsi' => 'Buku bertema sejarah dan biografi tokoh.',
			],
		]);

		Member::insert([
			[
				'id' => 1,
				'nama' => 'Alfa',
				'nim' => '324001',
				'email' => 'alfa@dummy.com',
				'nomor_telepon' => '08100',
				'alamat' => 'Jl. Alfabeta',
				'status' => 'aktif',
			],
			[
				'id' => 2,
				'nama' => 'Beta',
				'nim' => '324002',
				'email' => 'beta@dummy.com',
				'nomor_telepon' => '08101',
				'alamat' => 'Jl. Betania',
				'status' => 'aktif',
			],
			[
				'id' => 3,
				'nama' => 'Gamma',
				'nim' => '324003',
				'email' => 'gamma@dummy.com',
				'nomor_telepon' => '08102',
				'alamat' => 'Jl. Gammania',
				'status' => 'nonaktif',
			],
		]);

		Book::insert([
			[
				'id' => 1,
				'judul' => 'Laskar Pelangi',
				'penulis' => 'Andrea Hirata',
				'penerbit' => 'Bentang Pustaka',
				'tahun_terbit' => 2005,
				'isbn' => '9789793062792',
				'stok' => 5,
				'category_id' => 1,
			],
			[
				'id' => 2,
				'judul' => 'Bumi Manusia',
				'penulis' => 'Pramoedya Ananta Toer',
				'penerbit' => 'Hasta Mitra',
				'tahun_terbit' => 1980,
				'isbn' => '9789794330746',
				'stok' => 3,
				'category_id' => 1,
			],
			[
				'id' => 3,
				'judul' => 'Clean Code',
				'penulis' => 'Robert C. Martin',
				'penerbit' => 'Prentice Hall',
				'tahun_terbit' => 2008,
				'isbn' => '9780132350884',
				'stok' => 7,
				'category_id' => 2,
			],
		]);
	}
}