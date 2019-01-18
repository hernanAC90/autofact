<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $data['section'] = 'home';
        $user = Auth::user();
        $data['dates_diff'] = 1;
        if($user->question){
            $questionDate = new \DateTime($user->question->created_at);
            $currentDate = date("Y-m-d");
            $currentTime = date("H:i:s");
            $currentDate =  new \DateTime(date("Y-m-d H:i:s", strtotime($currentDate . $currentTime)));
            $data['dates_diff'] =  $questionDate->diff($currentDate)->m;

        }

        return view('home',$data);
    }
    public function dashboard()
    {
        $data['section'] = 'dashboard';
        $data['chart_data'] =  Array(
            "si"=> 0,
            "no"=> 0,
            "mas o menos"=> 0,
        );
        $questions  = Question::all();
        foreach ($questions as $key=>$q){
            $answers = unserialize($q->answers);
            foreach ($answers as $key => $a){
                if($key == "q2"){
                    $data['chart_data'][$a] = $data['chart_data'][$a] + 1;
                }
            }
        }
        return view('dashboard',$data);
    }
}
