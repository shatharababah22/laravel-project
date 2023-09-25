
@extends('Dash.Master')

 @section('Title')
Profile
 @endsection

 @section('content')



 <div class="container bootstrap  snippets bootdey" >
    <div class="panel-body inf-content">
        <div class="row" style="height: 300px">
            <div class="col-md-4">
                <img alt="" style="width: 450px;" title="" class="img-circle img-thumbnail isTooltip mt-4" src="{{ asset("img-dash/sohieb.jpg") }}" data-original-title="Usuario"> 
                <ul title="Ratings" class="list-inline ratings text-center">
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6 mt-4">
                <h4 style="color: rgb(10, 10, 105);">Personal information</h4><br>
                <div >
                <table class=" table-user-information">
                    <tbody>
                
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-asterisk text-success"></span>
                                    Number of admin                                                
                                </strong>
                            </td>
                            <td style="color: rgb(10, 10, 105);text-align: center;" >
                                {{ $admin->id}}    
                            </td>
                        </tr>
                        <tr>    
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-user  text-success"></span>    
                                    Name                                                
                                </strong>
                            </td>
                            <td style="color: rgb(10, 10, 105);">
                            
                                {{ $admin->name}}     
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-eye-open text-success"></span> 
                                    Role                                                
                                </strong>
                            </td>
                            <td style="color: rgb(10, 10, 105); ">

                                Admin 
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-envelope text-success"></span> 
                                    Email                                                
                                </strong>
                            </td>
                            <td clas="ms-2" style="color: rgb(10, 10, 105);">
                                {{ $admin->email}}   
                            </td>
                        </tr>
                        {{-- <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-success"></span>
                                   Address                                               
                                </strong>
                            </td>
                            <td style="color: rgb(10, 10, 105);">
                                Irbid-Jordan <i class="fas fa-edit" style="float: right;"></i>
                            </td>
                        </tr> --}}
                        {{-- <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-success"></span>
                                    Year Established                                                
                                </strong>
                            </td>
                            <td style="color: rgb(10, 10, 105);">
                                 2020   <i class="fas fa-edit" style="float: right;"></i>
                            </td>
                        </tr>     --}}
                                             
                    </tbody>
                    
                </table>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('adminprofile.edit',$admin->id) }}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105); ">Edit<i class="fa fa-edit  ms-2" ></i></a>
                </div>             
              </div>
            </div>
        </div>

    </div>





















<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>











 @endsection