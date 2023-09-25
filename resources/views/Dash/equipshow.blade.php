@extends('Dash.Master')

@section('Title')
    Dashbored
@endsection



@section('content')

{{-- 
 @if (session('success'))
 <div class="sweetalert-success" style="display: none;">
     {{ session('success') }}
 </div>
@endif

@if (session('error'))
 <div class="sweetalert-error" style="display: none;">
     {{ session('error') }}
 </div>
@endif --}}



                
 <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="d-flex justify-content-start ">
                <a href="{{ route('equipment.index') }}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 110px; color: rgb(10, 10, 105);"><i class="fas fa-arrow-left ms-1"></i>  back</a>
            </div>
            <table class="table">

                <thead>
                    <tr>
                        <th style="color: rgb(9, 9, 66);">Image</th>
                        <th style="color: rgb(9, 9, 66);">Name</th>						
                        <th style="color: rgb(9, 9, 66);">Description</th>
                        <th style="color: rgb(9, 9, 66);">Price</th>
                                          {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody>

           
                    <tr>
                        
                        <td><a href="#"><img src="/images/{{$volnteer->main_picture }}" width="100px" height="100px" alt="Avatar"></a></td>              
                        <td>{{ $volnteer->volunteer_name}}</td>
                        <td>{{ $volnteer->description}}</td>
                        <td>{{ $volnteer->price}}</td>
                     
                      
                      
                    </tr>
            
                </tbody>
            </table>
         
        </div>
    </div>
</div>


 @endsection