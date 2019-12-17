@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                 
                    <div class="panel panel-default">

                    <div class="panel-body"><span style=background-color: #e7e7e7; color: black;>{{$placed_at}}</span>
                        
                        @foreach ($customers as $customer)
                                <span style=background-color: #e7e7e7; color: black;>{{$customer->name}}</span> 
                                @endforeach
                    </div>
                          </div>

                          <div class="panel panel-default">
                              @foreach ($repairmen as $repairman)
                          <div class="panel-body"><span style=background-color: #e7e7e7; color: black;>{{$repairman->name}}</span>
                            @endforeach
                            @foreach ($services as $service)
                                <span style=background-color: #e7e7e7; color: black;>{{$service->name}}</span> 
                                @endforeach

                        </div>
                              </div>

                             

                
                        </div>
                              </div>
                        </div>
                              </div>

                            
            <form action="/pricingdone" method="post" >
              @csrf
        
              <div class="panel panel-default">
                    <div class="panel-body"><span style=background-color: #e7e7e7; color: black;>Time</span>
                        <input type="text" name="time" value="">
            </div>
                  </div>
             <input type="submit" value="Submit">
        
            </form>
           
        </div>
    </div>
</div>
@endsection
