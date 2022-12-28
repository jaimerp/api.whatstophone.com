<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Http::get("http://country.io/names.json")->json();
        $prefix = Http::get("http://country.io/phone.json")->json();

        $html = '';
        $countriesImport = ['ES', 'PT', 'DE', 'GB', 'IT', 'FR', 'IE'];
        foreach ($countries as $codeCountry => $nameCountry) {
            if (trim($prefix[$codeCountry]) != '' && !strchr($prefix[$codeCountry], 'and')) {
                $prefixParsed = str_replace('+', '', trim($prefix[$codeCountry]));
                $prefixParsed = str_replace('-', '', $prefixParsed);
                if (in_array($codeCountry, $countriesImport)) {
                    if ($nameCountry == 'Spain') $nameCountry = 'España';
                    $html .= $codeCountry . ' ' . $nameCountry . ' ' . $prefixParsed . '<br />';
                }
            }
        }
        return $html;
        dd();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
