<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Evidence;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Media;
use App\Models\Project;
use App\Models\Skill;
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

        $userInfo=Auth::user()->load(['getEducation','getEvidence','getSkill','getlanguage','getExperience','getProject']);
        // return $userInfo->getSkill;
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
        session([
            'partofpage' => $request->partofpage,
            'request' => $request->all()
        ]);

        if($request['partofpage']=='education'){
            session()->forget('request');
            $message=$this->education($request);
        }elseif($request['partofpage']=='evidence'){
            // return $request->partofpage;
            $message=$this->evidence($request);
            session()->forget('request');

        }elseif($request['partofpage']=='skill'){
            $message=$this->skill($request);
            session()->forget('request');
        }elseif($request['partofpage']=='language'){
            $message=$this->language($request);
            session()->forget('request');
        }elseif($request['partofpage']=='media'){
            // return $request;

            $message=$this->media($request);
            session()->forget('request');
        }elseif($request['partofpage']=='experience'){
            $message=$this->experience($request);
            session()->forget('request');
        }elseif($request['partofpage']=='project'){
            $message=$this->project($request);
            session()->forget('request');
        }elseif($request['partofpage']==''){

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
        $id=Auth::user()->id;
        if(count($request->evidence_cat)<2){
            Evidence::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('evidence.validate'),__('evidence.messages'));
        $bool=false;
        $data=array();
        for($i=0;$i<count($request->evidence_cat);$i++){
            if($request->evidence_cat[$i]!=''&&
            $request->evidence_dec[$i]!=''){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'category'=>$request->evidence_cat[$i],
                    'description'=>$request->evidence_dec[$i]]);
            }
        }

        if($bool){
            Evidence::where('user_id','=',$id)->delete();
            Evidence::insert($data);
            return ['success-dialog',__('evidence.success_dialog')];
        }
        return ['error-dialog',__('evidence.error_dialog')];


    }
    public function skill($request){

        $id=Auth::user()->id;
        if(count($request->skill_cat)<2){
            Skill::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('skill.validate'),__('skill.messages'));
        $bool=false;
        $data=array();
        for($i=0;$i<count($request->skill_cat);$i++){
            if($request->skill_cat[$i]!=''&&
            $request->skill_dec[$i]!=''&&
            $request->skill_Score[$i]>5){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'catgory'=>$request->skill_cat[$i],
                    'Score'=>$request->skill_Score[$i],
                    'description'=>$request->skill_dec[$i]]);
            }
        }
        if($bool){
            Skill::where('user_id','=',$id)->delete();
            Skill::insert($data);
            return ['success-dialog',__('skill.success_dialog')];
        }
        return ['error-dialog',__('skill.error_dialog')];
    }
    public function language($request){
        $id=Auth::user()->id;
        if(count($request->language_title)<2){
            Language::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('language.validate'),__('language.messages'));
        $bool=false;
        $data=array();
        for($i=1;$i<count($request->language_title);$i++){
            if($request->language_title[$i]!=''&&
            $request->language_Score[$i]>5){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'title'=>$request->language_title[$i],
                    'Score'=>$request->language_Score[$i]
                ]);
            }
        }
        if($bool){
            Language::where('user_id','=',$id)->delete();
            Language::insert($data);
            return ['success-dialog',__('language.success_dialog')];
        }
        return ['error-dialog',__('language.error_dialog')];
    }

    public function media($request){

        $id=Auth::user()->id;

        if(count($request->media_company)<2){
            Media::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('media.validate'),__('media.messages'));
        $bool=false;
        $data=array();
        for($i=1;$i<count($request->media_company);$i++){
            if($request->media_company[$i]!=''&&
            $request->media_value[$i]!=''){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'company'=>$request->media_company[$i],
                    'value'=>$request->media_value[$i]
                ]);
            }
        }
        if($bool){
            Media::where('user_id','=',$id)->delete();
            Media::insert($data);
            return ['success-dialog',__('media.success_dialog')];
        }
        return ['error-dialog',__('media.error_dialog')];
    }
    public function experience($request){
        $id=Auth::user()->id;
        if(count($request->exp_title)<2){
            Experience::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('experience.validate'),__('experience.messages'));
        $bool=false;
        $data=array();
        for($i=0;$i<count($request->exp_title);$i++){
            if($request->exp_title[$i]!=''&&
            $request->exp_company[$i]!=''&&
            $request->exp_start_date[$i]!=''&&
            $request->exp_end_date[$i]!=''&&
            $request->exp_dec[$i]!=''){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'title'=>$request->exp_title[$i],
                    'company'=>$request->exp_company[$i],
                    'end_date'=>$request->exp_start_date[$i],
                    'start_date'=>$request->exp_end_date[$i],
                    'description'=>$request->exp_dec[$i],
                ]);
            }
        }
        if($bool){
            Experience::where('user_id','=',$id)->delete();
            Experience::insert($data);
            return ['success-dialog',__('experience.success_dialog')];
        }
        return ['error-dialog',__('experience.error_dialog')];
    }
    public function project($request){
        $id=Auth::user()->id;
        if(count($request->project_title)<2){
            Project::where('user_id','=',$id)->delete();
            return ['success-dialog',__('media.success_dialog')];
        }
        $validatedData = $request->validate(__('project.validate'),__('project.messages'));
        $bool=false;
        $data=array();
        for($i=0;$i<count($request->project_title);$i++){
            if($request->project_title[$i]!=''&&
            $request->project_position[$i]!=''&&
            $request->project_date[$i]!=''&&
            $request->project_dec[$i]!=''){
                $bool=true;
                array_push($data,['user_id'=>$id,
                    'title'=>$request->project_title[$i],
                    'position'=>$request->project_position[$i],
                    'date'=>$request->project_date[$i],
                    'description'=>$request->project_dec[$i],
                ]);
            }
        }
        if($bool){
            Project::where('user_id','=',$id)->delete();
            Project::insert($data);
            return ['success-dialog',__('project.success_dialog')];
        }
        return ['error-dialog',__('project.error_dialog')];
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
