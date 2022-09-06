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
                "car_type.required"=>"فیلد کد ملی نباید خالی باشد.",
                "termograf.required"=>"فیلد شماره هوشمند نباید خالی باشد.",
                "meli_code.between"=>" کد ملی ده رقمی باشد  .",
                "name.required" => "نام و نام خانوادگی نباید خالی باشد.",
                "phone.required" => "شماره تلفن نباید خالی باشد.",
                "password.confirmed" => "تکرار رمز صحیح نیست.",
                "password.min" => "رمز باید بیشتر از 8 رقم باشد.",
                "profile.max"=>"حجم عکس نباید بیشتر از  2 مگابایت باشد",
                "profile.mimes"=>"این پسوند مجاز به آپلود نمی باشد",
            ],
        'validate'=>[
            'name' => 'required',
            'car_type' => 'required||exists:car_types,id',
            'termograf' => 'required|in:0,1',
            'termonumber' => 'required',
            'length' => 'required|integer',
            'width' => 'required|integer',
            'height' => 'required|integer',
            'Plaque_ser' => 'required|digits:2',
            'Plaque_char' => 'required|between:0,32',
            'Plaque_number' => 'required|digits:3',
            'Plaque_ir' => 'required|digits:2',
            'ty' => 'required|integer',
        ]


];
