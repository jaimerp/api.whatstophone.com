<?php

namespace Database\Seeders;

use App\Models\ZonePrefix;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ZonePrefixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Http::get("http://country.io/names.json")->json();
        $prefix = Http::get("http://country.io/phone.json")->json();

        $countriesImport = ['ES', 'PT', 'DE', 'GB', 'IT', 'FR', 'IE'];
        foreach ($countries as $codeCountry => $nameCountry) {
            if (trim($prefix[$codeCountry]) != '' && !strchr($prefix[$codeCountry], 'and')) {
                $prefixParsed = str_replace('+', '', trim($prefix[$codeCountry]));
                $prefixParsed = str_replace('-', '', $prefixParsed);
                if (in_array($codeCountry, $countriesImport)) {
                    ZonePrefix::create(array(
                        'code' => $codeCountry,
                        'country_name' => $nameCountry,
                        'prefix' => $prefixParsed,
                    ));
                }
            }
        }
    }
}
