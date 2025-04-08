<?php

    namespace App\Http\Controllers;
    use App\Models\Profile;
    use Illuminate\Http\Request;

    class profileController extends Controller
    {
        // profile action
        public function profiles(Request $request) {
            $profiles = Profile::paginate(10);
            return view('profile.all', compact('profiles'));
        }

        // all profiles action 
        public function show(Profile $profile) {
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

        // store profile action 
        public function store(Request $request) {
            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $age = $request->input('age');
            $email = $request->input('email');
            $password = $request->input('password');
            $description = $request->input('description');

            // validating inputs
            $request->validate([
                'firstName' => 'required | string | min:5 | max:55',
                'lastName' => 'required | string | max:55',
                'age' => 'required | integer | min:10 | max: 99',
                'email' => 'required | string | email | max:255 | unique:profiles',
                'password' => 'required | string | min: 8 | max:255',
                'description' => 'nullable | string',
            ]);

            // inserting data
            Profile::create([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'age' => $age,
                'email' => $email,
                'password' => $password,
                'description' => $description,
            ]);

            // redirecting to profiles page
            return redirect()->route('profiles.profiles')->with('success', 'votre profile ajouter en succes');
        }
    }
