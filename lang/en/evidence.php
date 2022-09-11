<?php

use App\Rules\ArrayEviIn;

return[


    'confrimdelete'=>'ایا  این بخش را حذف مینمایید؟',
    'confrim'=>'ایا اطلاعات مدرک را بروز مینمایید؟',
    'success_dialog'=>'مدارک و فعالیت ها با موفقیت بروز گشت',
    'error_dialog'=>'توضیحاتی برای هیج دسته ای اعمال نکرده اید',

    'placeholder_dec'=>'شرح مدرک یا فعالیت ',

    'messages' => [
        "evi_cat.required"=>"فیلد دسته مدرک را انتخاب کنید.",
        "evi_dec.required"=>"شرح مدرک یا فعالیت را خالی نگذارید",

    ],
'validate'=>[
    'evi_cat' => 'required',
    'evi_dec' => ['required',new ArrayEviIn()],//exists:car_types,id
]
];
