<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    //
    public function migrate() {
        $response = Artisan::call("migrate");
        return $response;
    }

    public function optimize() {
        $response = Artisan::call("optimize");
        return $response;
    }
}
