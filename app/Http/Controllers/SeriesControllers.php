<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class SeriesControllers extends Controller
{
    public function index (Request $request) {
        $query = $request->query();
        dd($query['roland']);

        /*echo $request->url();
        exit;*/
        $series =  ['Cavaleiros do Zodiaco', 'Naruto', 'Aneis do Poder'];

        /*return view('series.index', ['series' => $series]);*/
        return view('series.index', compact('series'));

    }
}