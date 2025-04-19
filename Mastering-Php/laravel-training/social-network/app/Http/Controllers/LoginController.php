<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Session;

    class LoginController extends Controller
    {
        // login action
        public function loginForm() {
            return view('login.show');
        }

        // submit login action 
        public function submitLogin(Request $request) {
            $email = $request->email;
            $password = $request->password;
            $credentials = ['email' =>$email, 'password' =>$password];

            // check authentification
            if(Auth::attempt($credentials)) {
                // creating a session
                $request->session()->regenerate();
                // redirect to home 
                return to_route("home")->with('success', 'connexion reussit ✔');
            } else {
                return back()->withErrors([
                    'error' => "email ou mot de passe incorrect !"
                ])->onlyInput('email');
            }
        }

        // logout action 
        public function logout(){
            Session::flush();
            Auth::logout();
            return to_route('loginForm')->with('success', 'Vous etes biens deconnecter');
        }
    }
