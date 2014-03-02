<?php

class SeriesTableSeeder extends Seeder {

	public function run()
	{

        DB::table('networks')->insert(array('network'=>'Showtime', 'updated_at'=>time(), 'created_at'=>time()));
        DB::table('networks')->insert(array('network'=>'FOX', 'updated_at'=>time(), 'created_at'=>time()));

		$series[] = array(
            'id'=>'1000',
            'name'=>'Dexter',
            'language'=>'en',
            'overview'=>"Dexter is an American television drama series. The series centers on Dexter Morgan (Michael C. Hall), a blood spatter pattern analyst for Miami Metro Police Department who also leads a secret life as a serial killer, hunting down criminals who have slipped through the cracks of the justice system.",
            'firstaired'=>'1159660800',
            'airday'=>'Sunday',
            'airtime'=>'9:00 PM',
            'contentrating'=>'TV-MA',
            'runtime'=>'60',
            'network_id'=>1, 'updated_at'=>time(), 'created_at'=>time()
		);

        $series[] = array(
            'id'=>'1001',
            'name'=>'House',
            'language'=>'en',
            'overview'=>"Go deeper into the medical mysteries of House, TV's most compelling drama. Hugh Laurie stars as the brilliant but sarcastic Dr. Gregory House, a maverick physician who is devoid of bedside manner. While his behavior can border on antisocial, Dr. House thrives on the challenge of solving the medical puzzles that other doctors give up on. Together with his hand-picked team of young medical experts, he'll do whatever it takes in the race against the clock to solve the case.",
            'firstaired'=>'1159660800',
            'airday'=>'Monday',
            'airtime'=>'9:00 PM',
            'contentrating'=>'TV-14',
            'runtime'=>'60',
            'network_id'=>2, 'updated_at'=>time(), 'created_at'=>time()
        );

        foreach($series as $s)
		  DB::table('series')->insert($s);


        DB::table('aliases')->insert(array('series_id'=>'1000', 'name'=>"Dexter: Early Cuts", 'updated_at'=>time(), 'created_at'=>time()));
        DB::table('aliases')->insert(array('series_id'=>'1001', 'name'=>"House M.D", 'updated_at'=>time(), 'created_at'=>time()));

	}

}
