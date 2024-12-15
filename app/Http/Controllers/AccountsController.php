<?php

namespace App\Http\Controllers;
use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Exception;

class AccountsController extends Controller
{
    function donation(){
        return view("donation-guest-donation.adonation");
    }
    function articlesDetailG(){
        return view("articlesDetial-guest-articlesDetail.aarticlesDetailG");
    }
    
    function articlesDetail(){
        return view("articlesDetial-guest-articlesDetail.aarticlesDetail");
    }
     
    function articlesG(){
        return view("articles-guest-articles.aarticlesG");
    }

    function articles(){
        return view("articles-guest-articles.aarticles");
    }
    function bookDetail(){
        return view("bookDetail-guest-bookDetail.abookDetail");
    }

    function bookDetailG(){
        return view("bookDetail-guest-bookDetail.abookDetailG");
    }
    function book(){
        return view("book-guest-book.abook");
    }

    function bookG(){
        return view("book-guest-book.abookG");
    }

    // function eventGnextpage(){
    //     $events = Event::paginate(9);
    //     return view('events.eventGnextpage', compact('events'));
    // }
    function eventDetail(){
        return view("eventDetail-guest-eventDetail.aeventDetail");
    }

    function eventDetailG(){
        return view("eventDetail-guest-eventDetail.aeventDetailG");
    }
    function event(){
        return view("event-guest-event.aevent");
    }

    function eventG(){
        return view("event-guest-event.aeventG");
    }

    function updateProfile(){
        return view("account-login-register.aupdate-profile");
    }
    function profile(){
        return view("home-guest-home.aprofile");
    }

    function home(){
        return view("home-guest-home.ahome");
    }

    function homeG(){
        return view("home-guest-home.ahomeG");
    }

    public function googlepage(){
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(){
        try {
      
            $account = Socialite::driver('google')->user();
       
            $findaccount = Accounts::where('google_id', $account->id)->first();
       
            if($findaccount)

            {
       
                Auth::login($findaccount);
      
                return redirect()->intended('ahome');
       
            }

            else

            {
                $newAccount = Accounts::create([
                    'name' => $account->name,
                    'email' => $account->email,
                    'google_id'=> $account->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newAccount);
      
                return redirect()->intended('ahome');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    function resetPassword($token){
        return view("account-login-register.anew-password", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $updatePassword = DB::table('password_reset_tokens') ->where([
            "email" =>$request->email,
            "token" =>$request->token
        ])->first();

        if (!$updatePassword){
            return redirect()->to(route('aresetPassword'))
            ->with('error', 'yah ngak bisa ganti password!');
        }

        Accounts::where('email',$request->email)->update(['password' => $request->password]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect()->to(route('alogin'))
        ->with('success', 'yey bisa ganti password!');
    }

    function forgetPassword(){
        return view("account-login-register.aforget-password");
    }

    function forgetPasswordPost(Request $request){
        $token = Str::random(64);

        DB::table('password_reset_tokens') ->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("account-login-register.areset-password", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route('alogin')) 
        ->with('success', 'yey link email udh di kirim!');
    }

    function login(){
        return view("account-login-register.alogin");
    }

    function loginPost(Request $request){
        $account = Accounts::where('email','=',$request->email)->first();
        if($account && $request->password == $account->password){
            session(['user_name' => $account->name]);
            return redirect(route('ahome'))
            ->with('success', 'Selamat Datang, ' . $account->name . '!');
        }else{
            return redirect(route('alogin'))
            ->with('error', 'yah ngak bisa login!');
        }
    }

    function register(){
        return view("account-login-register.aregister");
    }

    function registerNotif(){
        return redirect(route('aregister'))
        ->with('success', 'silahkan melakukan register terlebih dahulu');
    }

    function registerPost(Request $request){
        $account = new Accounts();
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->phone_number = $request->phone_number;
        if($account->save()){
            return redirect(route('alogin'))
            ->with('success', 'yey bisa regis!');
        }else{
            return redirect(route('aregister'))
            ->with('error', 'yah ngak bisa regis!');
        }
    }
}
