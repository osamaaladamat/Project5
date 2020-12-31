

@extends('layouts.master')

@section('main')



    <div class="col-md-12">

        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Edit Category </h4>
            </div>
            <div class="card-body">
                <form method="post" action="/categories/{{$category->cat_id}}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <img width="200" height="200" src="{{asset("images/$category->cat_image")}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category name</label>
                                <input type="text" name="cat_name" class="form-control" value="{{$category->cat_name}}">
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
                                <input type="text" name="cat_desc" class="form-control" value="{{$category->cat_desc}}">
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
                                {{-- value="{{$category->cat_image}}"--}}
                                <input type="file" name="cat_image" class="form-control" >
                                @error("cat_image")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <button type="submit_category" name="submit" class="btn btn-info btn-fill btn btn-primary">Update</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>


@endsection

