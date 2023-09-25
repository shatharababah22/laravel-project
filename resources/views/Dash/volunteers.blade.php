@extends('Dash.Master');

 @section('Title')
   volunteers
 @endsection

 @section('content')


 <div class="container-fluid pt-4 px-4" >
    <div class=" text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Salse</h6>
            <a href="" style="color: darkolivegreen;">Show All</a>
        </div>
        <div class="table-responsive">
            @if(Session::has('deleted'))
            <div class="d-flex justify-content-start deleted"  role="alert">
        
                {{Session::get('deleted')}}
            </div>

            @elseif(Session::has('sucsess'))

            <div class="d-flex justify-content-start sucesses"  role="alert">
        
                {{Session::get('sucsess')}}
            </div>
            @endif
            <table class="table text-start align-middle  table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Volunteer ID</th>
                        <th scope="col">Volunteer Name</th>
                        <th scope="col">Catogry ID</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Main Picture</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($allVolun as $item)
                <tbody>
                    <tr>
                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->volunteer_name}}</td>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>  @if ($item->image)
                                <img src="" width="150" height="120">
                              @endif
                         </td>
                        <td> <a href="{{route('delete_volunteer',$item->id)}}" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                         </a>
                        </td>
                    </tr>
                @endforeach
                  
                </tbody>
            </table>

          

        </div>

        
    </div>

   
    <form  style="padding-top: 50px;" method="posr" action="{{route('Add_volunteer')}}">
        <h3 style="color: black">Add volunteer</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputname4">name</label>
                    <input type="name" name="name" class="form-control white-input" id="inputname4" placeholder="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputState">Category id</label>
                    <select name="category_id" id="inputState" class="form-control white-input">
                        <option selected>1</option>
                        <option>2</option>
                    </select> </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">description</label>
             <textarea name="description"  class="form-control white-input" id="" cols="30" rows="3"></textarea>
            {{-- <input type="text" class="form-control white-input" id="description" placeholder="Description"> --}}
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputCity">Price</label>
                    <input name="price" type="number" class="form-control white-input" id="inputPrice">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputPicture">picture</label>
                    <input  name="picture" type="file" class="form-control white-input" id="inputPrice">

                     </div>
            </div>
           
        </div>
        <div style="padding-top: 10px;">
        <button type="submit" class="btn  btn-success" >Add Volunteer</button>
        </div>
    </form>
    
</div>
<!-- Recent Sales End -->





 @endsection