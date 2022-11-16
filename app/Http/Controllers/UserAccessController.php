<?php

namespace App\Http\Controllers;

use App\Models\UserAccess;
use App\Http\Requests\StoreUserAccessRequest;
use App\Http\Requests\UpdateUserAccessRequest;
use App\Models\Middelware;
use App\Models\Setting;
use Illuminate\Http\Request;

class UserAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get=UserAccess::get();
        return view('useraccess.useraccess',compact('get'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('useraccess.add_user_access');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserAccessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate(__('admin/userAccessPage.validateadd'),__('admin/userAccessPage.messages'));
        $data_middelware=[];
        $data_setting=[];
        $UserAccess=new UserAccess([
            'title'=>trim($request['title']),
            'homepage'=>trim($request['homepage']),
            'status'=>trim($request['publicuser']),
        ]);
        if($UserAccess->save()){
            unset($request['title']);
            unset($request['homepage']);
            unset($request['publicuser']);
            unset($request['_token']);

            foreach($request->all() as $k=>$value){
                if(array_key_exists($k,__('setting.allpage'))){
                    array_push($data_middelware,[
                        "user_access"=>"$UserAccess->id",
                        'pagename'=>$k,
                        ]);

                        // echo 'middelware '.$k.'=>'.$value.'<br>';
                }elseif(array_key_exists($k,__('setting.settinguserAccess'))||array_key_exists($k,__('setting.specialUser'))){
                    // echo 'setting '.$k.'=>'.$value.'<br>';
                    array_push($data_setting,[
                        "user_access"=>"$UserAccess->id",
                        'title'=>$k,
                        'value'=>$value
                        ]);
                }

            }
            Middelware::insert($data_middelware);
            Setting::insert($data_setting);
        }
        return redirect(route('useraccess'))->with("success-dialog","سطح دسترسی جدید ایجاد گشت ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAccess  $userAccess
     * @return \Illuminate\Http\Response
     */
    public function show(UserAccess $userAccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAccess  $userAccess
     * @return \Illuminate\Http\Response
     */
    public function edit( $userAccess)
    {
        $userAccess=UserAccess::with(['middelware','setting'])->find($userAccess);
        //
        $settinguseraccess=array();
        $midellwareuseraccess=array();
        if($userAccess){
            // return $userAccess;
            foreach ($userAccess->setting as $item) {
                $settinguseraccess[$item->title]=$item->value;
            }
            foreach ($userAccess->middelware as $item) {
                $midellwareuseraccess[$item->pagename]='1';
            }
            return view('useraccess.edit_user_access',compact('userAccess','midellwareuseraccess','settinguseraccess'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAccessRequest  $request
     * @param  \App\Models\UserAccess  $userAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAccess $userAccess)
    {
        //


        $validate=[];
        if(trim($request->title)!=trim($userAccess->title)){
            $validate=array_merge( $validate,['title' => 'required|max:255|unique:user_accesses']);
        }
        $validate=array_merge( $validate,['homepage' => 'required']);
        $validatedData = $request->validate($validate,__('admin/userAccessPage.messages'));

        $userAccess->title=trim($request['title']);
        $userAccess->homepage=trim($request['homepage']);
        $userAccess->status=trim($request['publicuser']);

    if($userAccess->save()){
        unset($request['title']);
        unset($request['homepage']);
        unset($request['publicuser']);
        unset($request['_token']);


        $data_middelware=[];
        $data_setting=[];
        foreach($request->all() as $k=>$value){
            //add middelware for user access
            if(array_key_exists($k,__('setting.allpage'))){
                array_push($data_middelware,[
                    "user_access"=>"$userAccess->id",
                    'pagename'=>$k,
                    'status'=>$k
                    ]);
            }elseif(array_key_exists($k,__('setting.settinguserAccess'))||array_key_exists($k,__('setting.specialUser'))){
                array_push($data_setting,[
                    "user_access"=>"$userAccess->id",
                    'title'=>$k,
                    'value'=>$value
                    ]);
            }

        }

        Middelware::where('user_access','=',$userAccess->id)->delete();
        Setting::where('user_access','=',$userAccess->id)->delete();
        Middelware::insert($data_middelware);
        Setting::insert($data_setting);
    }

    return redirect()->back()->with("success-dialog","سطح دسترسی جدید ویرایش گشت ");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAccess  $userAccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAccess $userAccess)
    {
        //
    }
}
