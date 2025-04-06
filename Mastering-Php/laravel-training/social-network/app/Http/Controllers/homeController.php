<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class homeController extends Controller
    {
        // Here write your actions.
        public function index(Request $request) {
            // pasing some data
            $users = [
                [ 'id' => 1, 'name' => 'Med tit', 'email' => 'med.tit@example.com' ],
                [ 'id' => 2, 'name' => 'Achraf fah', 'email' => 'achraf.fah@example.com' ],
                [ 'id' => 3, 'name' => 'yassin elb', 'email' => 'yassin.elb@example.com' ]
            ];
            return view('index', compact('users'));
        }
    }
