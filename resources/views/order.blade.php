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
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                          
                               <br>
                               <br>

                          
     
                            <div class="panel panel-default">
                              <div class="panel-body">
                                <div class="btn-group" >
                          
                                  <select class="mdb-select md-form">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                  </select>
                                  </div>
                                  
                                 
                                  <div class="btn-group">
                                    <select class="mdb-select md-form">
                                      <option value="" disabled selected>Choose your option</option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                      <option value="3">Option 3</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
                          
                          
                          
                </div>
                
            </div>
           <div style="left:70%;" > <button type="button" class="btn btn-success">Order</button> </div>
        </div>
    </div>
</div>
@endsection

