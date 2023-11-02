<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [
            [
                'title' => 'laravelを勉強する',
                'description' => 'laravelのドキュメントを読む',
                'completed' => false,
                'label_id' => 1,
            ],
            [
                'title' => '公園で散歩する',
                'description' => '公園で散歩する',
                'completed' => false,
                'label_id' => 2,
            ]
            ];
        DB::table('todos')->insert($todos);
    }
}
