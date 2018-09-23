<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Orientation', 'start_date'=>'2018-09-24', 'end_date'=>'2018-10-12'],
            ['title'=>'Code Fest', 'start_date'=>'2018-09-11', 'end_date'=>'2018-11-13'],
            ['title'=>'Mid Examination', 'start_date'=>'2018-09-18', 'end_date'=>'2018-09-14'],
            ['title'=>'Annual Staff Trip', 'start_date'=>'2018-09-05', 'end_date'=>'2018-09-07'],
        ];
        foreach ($data as $key => $value) {
            Event::create($value);
        }
    }
}
