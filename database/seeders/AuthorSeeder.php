<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors=[
        [
            'name'=>'Mario',
            'surname'=>'Rossi'
        ],
        [
            'name'=>'Luigi',
            'surname'=>'Verdi'
        ],
        [
            'name'=>'Luca',
            'surname'=>'Bianchi'
        ],
        ];
        foreach($authors as $author){
            Author::create([
                'name'=>$author['name'],
                'surname'=>$author['surname']
            ]);
        }
    }
}
