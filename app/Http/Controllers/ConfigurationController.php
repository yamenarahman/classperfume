<?php

namespace App\Http\Controllers;

use App\Configuration;

class ConfigurationController extends Controller
{

    public function index()
    {
        return view('config', [
            'tel' => optional(Configuration::where('key', 'tel')->first())->value,
            'facebook_link' => optional(Configuration::where('key', 'facebook_link')->first())->value,
            'twitter_link' => optional(Configuration::where('key', 'twitter_link')->first())->value,
            'youtube_link' => optional(Configuration::where('key', 'youtube_link')->first())->value,

        ]);
    }

    public function store()
    {
        //
    }

    public function update()
    {
        if (request('type') == 'info') {
            request()->validate([
                'tel' => 'required'
            ]);

            Configuration::updateOrCreate(['key' => 'tel'],[
                'value' => request('tel')
            ]);

            if(request('facebook_link')) {
                Configuration::updateOrCreate(['key' => 'facebook_link'],[
                    'value' => request('facebook_link')
                ]);
            }

            if(request('twitter_link')) {
                Configuration::updateOrCreate(['key' => 'twitter_link'],[
                    'value' => request('twitter_link')
                ]);
            }

            if(request('youtube_link')) {
                Configuration::updateOrCreate(['key' => 'youtube_link'],[
                    'value' => request('youtube_link')
                ]);
            }
            return back();
        }


    }

    public function destroy(Configuration $configuration)
    {
        //
    }
}
