<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $data['title'] = 'E-Quran';
            $base_url = env('BASE_API_QURAN');

            $chapters = Http::get($base_url . '/chapters');
            $surah = json_decode($chapters->body(), true);
            $data['chapters'] = $surah['chapters'];

            $juzs = Http::get($base_url . '/juzs');
            $jus = json_decode($juzs->body(), true);
            $data['juzs'] = $jus['juzs'];

            // return response()->json($data);
            return view('home.home', $data);
        } catch (\Throwable $th) {
            return response()->json(['code' => 500, 'title' => __('Fail'), 'message' => __('Something Went Wrong'), 'error_message' => $th->getMessage()], 200);
        }
    }
}
