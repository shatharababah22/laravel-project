@extends('layouts.master')
@section('title' , 'Donations')
  @section("content")  <!-- Top Bar End -->
<div class="about p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="about-img align-items-center"  ><img class=" col-12 " src="{{ asset("images/$volnteer->main_picture") }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                          
                            <h2>{{ $volnteer->volunteer_name }}</h2>
                        </div>
                        <hr>
                        <div class="about-tab">
                            

                            <div class="tab-content">
                                <div class="p-list">
                                    <span> DONATIONS: <i class="fa fa-inr"></i> </span>
                                    @php
                                    if ($price != 0) {
                                        $result = intval(($price / $volnteer->price) * 100);
                                    } else {
                                        $result = 0;
                                    }
                                    if ($result > 100) {
                                        $result = 100; // Ensure the result does not exceed 100%
                                    }
                                    @endphp
                                </div>
                                <div class="causes p-0">
                                    <div class="causes-progress m-0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $result }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                               
                                                <span>{{ $result }}%</span>
                                            </div>
                                        </div>
                                        <div class="progress-text" style="display: flex;justify-content:space-between">
                                            <p ><strong>Raised:</strong>${{ $price }}</p>
                                            <p><strong>Goal:</strong>${{ $volnteer->price }}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="tab-content-1" class="container tab-pane active">
                                    {{ $volnteer->description }} 
                                </div>
                                
                               <hr>
                        </div>
                    </div>
                    <div class="causes-btn">
                        <a href="/volunteering item/{{ $volnteer->id }}" class="btn btn-custom btn-play" tabindex="0" >
                            <i class="far fa-grin-wink"></i> In-Kind Donations
                        </a>
                        @if ($result < 100)
                        <a href="/volunteering/{{ $volnteer->id }}" class="btn btn-custom btn-play" tabindex="0" >
                            <i class="fas fa-money-bill"></i> Cash Donations
                        </a>
                  
                        
                    
                        @endif
                       
                        
                    </div>   
                </div>
            </div>
        </div>
    @endsection


    <!-- Page Header Start -->
   
    
    <!-- Volunteer End -->


   