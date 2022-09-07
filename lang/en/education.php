<?php

return[

    'span_edu'=>'مدرک تحصیلی',
    'span_uni'=>'نوع آکادمی',
    'span_avg'=>'معدل',
    'span_start_date'=>'از سال',
    'span_end_date'=>'تا سال',
    'span_description'=>'توضیحات مربوط به محل تحصیل',

    'confrim'=>'ایا اطلاعات تحصیلی را بروز مینمایید؟',
    'success_dialog'=>'تحصیلات با موفقیت بروز گشت',


    'uni'=>[
    '2'=>'دولتی',
    '3'=>'آزاد',
    '4'=>'پیام نور',
    '5'=>'غیر انتفاعی',
    '6'=>'پردیس خودگردان',
    ],
    'edu'=>[
    '2'=>'سیکل',
    '3'=>'دیپلم',
    '4'=>'کاردانی',
    '5'=>'کارشناسی',
    '6'=>'کارشناسی ارشد',
    '7'=>'دکترا',
    ],
    'end_date'=>[
        '0'=>'در حال تحصیل'
    ],

    'messages' => [
                "meli_code.unique"=>"کد ملیس تکراری است",
                "edu.required"=>"فیلد میزان تحصیلات نباید خالی باشد.",
                "uni.required"=>"فیلد نوع مرکز آموزشی نباید خالی باشد.",
                "avg.required"=>"فیلد معدل نباید خالی باشد.",
                "start_date.between"=>"سال را به درستی انتخاب کنید",
                "start_date.required" => "سال شروع نباید خالی باشد.",
                "end_date.required" => "سال پایان نباید خالی باشد.",
                "edu_description.required" => "توضیحات مربوط به محل تحصیل نباید خالی باشد.",
            ],
        'validate'=>[
            'edu' => 'required',//exists:car_types,id
            'uni' => 'required|',
            'avg' => 'required',
            'start_date' => 'required|integer|between:1350,1500',
            'end_date' => 'required|integer',
            'edu_description' => 'required|string',


        ]


];
