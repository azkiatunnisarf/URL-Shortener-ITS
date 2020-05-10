<?php

use Illuminate\Database\Seeder;
use App\Models\SampleDatabase;
use Illuminate\Support\Str;

class SampleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a=0;$a<20;$a++)
        {
            $sample = New SampleDatabase;
            $sample->sample = Str::random();
            $sample->save();
        }
    }
}
