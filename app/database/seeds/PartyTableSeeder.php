<?php

class PartyTableSeeder extends DatabaseSeeder {
	public function run()
	{

       DB::table('parties')->delete();

       $party = new Party();
       $party->party_name = 'test';
       $party->event_date = '2014-12-25';
       $party->start_time = '12:00pm';
       $party->end_time = '1:00am';
       $party->location = 'san antonio';
       $party->user_id = 1;
       $party->budget='1000.00';
       $party->save();
       

       $party1 = new Party();
       $party1->party_name = 'test';
       $party1->event_date = '2015-01-01';
       $party1->start_time = '1:00am';
       $party1->end_time = '3:00am';
       $party1->location = 'austin';
       $party1->user_id = 2;
       $party1->budget = '5.00';
       $party1->save();

       
	}
}