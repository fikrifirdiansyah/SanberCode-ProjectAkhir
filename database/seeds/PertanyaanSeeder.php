<?php

use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pertanyaans')->insert([
        	'judul' => 'html',
            'isi' => 'Bagaimana cara membuat table ?',
            'tag' => 'html',
            'created_at' => '2020-08-12 22:02:10',
            'updated_at' => '2020-09-12 22:02:10',
            'profil_id' => 1
        ]);
    }
}
