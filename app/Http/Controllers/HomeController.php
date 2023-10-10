<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;  // Import the GeneralSetting model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch the GeneralSetting from the database
        $general_setting = GeneralSetting::find(1); // Assuming the ID is 1 as per your SettingController

        // If the general_setting is null, you can set a default value or handle it accordingly
        if (!$general_setting) {
            // Example: Set a default value
            $general_setting = (object) ["site_title" => "Default Title"];
        }

        return view('home', ['settings' => ['general' => $general_setting]]);
    }
}
