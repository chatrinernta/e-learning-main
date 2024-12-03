<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GrupKelas;

class GrupKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrupKelas::create([
            'judul' => 'XII DKV 1',
            'deskripsi' => 'Deskripsi kelas XII DKV 1',
            'link' => 'https://example.com/xii-dkv-1',
        ]);

        GrupKelas::create([
            'judul' => 'XII DKV 2',
            'deskripsi' => 'Deskripsi kelas XII DKV 2',
            'link' => 'https://example.com/xii-dkv-2',
        ]);
    }
}
