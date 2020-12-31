@extends('layouts.master')

@section('main')
    <div class="col-md-12">

        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Add Admin</h4>
            </div>
            <div class="card-body">
                <form  method="post" action="/categories" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Admin Name </label>
                                <input type="text" name="..." class="form-control"  value="">
                                @error("cat_name")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Admin E-mail</label>
                                <input type="email" name="..." class="form-control" value="">
                                @error("cat_desc")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Admin Password</label>
                                <input type="password" name="..." class="form-control" value="">
                                @error("cat_desc")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="..." name="submit" class="btn btn-info btn-fill btn btn-primary">Add Admin</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>


        <div >
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Admins</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
