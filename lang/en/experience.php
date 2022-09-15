<?php

use App\Rules\ArraylanguageIn;

return[

    'span_title'=>'عنوان شغلی',
    'span_company'=>'نام شرکت',
    'span_dec'=>'توضیحات شغل خود',
    'span_start_date'=>'از سال',
    'span_end_date'=>'تا سال',

    'confrimdelete'=>'ایا این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات  سوابق شغلی را بروز مینمایید؟',
    'success_dialog'=>'سوابق شغلی  با موفقیت بروز گشت',
    'error_dialog'=>'لطفا تمام فیلد ها را پر کنید',

    'end_date'=>[
        '0'=>'مشغول به کار'
    ],
    'messages' => [
        "experience_company.required"=>"فیلد عنوان سوابق شغلی را انتخاب کنید.",
        "exp_dec.required"=>"توضیحات  شغلی خود را وارد کنید",
        "exp_dec.*.required"=>"توضیحات  شغلی خود را وارد کنید",
        "exp_company.required"=>"  نام شرکت را وارد کنید",
        "exp_start_date.required"=>"شروع همکاری خود را وارد کنید",
        "exp_end_date.required"=>"پایان همکاری خود را وارد کنید",

    ],

    'validate'=>[
        'exp_title' => 'required',
        'exp_company' => 'required',
        'exp_start_date' => 'required|array',
        'exp_start_date.*' => 'required|integer|between:1350,1500',
        'exp_end_date' => 'required|array',
        'exp_end_date.*' => 'required|integer',
        'exp_dec' => 'required',

    ]
];
