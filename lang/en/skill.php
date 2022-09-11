<?php

use App\Rules\ArrayskillIn;

return[


    'confrimdelete'=>'ایا این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات مهارت را بروز مینمایید؟',
    'success_dialog'=>'مهارت ها با موفقیت بروز گشت',
    'error_dialog'=>'توضیحاتی برای هیج دسته ای اعمال نکرده اید',

    'placeholder_dec'=>'شرح مهارت یا فعالیت ',

    'messages' => [
        "skill_cat.required"=>"فیلد دسته مهارت راانتخاب کنید.",
        "skill_dec.required"=>"شرح مهارت را خالی نگذارید",
        "skill_Score.required"=>"بخود امتیاز دهید",
        "skill_Score.between"=>"بخود امتیاز دهید",
    ],

    'validate'=>[
        'skill_cat' => 'required',
        'skill_dec' => ['required'],//exists:car_types,id
        'skill_Score' => 'required|between:0,100',//exists:car_types,id
    ]
];
