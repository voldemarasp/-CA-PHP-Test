<?php
class Test {

	public $name = "Voldemaras";

	public $language = "LT";

	public function __construct(){
		echo "Mano vardas: " . $this->name . "<br><br>";
	}


	public function dayToday() {
		return date("Y-m-d");
	}


	public function storeToCookie(string $date) {
		$cookie_name = "datoscookie";
		$cookie_value = $date;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 7), "/");
	}

	public function isEven(int $number) {

		if ($number % 2 == 0) {
			return "TRUE";
		} else { return "FALSE"; }
	}


	public function setLanguage(string $lang) {
		if ($lang == "Lithuania") {
			return $language = "LT";
		} elseif ($lang == "Russia") {
			return $language = "RU";
		} elseif ($lang == "Poland") {
			return $language = "PL";
		} else {
			return $language;
		}
	}

	public function discount($disc_values) {

			$rezas = $disc_values;
			$a = 0;
			foreach ($rezas as $key=>$val) {
				if ($val > $a) {
					$a = $val;
				}
			}


			$b = 0;
			$rezas = array_diff( $disc_values, [$a] );
			foreach ($rezas as $key=>$val) {
				if ($val > $b) {
					$b = $val;
				}
			}

			// $c = $b - $b / 100 * 10;
			// array_push($rezas, $c);

			$c = 0;
			$rezas = array_diff( $rezas, [$b] );
			foreach ($rezas as $key=>$val) {
				if ($val > $c) {
					$c = $val;
				}
			}

			$rezas = array_diff( $rezas, [$c] );

			$a_rezultatas = $a - $a / 100 * 10;
			$b_rezultatas = $b - $b / 100 * 10;
			$c_rezultatas = $c - $c / 100 * 10;

			array_push($rezas, $a_rezultatas);
			array_push($rezas, $b_rezultatas);
			array_push($rezas, $c_rezultatas);
			return $rezas;
	}

	public function storeRandom() {
		$myfile = fopen("random.txt", "a+") or die("Unable to open file!");
		$txt = rand(1990,2017).PHP_EOL;
		fwrite($myfile, $txt);
		fclose($myfile);
		return $myfile;
	}

	public function glueText(string $text) {
		$uppertext = ucwords($text);
		return $string = str_replace(' ', '', $uppertext);
	}

	public function textGen() {
		for ($i=0; $i < 100; $i++) { 
		$a=array("red","green","blue","yellow","brown");
		$random_keys=array_rand($a,1);

		echo $a[$random_keys] . " ";
		}
	}
}