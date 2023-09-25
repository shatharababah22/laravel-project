@extends('layouts.master')
@section('title' , 'Bill')
@section('content')
        {{-- <div class="container">
    <div class="sub-container">
        <div class="conten2t">
            <h3 style="margin-top: 70px">Thanks {{ Auth::user()->name }}</h3>
            <div class="flex">
                <p>You have donated :</p>

                <p>{{ session()->get('reques') }} $</p>
            </div>
            
            <hr>


        <h3 class="flex">Thank you for your donation</p>
            </h3>

            <div class="cont"> <a href="{{  url('/')  }}" class="btn btn-custom btn-play">home</a> <a href="{{ route("profile.edit") }}" class="btn btn-custom btn-playbtn">profile</a></div>
        </div>
    </div> --}}
    <div class="body">
        <div class="container-thanks" style="margin:165px auto; width: 40%;">
        
            <h2 >Thanks {{ Auth::user()->name }}</h2><br>
            <div class="flex p-thanks">
                <h3>You have donated :</h3>
        
                <h3 style="margin-left: 20px">{{ session()->get('reques') }} $</h3>
            </div>
               
            <p class="p-thanks">Thank you for your donation</p>
               
                <div class="cont"> <a href="{{  url('/')  }}" class="btn btn-custom btn-play m-4">home</a> <a href="{{ route("profile.edit") }}" class="btn btn-custom btn-playbtn m-4">profile</a></div>
        </div>
    </div>
@endsection