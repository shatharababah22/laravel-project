@extends('Dash.Master')

 @section('Title')
    Add equipment
 @endsection

 @section('content')





<div class="content">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin:auto">
                <div class="signup-content">
                    <form action="{{route('equipment.store')}}" method="POST"  id="signup-form" enctype="multipart/form-data" class="signup-form">
                        @csrf
                        @method('post')
                        <h2 class="form-title mb-4" style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Create Equipment</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="volunteer_name" id="name" value='{{ old('volunteer_name') }}' placeholder="volunteer name"/>
                            <span style="color:red">@error('volunteer_name'){{ $message }} @enderror</span><br><br>
                        </div>
                        {{-- <div class="form-group">
                            <input type="text" class="form-input hidden" name="category_id" id="name" placeholder="category_id"/>
                            <span style="color:red">@error('category_id'){{ $message }} @enderror</span><br><br>

                        </div> --}}
                        {{-- <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div> --}}
                        <div class="form-group">	
                            <input type="text" class="form-input" name="description" value='{{ old('description') }}' placeholder="Description"/>
                            <span style="color:red">@error('description'){{ $message }} @enderror</span><br><br>

                        </div>
                        <div class="form-group">	
                            <input type="text" class="form-input" name="price" value='{{ old('price') }}' placeholder="price"/>
                            <span style="color:red">@error('price'){{ $message }} @enderror</span><br><br>

                        </div>
                     
                        
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="password" id="password" placeholder="price"/>
                           
                        </div> --}}
                        {{-- <div class="form-group">
                            <input type="file" class="form-input" name="image" id="image" accept="image/*">
                        </div> --}}
                        <div class="form-group">
                        
                            <input  name="main_picture" type="file" class="form-control white-input" id="inputPrice">
                         </div>
                     
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