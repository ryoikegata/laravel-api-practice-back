<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todo_labels = [
            [
                'label' => '仕事'
            ],
            [
                'label' => 'プライベート'
            ],
            [
                'label' => 'その他'
            ]
        ];
        DB::table('todo_labels')->insert($todo_labels);
    }
}
