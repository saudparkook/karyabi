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


return '';


        $messages=[
            "title.unique"=>"نام تایتل تکراری است",
            "title.required"=>"فیلد  تایتل نباید خالی باشد.",
            "homepage.required"=>"صفحه اصلی را انتخاب کنید",

        ];

        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:user_accesses',
            'homepage' => 'required',

        ],$messages);

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

            foreach($request->all() as $k=>$value){
                if(array_key_exists($k,__('message.allpage'))){
                    array_push($data_middelware,[
                        "user_access"=>"$UserAccess->id",
                        'pagename'=>$k,
                        'status'=>$k
                        ]);

                }else{
                    array_push($data_setting,[
                        "accesses_id"=>"$UserAccess->id",
                        'title'=>str_replace('select','',$k),
                        'value'=>'1'
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
    public function edit(UserAccess $userAccess)
    {
        //
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
