<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class aturseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aturs')->insert([
            'nama' => 'kucing',
            'alamat' => 'pamekasan',
            'jeniskelaim' => 'pria',
        ]);
    }
}
