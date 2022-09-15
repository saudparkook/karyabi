<?php

use App\Rules\ArraylanguageIn;

return[


    'confrimdelete'=>'ایا این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات رسانه های اجتماعی را بروز مینمایید؟',
    'success_dialog'=>'رسانه های اجتماعی  با موفقیت بروز گشت',
    'error_dialog'=>'آیدی برای هیج دسته ای اعمال نکرده اید',


    'messages' => [
        "media_company.required"=>"فیلد دسته رسانه های اجتماعی را انتخاب کنید.",
        "media_value.required"=>"آیدی خود را وارد کنید",
    ],

    'validate'=>[
        'media_company' => 'required',
        'media_value' => 'required',//exists:car_types,id
    ]
];
