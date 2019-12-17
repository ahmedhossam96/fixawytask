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

                    
                    
                  
                    <select class="mdb-select md-form">
                      <option value="" disabled selected>Choose your option</option>
                      @foreach ($areas as $area)
                      <option value="{{$area->id}}">{{$area->name}}</option>
                  @endforeach
                    </select>
                          
                               <br>
                               <br>

                          
     
                            <div class="panel panel-default">
                              <div class="panel-body">
                                  
                                <div class="btn-group" >
                          
                                  <select class="mdb-select md-form">
                                    <option value="" disabled selected>Choose your option</option>
                                    @foreach ($services as $service)
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                    
                                  </select>
                                  </div>
                                  
                                 
                                  <div class="btn-group">
                                    <select class="mdb-select md-form">
                                      <option value="" disabled selected>Choose your option</option>
                                      @foreach ($repairmen as $repairman)
                                    <option value="{{$repairman->id}}">{{$repairman->name}}</option>
                                    @endforeach
                                    </select>
                                  </div>
                              </div>
                            </div>
                          
                          
                          
                </div>
                
            </div>
            <form action="/orderdone" method="post" >
              @csrf
              <input type="hidden" name="areaid" value="1">
              <input type="hidden" name="serviceid" value="1">
              <input type="hidden" name="repairmanid" value="1">
             <input type="submit" value="Submit">
              {{--}}<button type="button" class="btn btn-success">Order</button> {{--}}
            </form>
           
        </div>
    </div>
</div>
@endsection


