@extends('layouts.master')

@section('main')

    <div class="col-md-12">

        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                <form  method="post" action="/categories" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category name</label>
                                <input type="text" name="cat_name" class="form-control"  value="{{old('cat_name')}}">
                                @error("cat_name")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Description</label>
                                <input type="text" name="cat_desc" class="form-control" >
                                @error("cat_desc")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Image</label>
                                <input type="file" name="cat_image" class="form-control" value="{{old('cat_image')}}">
                                @error("cat_image")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <button type="submit_category" name="submit" class="btn btn-info btn-fill btn btn-primary">Add category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>


        <div >
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Category</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{-- for Number column use count like below--}}
                        @php($count=0)
                        @foreach($categories as $category )
                            @php($count++)

                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$category->cat_id}}</td>
                                <td>{{$category->cat_name}}</td>
                                <td>{{$category->cat_desc}}</td>
                                <td><img width="100" height="100" src="{{asset("images/$category->cat_image")}}"></td>
                                <td >
                                    <a href="categories/{{$category->cat_id}}/edit">
                                        <button class="btn btn-danger" value="EDIT" > Edit </button>
                                    </a>
                                </td>
                                <form method="post" action="/categories/{{$category->cat_id}}">
                                    @csrf
                                    @method("DELETE")
                                    <td ><button class="btn btn-danger" value="DELETE" > Delete</button> </td>
                                </form>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
