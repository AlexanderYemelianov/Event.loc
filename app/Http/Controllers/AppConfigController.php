<?php

namespace App\Http\Controllers;

use App\AppConfig;
use Illuminate\Http\Request;
use Session;

class AppConfigController extends Controller
{
    private $validatorRules = [
        'contact_email'         => 'email|required',
        'contact_phone'         => 'required',
        'contact_person_name'   => 'required',
        'fb_link' => 'url|required',
        'ig_link' => 'url|required',
        'google_map_link' => 'url|required',
        'address' => 'required'
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAppConfig()
    {
        $appConfigs = AppConfig::all();

        return view('admin.appConfig', compact('appConfigs'));
    }

    public function saveAppConfig(Request $request)
    {
        $this->validate($request, $this->validatorRules);

        /** @var \Illuminate\Database\Eloquent\Collection $configCollection */
        $configCollection = AppConfig::all();

        foreach ($configCollection as $item) {
            if (isset($request->all()[$item->config_code])
                && $request->all()[$item->config_code] !== $item->value)
            {
                $item->value = $request->all()[$item->config_code];
                $item->save();
            }
        }

        \Session::flash('message', 'The configurations saved.' );
        return back();
    }
}
