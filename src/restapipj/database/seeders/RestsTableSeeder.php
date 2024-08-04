<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rest;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'test1',
            'url' => 'test1@example.com'
        ];
        $rest = new Rest;
        $rest->fill($param)->save();
        $param = [
            'message' => 'test2',
            'url' => 'test2@example.com'
        ];
        $rest = new Rest;
        $rest->fill($param)->save();
        $param = [
            'message' => 'test3',
            'url' => 'test3@example.com'
        ];
        $rest = new Rest;
        $rest->fill($param)->save();
    }
}
