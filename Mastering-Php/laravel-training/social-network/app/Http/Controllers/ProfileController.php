<?php

    namespace App\Http\Controllers;
    use App\Http\Requests\ProfileRequest;
    use App\Models\Profile;
    use Hash;
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
        public function store(ProfileRequest $request) {
            // validating inputs
            $formFields = $request->validated();

            // hashing password
            $formFields['password'] = Hash::make($request->password);

            // handling image 
            $fileName = $request->file('image')->store('images','public');
            $formFields['image'] = $fileName;

            // inserting data
            Profile::create($formFields);

            // redirecting to profiles page
            return redirect()->route('profiles.profiles')->with('success', 'votre profile ajouter en succes');
        }

        // destroy action 
        public function destroy(Profile $profile) {
            $profile->delete();
            return to_route('profiles.profiles')->with('success', 'Profile est supprimer !');
        }

        // edit profile 
        public function edit(Profile $profile) {
            $profile = Profile::findOrFail($profile->id);
            return view('profile.edit', compact('profile'));
        }

        // update action 
        public function update(ProfileRequest $request, Profile $profile) {
            $formFields = $request->validated();
            $formFields['password'] = Hash::make($request->password);
            $image = $request->file('image');
            if($request->hasFile('image')) {
                $formFields['image'] = $request->file('image')->store('images', 'public');
            }
            $profile->fill($formFields)->save();
            return to_route("profile.show", $profile->id)->with('success', "Mis a jour de profile resussit !");
        }
    }
