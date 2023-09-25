@extends('Dash.Master')

 @section('Title')
    Dashbored
 @endsection

 @section('content')








                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <table class="table">
                
                                <thead>
                                    <tr>
                                        <th style="color: rgb(9, 9, 66);">User</th>
                                        <th style="color: rgb(9, 9, 66);">Email-user</th>						
                                        <th style="color: rgb(9, 9, 66);">volunteer_name</th>	
                                        <th style="color: rgb(9, 9, 66);">Price</th>
                                     
                                        {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                
                                    @foreach ($users as  $user)
                                    <tr>
                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->volunteer_name}}</td>
                                        <td>{{ $user->price}}</td>
                                      
                                  
                                      
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>
                         
 @endsection


