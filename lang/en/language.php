<?php

use App\Rules\ArraylanguageIn;

return[


    'confrimdelete'=>'ایا این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات زبان را بروز مینمایید؟',
    'success_dialog'=>'زبان ها با موفقیت بروز گشت',
    'error_dialog'=>'توضیحاتی برای هیج دسته ای اعمال نکرده اید',


    'messages' => [
        "language_title.required"=>"فیلد دسته زبان را انتخاب کنید.",
        "language_Score.required"=>"بخود امتیاز دهید",
        "language_Score.between"=>"بخود امتیاز دهید",
    ],

    'validate'=>[
        'language_title' => 'required',
        'language_Score' => 'required|between:0,100',//exists:car_types,id
    ]
];
