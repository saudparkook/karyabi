<?php

use App\Rules\ArraylanguageIn;

return[

    'list'=>[
        '0'=>'انگلیسی',
        '1'=>'آلمانی',
        '2'=>'عربی',
        '3'=>'فرانسوی',
        '4'=>'اردو',
        '5'=>'کره ای',
        '6'=>'چینی',
        '7'=>'ژاپنی',
        '8'=>'ترکی استانبول',
        '9'=>'ترکی',
        '10'=>'اسپانیایی',

],
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
