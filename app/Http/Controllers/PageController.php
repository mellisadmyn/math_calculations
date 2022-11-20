<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage(Request $request){
        $term1      = $request->input('term1');
        $operator   = $request->input('operator');
        $distance   = $request->input('distance');
        $total      = $request->input('total');
        $sequence   = [$term1];

        if ($operator == '+') {
            for ($i=0; $i<$total; $i++) { 
                $sequence[$i+1]=$sequence[$i]+$distance;
            }
        }
        
        elseif ($operator == '-') {
            for ($i=0; $i<$total; $i++) { 
                $sequence[$i+1]=$sequence[$i]-$distance;
            }
        }

        return view('page.landing', compact('sequence'));
    }
}
