@extends('Dash.Master')

@section('Title')
    Dashbored
@endsection

@section('content')

    <!-- Sale & Revenue Start -->
   <div class="container-fluid pt-4 px-4 ">
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-xl-3">
                <div class=" rounded d-flex align-items-center justify-content-between p-4"
                    style="background-color: rgba(169, 169, 169, 0.064);">
                    <i class="fa fa-chart-line fa-3x " style="color:rgb(10, 10, 105);"></i>
                    <div class="ms-3">
                        <p class="mb-2">Volunteer</p>
                        <h6 class="mb-0 text-dark">{{ $recordCount }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class=" rounded d-flex align-items-center justify-content-between p-4"
                    style="background-color: rgba(169, 169, 169, 0.064);">
                    <i class="fa fa-chart-bar fa-3x " style="color:rgb(10, 10, 105);"></i>
                    <div class="ms-3">
                        <p class="mb-2">Items</p>
                        <h6 class="mb-0 text-dark">{{ $items }} items</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class=" rounded d-flex align-items-center justify-content-between p-4"
                    style="background-color: rgba(169, 169, 169, 0.064);">
                    <i class="fa fa-chart-area fa-3x " style="color:rgb(10, 10, 105);"></i>
                    <div class="ms-3">
                        <p class="mb-2">Donation</p>
                        <h6 class="mb-0 text-dark">JOD {{ $totalPrice}}</h6>
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class=" rounded d-flex align-items-center justify-content-between p-4"
                    style="background-color: rgba(169, 169, 169,0.064);">
                    <i class="fa fa-chart-pie fa-3x " style="color:rgb(10, 10, 105);"></i>
                    <div class="ms-3">
                        <p class="mb-2">Our offerings</p>
                        <h6 class="mb-0 text-dark"> {{$volunteercount}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Sale & Revenue End -->


  
    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4 ">
        <div class="row g-1">
            <div class="col-sm-12 col-xl-12">
                <div class=" text-center rounded p-4 ">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 " href="" style="color: rgb(10, 10, 105);" >Jordan Donations</h6>
                        <a href="" style="color: rgb(10, 10, 105);">Show All</a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>

        </div>
    </div>
    <!-- Sales Chart End -->





    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4 mx-auto">
       <div class="row g-4 justify-content-center"> <!-- Add justify-content-center class to center the columns horizontally -->
           <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100  rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Messages</h6>
                        <a href="" style="color: rgb(10, 10, 105);">Show All</a>
                    </div>
                    <div class="d-flex align-items-center  py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('img/shatha.jpg') }}" 
                            alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Shatha Rababah</h6>
                                <small>20 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center  py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('img/mohammed.jpg') }}"
                            alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Husam Al-odat</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center  py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('img/murad.jpg') }}"
                            alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Murad Al-shorman</h6>
                                <small>40 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center  py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('images/20230911095137.PNG') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Sawsan</h6>
                                <small>1 hour ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-sm-12 col-md-6 col-xl-4">
           <div class="h-100  rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
               <div class="d-flex align-items-center justify-content-between mb-4">
                   <h6 class="mb-0 " style="color: rgb(10, 10, 105);">Calender</h6>
                   <a href="" style="color: rgb(10, 10, 105);">Show All</a>
               </div>
               <div id="calender"></div>
           </div>
       </div> --}}

       <div class="col-sm-12 col-md-6 col-xl-4">
           <div class="h-100 rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
               <div class="d-flex align-items-center justify-content-between mb-4">
                   <h6 class="mb-0" style="color: rgb(10, 10, 105);">To Do List</h6>
                   {{-- <a href="" style="color: rgb(10, 10, 105);">Show All</a> --}}
               </div>
               <form method="post" action="{{ route('todos.store') }}">
                @csrf
                <div class="input-group">
                    <input name="todo1" class="form-control bg-transparent border-1 pt-1 " type="text" placeholder="Enter task">
                    <button type="submit" class="btn ms-1 mb-1" style="background-color: rgba(216, 233, 251, 0.786); color: rgb(10, 10, 105); height:40px;">Add</button>
                </div>
            </form>
            @if (is_array($todos) || is_object($todos))
            @foreach($todos as $todo)
            <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0 bg-transparent" type="checkbox" name="todo1">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span>{{ $todo }}</span>
                        <form method="post" action="{{ route('todos.destroy', $todo) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        @endif 
        
                       
               
              
               
                
      
              
         

                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->
@endsection

@section('footer')
@endsection
