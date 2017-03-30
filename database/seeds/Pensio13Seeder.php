<?php

use Illuminate\Database\Seeder;
use App\pensio;

class Pensio13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$row = 1;
		if (($handle = fopen("2013_pensio_jubilacio_2013.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
			
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				echo "[REG:$num] ";
				$row++;
				$dte = $data[0];
				$barri = $data[1];
				$quantitat = $data[2];

				$pensio = new pensio();
				$pensio->dte = $dte;
				$pensio->barris = $barri;
				$pensio->quantitat = $quantitat;
				
				$pensio->save();
				
				echo "\n";
		    }
			fclose($handle);
		}
    }
}
