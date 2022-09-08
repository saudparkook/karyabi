<?php
return[


    'confrim'=>'ایا اطلاعات مدرک را بروز مینمایید؟',
    'success_dialog'=>'مدارک با موفقیت بروز گشت',

    'messages' => [
        "description.required"=>"شرح مدرک را خالی نگذارید",
        "category.required"=>"فیلد دسته مدرک راانتخاب کنید.",

    ],
'validate'=>[
    'description' => 'required',//exists:car_types,id
    'category' => 'required',
]
];
