<?php

namespace App\Http\Controllers;

use App\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
     public function reserve(Request $request){
       
        $this->validate($request,[
            'name' => 'required',
            'service' => 'required',
            
      ]);
         
        $queue = new Queue();
        $queue->name = $request->name;
        $queue->service = $request->service;
        $queue->status = false;
        $queue->save();
      return redirect()->route('welcome')->with('successMsg','Request Successfully Sent');
    }
}
