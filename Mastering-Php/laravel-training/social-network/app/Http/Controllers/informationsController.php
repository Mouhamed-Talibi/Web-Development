<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class informationsController extends Controller
    {
        // informations action
        public function informations(Request $request) {
            return view('infos');
        }
    }
