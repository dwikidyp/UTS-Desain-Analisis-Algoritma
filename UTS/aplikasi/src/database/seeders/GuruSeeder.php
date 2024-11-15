<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name'=> 'Dwiki Dzaki', 'pelajaran'=>'Olahraga'],
            ['name'=> 'Asep Fiki', 'pelajaran'=>'Agama Islam'],
            ['name'=> 'Arif Prasetyo', 'pelajaran'=>'Fisika'],
            ['name'=> 'Aditya Firmansyah', 'pelajaran'=>'Kimia'],
            ['name'=> 'Abdul Aziz', 'pelajaran'=>'Matematika'],
            ['name'=> 'Putra Ardiansyah', 'pelajaran'=>'Bahasa Inggris'],
            ['name'=> 'Aulia Bahrul', 'pelajaran'=>'Bahasa Indonesia'],
            ['name'=> 'Hari Saputra', 'pelajaran'=>'Pendidikan Kewarganegaraan'],
            ['name'=> 'Agung Wibisono', 'pelajaran'=>'Seni']
        ];

        foreach ($data as $dataguru) {
            Guru::firstOrCreate($dataguru);
        }
    }
}
