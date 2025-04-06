<?php

    namespace App\Http\Controllers;
    use App\Models\Profile;
    use Illuminate\Http\Request;

    class profileController extends Controller
    {
        // profile action
        public function profile(Request $request) {
            $profiles = Profile::paginate(10);
            return view('profile.all', compact('profiles'));
        }

        // all profiles action 
        public function show(Request $request) {
            $id = (int) $request->id;
            $profile = Profile::find($id);
            // if profile not found
            if (!$profile) {
                return abort(403);
            } else {
                return view('profile.show', compact('profile'));
            }
        }

        // create profile action 
        public function create() {
            return view('profile.create');
        }
    }
