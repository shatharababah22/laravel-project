@extends('layouts.master')
@section('title' , 'Cash Donation')
  @section("content") 
    <!-- Top Bar End -->
    <div class="about p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="about-img align-items-center"><img class=" col-12 "
                            src="{{ asset("images/$volnteer->main_picture") }}"
                            alt=""></div>
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
                                        <p ><strong>Raised:</strong> ${{ $price }}</p>
                                        <p><strong>Goal:</strong> ${{ $volnteer->price }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="donate-form">
                                <div class="p-list">
                                    <span> Make Your Donation: <i class="fa fa-inr"></i> </span>
    
                                </div>
                                <form method="post" action="{{ route("paypal") }}">
                                    @csrf
                                        <input id="don" name="id" type="number" class="form-control" placeholder="USD" required="required" value="{{ $volnteer->id }}"  hidden/>
                                        <input id="don" name="donate" type="number" class="form-control" placeholder="USD" required="required" value="{{ $price }}"  hidden/>
                                        <input id="don" name="max" type="number" class="form-control" placeholder="USD" required="required" value="{{ $volnteer->price }}"  hidden/>
                                        <input id="don" name="price" type="number" class="form-control" placeholder="USD" required="required" value="{{$volnteer->price-$price}}" />
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" style="color: red" />
                                        
                                        <button class="btn btn-custom m-3" type="submit"> pay with paypal</button>
                                    
                                </form>
                            </div>

                            <hr>
                        </div>
                    </div>
                    {{-- <div class="_p-add-cart m-3">

                        <div id="paypal-button-container"></div>
                        <p id="result-message"></p>
                        <input type="hidden" name="pid" value="18" />
                        <input type="hidden" name="price" value="850" />
                        <input type="hidden" name="url" value="" />
                    </div> --}}
                </div>
            </div>
        </div>
        @endsection
        <!-- Nav Bar Start -->
        
        <!-- Nav Bar End -->


        <!-- Page Header Start -->


        <!-- Volunteer End -->


        <!-- Footer Start -->
    