<?php

    namespace App\Http\Controllers;
    use App\Http\Requests\ProfileRequest;
    use App\Http\Resources\ProfileResource;
    use App\Mail\testMail;
    use App\Models\Profile;
    use Illuminate\Mail\Mailable;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class ProfileController extends Controller
    {
        // constructor
        public function __construct() {
            $this->middleware('auth');
        }

        // profile action
        public function index(Request $request) {
            Cache::delete('profiles');
            // Cache or retrieve the profile by ID
            $profiles = Cache::remember('profiles', 60 * 60, function () {
                return ProfileResource::collection(Profile::all());
            });
            return view('profile.all', compact('profiles'));
        }

        // all profiles action 
        public function show(Profile $profile){
            $cacheKey = 'profile_' . $profile->id;
            // Cache or retrieve the profile by ID
            $cachedProfile = Cache::remember($cacheKey, 60 * 60, function () use ($profile) {
                return Profile::findOrFail($profile->id);
            });
            return view('profile.show', ['profile' => $cachedProfile]);
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
            $profile = Profile::create($formFields);

            // mailing
            $mailer = new testMail($profile);
            Mail::to('mouha22talibi@gmail.com')->send($mailer);

            // redirecting to profiles page
            return redirect()->route('profiles.index')->with('success', 'votre profile ajouter en succes');
        }

        // destroy action 
        public function destroy(Profile $profile) {
            $profile->delete();
            return to_route('profiles.index')->with('success', 'Profile est supprimer !');
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
            return to_route("profiles.show", $profile->id)->with('success', "Mis a jour de profile resussit !");
        }

        // verify email
        public function verifyEmail(string $hash) {
            $decoded = explode('///',base64_decode($hash));
            $id = $decoded[1];
            $date = $decoded[0];
            $profile = Profile::findOrFail($id);
            dd(
                $profile
            ) ;
        }

    }

