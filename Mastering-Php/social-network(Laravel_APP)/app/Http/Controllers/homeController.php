<?php
    namespace App\Http\Controllers;
    use App\Mail\testMail;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class homeController extends Controller
    {
        // Here write your actions.
        public function index(Request $request) {
            $lastVisit = $request->session()->get('visitedTime', 0);
            $request->session()->put('visitedTime', $lastVisit + 1);
            $visitedTime = $request->session()->get('visitedTime');
            return view('index', compact('visitedTime'));
        }
    }
