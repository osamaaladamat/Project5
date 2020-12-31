<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Category;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::orderByDesc('applicant_id')->get();
        $categories =Category::all();
        return view("dashboard/applicants/applicants_table", compact("applicants","categories"));

// $applicants = Applicant::where('applicant_service', "Health care")->get();
//return view("dashboard/applicants/applicants_table", compact("applicants"));

    }
    public function category1_index()
    {
 $applicants = Applicant::where('cat_id', "1")->get();
return view("dashboard/applicants/category1_applicants_table", compact("applicants"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hana solution
//        $categories =Category::select('cat_id','cat_name')->get();
        $categories =Category::all();
        return view("web/create_applicant",compact('categories'));
    }

    // show without fetch any data
//    public function create()
//    {
//        return view("web/create_applicant", compact('categories'));
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('applicant_education_img')) {
            $file = $request->file('applicant_education_img') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('applicant_images', $filename);
        }

        if ($request->hasFile('applicant_image')) {
            $file = $request->file('applicant_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $applicant_image = time() . '.' . $ext ;
            $file->move('applicant_images', $applicant_image);
        } else {
            $applicant_image = "defaultImage.png";
        }


        Applicant::create( [
            "applicant_name"                    =>$request->applicant_name,
            "applicant_email"                   =>$request->applicant_email,
            "applicant_mobile"                  =>$request->applicant_mobile,
            "applicant_city"                    =>$request->applicant_city,
            "cat_id"                            =>$request->applicant_service_id,
//          "applicant_service_id"              =>$request->applicant_service_id,
            "applicant_desc"                    =>$request->applicant_desc,
            "applicant_subscription_type"       =>$request->applicant_subscription_type,
            "applicant_image"                   =>$applicant_image,
            "applicant_education_img"           => $filename ,
        ]);
//        return redirect("/applicants");
        return redirect("/applicants/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
