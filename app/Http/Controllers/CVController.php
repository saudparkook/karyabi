<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Evidence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        $userInfo=Auth::user()->load(['getEducation','getEvidence']);
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

    public function editCV(Request $request){
        // return $request;
        session([
            'partofpage' => $request->partofpage,
            'request' => $request->all()
        ]);

        if($request['partofpage']=='education'){
            session()->forget('request');
            $message=$this->education($request);
        }elseif($request['partofpage']=='evidence'){
            // return session('request');
            $message=$this->evidence($request);
            session()->forget('request');

        }
        Session::forget(['request','partofpage']);
        return redirect()->back()->with([$message[0]=>$message[1],'partofpage'=>$request->partofpage]);
    }

    public function education($request){
        $validatedData = $request->validate(__('education.validate'),__('education.messages'));

        $ed=Education::where('user_id','=',Auth::user()->id)->firstOrNew();
        $ed->user_id=Auth::user()->id;
        $ed->edu=$request->edu;
        $ed->uni=$request->uni;
        $ed->avg=$request->avg;
        $ed->description=$request->edu_description;
        $ed->start_date=$request->start_date;
        $ed->end_date=$request->end_date;
        $ed->save();
        return ['success-dialog',__('education.success_dialog')];
    }
    public function evidence($request){
        $validatedData = $request->validate(__('evidence.validate'),__('evidence.messages'));
        $id=Auth::user()->id;
        $bool=false;
        $data=array();
        for($i=0;$i<count($request->evi_cat);$i++){
            if($request->evi_cat[$i]!=''&&
            $request->evi_dec[$i]!=''){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'category'=>$request->evi_cat[$i],
                    'description'=>$request->evi_dec[$i]]);
            }
        }
        //  Evidence([
        //     'user_id'=>Auth::user()->id,
        //     'category'=>$request->evi_cat,
        //     'description'=>$request->evi_dec,
        // ]);
        if($bool){
            Evidence::insert($data);
            return ['success-dialog',__('evidence.success_dialog')];
        }
        return ['error-dialog',__('evidence.error_dialog')];


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        session([
            'partofpage' => $request->partofpage,
        ]);
        if($request['partofpage']=='education'){

        }elseif($request['partofpage']=='evidence'){
            $evi=Evidence::find($id);
            $evi->delete();

        }
        return redirect()->back()->with('success-dialog',__('evidence.success_dialog'));
     }
}
