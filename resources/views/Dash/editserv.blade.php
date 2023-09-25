@extends('Dash.Master')

 @section('Title')
    Edit servicess
 @endsection

 @section('content')

 <div class="content">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin:auto">
                <div class="signup-content">
                    <form method="post" action="{{route('services.update',$data['id'])}}" enctype="multipart/form-data"  id="signup-form"  class="signup-form">
                        @method('PUT')
                       @csrf
                        <h2 class="form-title mb-4" style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Update services</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="volunteer_name" value="{{ $data['volunteer_name'] }}" id="name" placeholder="volunteer name"/>
                            <span style="color:red">@error('volunteer_name'){{ $message }} @enderror</span><br><br>
                        </div>
                       
                        {{-- <div class="form-group">
                            <input type="text" class="form-input" name="category_id" id="name" placeholder="category_id"/>
                            <span style="color:red">@error('category_id'){{ $message }} @enderror</span><br><br>

                        </div> --}}
                        <div class="form-group">	
                            <input type="text" class="form-input" name="description" value="{{ $data['description'] }}" placeholder="Description"/>
                            <span style="color:red">@error('description'){{ $message }} @enderror</span><br><br>

                        </div>
                        <div class="form-group">	
                            <input  class="form-input" name="price" type="number" value="{{ $data['price'] }}" placeholder="price"/>
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
                            <img src="/images/{{ $data->main_picture }}" width="200px" class="mt-4">
                            {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}

                             </div>
                           
                         
                     
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update" style="color: rgb(10, 10, 105);"/>
                        </div>
                        
                          
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection