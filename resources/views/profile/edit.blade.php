
    @extends('layouts.master')
    @section('title' , 'My Profile')


    @section('content')
    <x-app-layout>
        <div class="hero overlay" style="  background-image: url('{{ asset('img/1111.jpeg') }}'); height: 300px; background-size: cover; background-repeat: no-repeat;" >
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="heading mt-6 mb-2" style="margin-top: 150px; font-weight: bolder;font-size:50px; color:grey" data-aos="fade-up">Your Profile</h1>
                    </div>
                </div>
            </div>
        </div>

        <x-slot name="header">
            {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Profile') }}
            </h2> --}}
        </x-slot>
    
        <div class="py-12" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="">
                        <table class="table table-hover">
                            <h2 style="font-weight: bold;color:black">Your donations</h2>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">volunteer_name</th>
                                    <th scope="col">category</th>
                                    <th scope="col">price</th>
                                
                                    <th scope="col">qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $users as $user )
                                    
                                
                                <tr>
                                    {{-- <th scope="row">{{$i++}}</th> --}}
                                    <td> </td>
                                    <td> {{$user->volunteer_name}}</td>
                                    <td> {{$user->name}}</td>
                                    <td> NONE</td>
                                    
                                    <td> {{$user->qty}}</td>
                                    
                                    
                                    
                                   
                                </tr>
                                @endforeach
                                @foreach ( $userdetails as $user )
                                    
                                
                                <tr>
                                    {{-- <th scope="row">{{$i++}}</th> --}}
                                    <td> </td>
                                    <td> {{$user->volunteer_name}}</td>
                                    <td> {{$user->name}}</td>
                                    
                                    <td> {{$user->price}}</td>
                                    <td> NONE</td>
                                    <td></td>
                                    
                                  
                                    
                                   
                                </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    
@endsection