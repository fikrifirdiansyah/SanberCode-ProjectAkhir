<?php

use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profils')->insert([
        	'nama_lengkap' => 'Rizki Aulia Ramadhan',
        	'email' => 'rwamdhaney2@gmail.com'
        ]);
    }
}
