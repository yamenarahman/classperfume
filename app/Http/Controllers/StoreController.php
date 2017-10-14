<?php

namespace App\Http\Controllers;

use App\Configuration;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $options = [
            'tel' => Configuration::where('key', 'tel')->first()->value,
            'facebook_link' => Configuration::where('key', 'facebook_link')->first()->value,
            'twitter_link' => Configuration::where('key', 'twitter_link')->first()->value,
            'youtube_link' => Configuration::where('key', 'youtube_link')->first()->value
        ];
        return view('welcome', ['options' => Configuration::all()]);
    }
}
