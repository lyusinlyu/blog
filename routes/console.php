<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('csv-import', function () {
	$handle = fopen("/home/lusine/Desktop/file.csv", "r");
	$header = fgetcsv($handle);
	$result = [];
    while (($data = fgetcsv($handle)) !== false) {
        $temp = [];
        for($i = 0; $i < count($header); $i++) {
        	$temp[$header[$i]] = $data[$i];
        }
        $result[] = $temp;
    }
    fclose($handle);	
    $total_inserted_chunk = 0;
    $insertable = [];

    for($i = 0; $i < count($result); $i++) {
    	$insertable[] = $result[$i];
    	if(count($insertable) === 1000 || ($i + 1) === count($result)) {
    		DB::table('Products')->insert($insertable);
    		$current_chunk = count($insertable);
    		$total_inserted_chunk += $current_chunk;
    		$this->info('TOTAL => '. $total_inserted_chunk .' INSERTED '.$current_chunk);
    		$insertable = [];
    	}
    }
    $this->info('FINISHHHHH URAAAA');
})->describe('Display an inspiring quote');


