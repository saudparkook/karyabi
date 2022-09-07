<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userInfo=Auth::user()->load(['getEducation']);
        // return $userInfo;
        return view('CV.createCV',compact('userInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function editCV(Request $request, $username){



        $validatedData = $request->validate(__('education.validate'),__('education.messages'));

        if(isset($request['education'])){
            // print_r( $this->education($request));
            $ed=Education::where('user_id','=',Auth::user()->id)->firstOrNew();
            $ed->user_id=Auth::user()->id;
            $ed->edu=$request->edu;
            $ed->uni=$request->uni;
            $ed->avg=$request->avg;
            $ed->description=$request->edu_description;
            $ed->start_date=$request->start_date;
            $ed->end_date=$request->end_date;
            $ed->save();
        }

        return redirect()->back()->with('success-dialog',__('education.success_dialog'));
    }

    public function education($request){
        $ed=Education::where('user_id','=',Auth::user()->id)->first();

        return $ed;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
