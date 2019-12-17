<?php

namespace App\Http\Controllers;

use App\Area;
use App\Order;
use App\Repairman;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $areas = Area::select('id','name')->get();
         $repairmen = Repairman::select('id','name')->get();
       $services= Service::select('id','name')->get(); 

       return view('order', compact('areas','services','repairmen'));
    }


    public function create(Request $request)
    {
  
        $id = Auth::id();
      
       // dd($request);

        $order = new Order();
        
        $order->repairman_id =  $request->repairmanid;
        $order->service_id =  $request->serviceid;
        $order->customer_id =  1;
        //dd($order);
        $order->save(); 
        return view('orderdone');
    }




}
