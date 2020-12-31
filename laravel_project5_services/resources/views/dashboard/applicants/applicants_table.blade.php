@extends('layouts.master')
@section('main')
    <table class="table">
        <thead>
        <tr>
{{--            //note: do not show all categories --}}
            <th scope="col">Number</th>
            <th scope="col">Id</th>
            <th scope="col">Created_at</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">City</th>
            <th scope="col">Service</th>
            <th scope="col">Desc</th>
            <th scope="col">subscription type</th>
            <th scope="col">education img</th>
            <th scope="col">options</th>
        </tr>
        </thead>
        <tbody>
        {{--        for Number column use count like below--}}
        @php($count=0)
        @foreach($applicants as $applicant )
            @php($count++)
            <tr>
                <td>{{$count}}</td>
                <td>{{$applicant->applicant_id}}</td>
                <td>{{$applicant->created_at}}</td>
                <td>{{$applicant->applicant_name}}</td>
                <td>{{$applicant->applicant_email}}</td>
                <td>{{$applicant->applicant_mobile}}</td>
                <td>{{$applicant->applicant_city}}</td>
                <td>category name</td>
                <td>{{$applicant->applicant_desc}}</td>
                <td>{{$applicant->applicant_subscription_type}}</td>
                <td><img width="200" height="200" src="{{asset("applicant_images/$applicant->applicant_education_img")}}"></td>
                <td>
                    <a href="categories/{{$applicant->applicant_id}}">
                        <button class="btn btn-danger" value="EDIT" > show </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

