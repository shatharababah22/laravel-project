@extends('Dash.Master')

 @section('Title')
    Add admin
 @endsection

 @section('content')

 <div class="content">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin:auto">
                <div class="signup-content">
                    <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form">
                        @csrf
                        @method('post')
                 

                        <h2 class="form-title mb-4" style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Add admin</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" value='{{ old('name') }}' placeholder="Name">
                            <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" value='{{ old('email') }}' id="email" placeholder="Email">
                            <span style="color:red">@error('email'){{ $message }} @enderror</span><br><br>
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-input" name="password" id="email" value='{{ old('password') }}' placeholder="Password">
                            <span style="color:red">@error('password'){{ $message }} @enderror</span><br><br>
                       
                        </div>
                        {{-- <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div> --}}
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="description" id="password" placeholder="Description"/>
                            <span style="color:red">@error('description'){{ $message }} @enderror</span><br><br>
                          
                        </div>
                        <div class="form-group">	
                            <input type="text" class="form-input" name="confirmepassword" id="password" placeholder="password"/>
                            <span style="color:red">@error('description'){{ $message }} @enderror</span><br><br>
                          
                        </div> --}}
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="password" id="password" placeholder="price"/>
                           
                        </div> --}}
                        {{-- <div class="form-group">
                            <input type="file" class="form-input" name="image" id="image" accept="image/*">
                        </div> --}}
                        {{-- <div class="form-group">
                        
                            <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                            <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                         </div> --}}
                     
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Add" style="color: rgb(10, 10, 105);"/>
                        </div>
                        
                          
                        
                    </form>
                </div>
            </div>
        </section>
    </div>




  
    
</div>


@endsection

