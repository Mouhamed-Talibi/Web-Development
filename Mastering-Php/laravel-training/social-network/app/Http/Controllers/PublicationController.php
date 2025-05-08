<?php

    namespace App\Http\Controllers;
    use App\Http\Requests\ajouterPublicationRequest;
    use App\Http\Requests\updatePublicationRequest;
    use App\Models\Publication;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Gate;

    class PublicationController extends Controller
    {
        public function __construct() {
            $this->middleware('auth')->except('index');
        }

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $publications = Publication::orderBy('created_at', 'desc')->paginate(5);
            return view('publications.index', compact('publications'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('publications.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(ajouterPublicationRequest $request)
        {
            $requiredFields = $request->validated();
            // Handle image if uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('publications', $imageName, 'public'); // store with custom name
                $requiredFields['image'] = $imageName;
            }

            // Check if user is authenticated
            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Vous devez être connecté pour publier.');
            }
            $requiredFields['profile_id'] = Auth::id();
            // store publication
            Publication::create($requiredFields);
            return redirect()->route('publications.index')->with('success', 'Publication ajoutée avec succès !');
        }


        /**
         * Display the specified resource.
         */
        public function show(Publication $publication)
        {
            // 
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Publication $publication)
        {   
            Gate::authorize('update', $publication);
            // check if publication exists
            if (!$publication) {
                return redirect()->route('home')->with('error', 'Publication non trouvée !');
            }
            return view('publications.edit', compact('publication'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(updatePublicationRequest $request, Publication $publication)
        {
            $requiredFields = $request->validated();
            // handle image if uplaoded 
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('publications', $imageName, 'public'); // store with custom name
                $requiredFields['image'] = $imageName;
            }
            // store publication
            $publication->fill($requiredFields)->save();
            return redirect()->route('home')->with('success', 'Publication modifiee avec succès !');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Publication $publication)
        {
            if (!$publication) {
                return redirect()->route('home')->with('error', 'Publication non trouvée !');
            }
            $publication->delete();
            return redirect()->route('publications.index')->with('success', 'Publication supprimée avec succès !');
        }
    }
