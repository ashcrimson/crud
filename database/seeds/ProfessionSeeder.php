<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('professions')->insert([
            'title' => 'Saiyajin',
        ]);
*/
        Profession::create([
            'title' => 'Saiyajin',
        ]);

        Profession::create([
            'title' => 'Namekian',
        ]);

        Profession::create([
            'title' => 'Humano',
        ]);

        factory(Profession::class)->times(17)->create();
    }
}
