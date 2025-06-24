<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ProfileRequest;
    use App\Http\Resources\ProfileResource;
    use App\Models\Profile;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Support\Facades\Hash;

    class ProfileController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $profiles = Cache::remember('profiles_api', 60,  function () {
                return ProfileResource::collection(Profile::all());
            });
            return $profiles;
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $formFields = $request->all();
            $profile = Profile::create($formFields);
            return new ProfileResource($profile);
        }

        /**
         * Display the specified resource.
         */
        public function show(Profile $profile)
        {
            return new ProfileResource($profile);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request   $request, Profile $profile)
        {
            $formFields = $request->all();
            $profile->fill($formFields)->save();
            return new ProfileResource($profile);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Profile $profile)
        {
            $profile->delete();
            return response()->json([
                'profileId' => $profile->id,
                'message' => 'Profile deleted successfully',
            ]);
        }
    }
