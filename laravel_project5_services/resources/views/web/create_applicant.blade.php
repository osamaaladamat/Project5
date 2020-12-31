
    <form method="post" action="/applicants" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="applicant_name" class="form-control" value="{{old('applicant_name')}}">
            @error("applicant_name")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="applicant_email" class="form-control" value="{{old('applicant_email')}}">
            @error("applicant_email")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="tel" name="applicant_mobile" class="form-control" value="{{old('applicant_mobile')}}">
            @error("applicant_mobile")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" name="applicant_city" class="form-control" value="{{old('applicant_city')}}">
            @error("applicant_city")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload your image</label>
            <input type="file" name="applicant_image" class="form-control" value="{{old('applicant_image')}}">
            @error("applicant_image")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="applicant_service_id">Select your Service:</label>
            <select name="applicant_service_id" id="">
                @foreach($categories as $category)
                    <option value="{{$category->cat_id}}">{{$category->cat_name}} </option>
                @endforeach
            </select>
            @error("applicant_service_id")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" name="applicant_desc" class="form-control" >{{old('applicant_desc')}}</textarea>
            @error("applicant_desc")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Educational certificates</label>
            <input type="file" name="applicant_education_img" class="form-control" value="{{old('applicant_education_img')}}" >
            @error("applicant_education_img")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="applicant_subscription_type">Select the Subscription type:</label>
            <select name="applicant_subscription_type" id="">
                <option value="trail">3 Month trial </option>
                <option value="Monthly">Monthly</option>
                <option value="Half yearly">Half yearly</option>
                <option value="Yearly">Yearly</option>
            </select>
            @error("applicant_subscription_type")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <button type="submit_applicant" name="submit" class="btn btn-primary"> Submit </button>
    </form>



