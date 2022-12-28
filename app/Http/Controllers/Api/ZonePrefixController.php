<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ZonePrefix;
use Illuminate\Http\Request;

class ZonePrefixController extends Controller
{
    public function index()
    {
        return ZonePrefix::all();
    }
}
