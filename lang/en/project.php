<?php

use App\Rules\ArraylanguageIn;

return[

    'span_title'=>'عنوان پروژه',
    'span_position'=>'سمت شما در پروژه',
    'span_dec'=>'توضیحات پروژه خود را وارد نمایید',
    'span_date'=>' سال انجام',

    'confrimdelete'=>'ایا این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات  پروژه ها  را بروز مینمایید؟',
    'success_dialog'=>'پروژه ها  با موفقیت بروز گشت',
    'error_dialog'=>'لطفا تمام فیلد ها را پر کنید',

    'end_date'=>[
        '0'=>'مشغول به کار'
    ],
    'messages' => [
        "project_title.required"=>"فیلد عنوان پروژه را انتخاب کنید.",
        "project_dec.required"=>"توضیحات  پروژه خود را وارد کنید",
        "project_position.required"=>"  نام شرکت را وارد کنید",
        "project_date.required"=>"تاریخ انجام پروژه خود را وارد کنید",

    ],

    'validate'=>[
        'project_title' => 'required',
        'project_position' => 'required',
        'project_date' => 'required|array',
        'project_date.*' => 'required|integer',
        'project_dec' => 'required',

    ]
];
