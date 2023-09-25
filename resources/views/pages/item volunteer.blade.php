@extends('layouts.master')
@section('title', 'In-Kind Donations')
@section('content')
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
                                <span> DESCREPTION: <i class="fa fa-inr"></i> </span>
                                <P>{{ $volnteer->description }}</P>
                            </div>

                            <hr>
                            <div class="donate-form">
                                <div class="p-list">
                                    <span> Make Your Donation: <i class="fa fa-inr"></i> </span>

                                </div>
                                <div class="volunteer-form">
                                    <form method="POST" action="/volunteeringitem">
                                        @csrf
                                        <div class="control-group">
                                            <input type="text" name="id" class="form-control" placeholder="NUMBER"
                                                hidden value="{{ $volnteer->id }}" />
                                        </div>
                                        <div class="control-group">
                                            <input type="text" name="number" class="form-control"
                                                placeholder="NUMBER" />
                                        </div>
                                        <span style="color: red">
                                            @error('number')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                        <br>
                                        <div class="control-group">
                                            <input type="TEXT" name="location" class="form-control"
                                                placeholder="LOCATION" />
                                        </div>
                                        <span style="color: red">
                                            @error('location')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                        <br>
                                        <div class="control-group">
                                            <input type="TEXT" name="qty" class="form-control" placeholder="QTY">
                                        </div>
                                        <span style="color: red">
                                            @error('qty')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                        <div>
                                            <button class="btn btn-custom" type="submit">DONATE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <hr>
                        </div>
                    </div>
                    <div class="_p-add-cart m-3">

                        <div id="paypal-button-container"></div>
                        <p id="result-message"></p>
                        <input type="hidden" name="pid" value="18" />
                        <input type="hidden" name="price" value="850" />
                        <input type="hidden" name="url" value="" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <!-- Nav Bar Start -->



    <!-- Page Header Start -->


    <!-- Volunteer End -->


    <!-- Footer Start -->
