<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::updateOrCreate(
            ['nim' => '324001'],
            [
                'nama' => 'Alfa',
                'email' => 'alfa@dummy.com',
                'nomor_telepon' => '08100',
                'alamat' => 'Jl. Alfabeta',
                'status' => 'aktif',
            ]
        );

        Member::updateOrCreate(
            ['nim' => '324002'],
            [
                'nama' => 'Beta',
                'email' => 'beta@dummy.com',
                'nomor_telepon' => '08101',
                'alamat' => 'Jl. Betania',
                'status' => 'aktif',
            ]
        );

        Member::updateOrCreate(
            ['nim' => '324003'],
            [
                'nama' => 'Gamma',
                'email' => 'gamma@dummy.com',
                'nomor_telepon' => '08102',
                'alamat' => 'Jl. Gammania',
                'status' => 'nonaktif',
            ]
        );
    }
}