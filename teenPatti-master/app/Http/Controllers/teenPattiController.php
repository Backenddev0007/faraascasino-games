<?php

namespace App\Http\Controllers;
use App\Players as players;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class teenPattiController extends Controller
{
	
    //View of the index page
    public function index()
    {
        
    	return view('index');
    }

    //entring number of players
    public function create_players(Request $request){

       $number=$request->input('playernumber');

        
       session(['number' => $number]);

       return view('pages.player_names');
    }    
    public function game_view(Request $request){
        
        

    	return view('pages.game_view');
    }

}
 