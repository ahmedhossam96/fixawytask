<?php

namespace App\Http\Controllers;

use App\Servicearea;
use App\Repairman;
use App\Customer;
use App\Invoice;
use App\Order;
use App\Service;

 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    public function index()
    {
    $id = Auth::id();
    
    $order = Order::select('id','service_id','repairman_id','customer_id','created_at')->where('repairman_id',$id)->get();
   foreach($order as $orderr){
    $services = Service::select('name')->where('id',$orderr->service_id)->get();
    $repairmen = Repairman::select('name')->where('id',$orderr->repairman_id)->get();
    $customers = Customer::select('name')->where('id',$orderr->customer_id)->get();
    $placed_at = $orderr->created_at;
   }

      return view('pricing', compact('services','customers','repairmen','placed_at'));
    }



    public function insert(Request $request)

    {
        $id = Auth::id();

        $invoice = new Invoice();
       //Repairman::select('name')->where('id',$orderr->repairman_id)->get(); Servicearea::select('price')->where('service_id',$orderr->service_id)->get();Service::select('name')->where('id','1')->get();
        $order = Order::select('service_id','repairman_id','id')->where('repairman_id',$id)->get();
        foreach($order as $orderr){
           
        $invoice->order_id = $orderr->id;
        $invoice->repairman_id =  1;
        $invoice->service_id =  1;
        $invoice->price = 30;
        $invoice->time = $request->time;
        $invoice->total = 30;
        $invoice->save(); 
        }
        
        return view('pricingdone');
    }
}

