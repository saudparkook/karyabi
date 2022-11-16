<?php

return [
    'publicuser'=>'کاربر عمومی',

    'userAccessPage'=>[
        'textAdduserAccessButton'=>'ایجاد سطح دسترسی جدید',
        'textEditButton'=>'ویرایش',

        // tables item
        'table'=>[
            'row'=>'ردیف',
            'access'=>'سطح دسترسی',
            'homePage'=>'صفحه اصلی',
            ''=>'',
        ],
        //end tables item
    ],
    'addUserAccessPage'=>[
        'textAdduserAccessButton'=>'ایجاد سطح دسترسی جدید',
        'textEditButton'=>'ویرایش',
        "selectFirstOpsion"=> "انتخاب صفحه اصلی",
        "accessName"=> "نام دسترسی را وارد کنید",
        'confrimAddUserAccess'=>'آیا مایل به اضافه کردن این سطح دسترسی هستید؟',
        'titleUseraccessPage'=>'دسترسی ورود به صفحات',
        'titleSpecialUser'=>'انتخاب به عنوان یوزر خاص',
        'backButton'=>'بازگشت',
        'addButton'=>'ایجاد',


    ],
    'editUserAccessPage'=>[
        'textAdduserAccessButton'=>'ویرایش سطح دسترسی ',
        'textEditButton'=>'ویرایش',
        "selectFirstOpsion"=> "انتخاب صفحه اصلی",
        "accessName"=> "نام دسترسی را وارد کنید",
        'confrimAddUserAccess'=>'آیا مایل به ویرایش کردن این سطح دسترسی هستید؟',
        'titleUseraccessPage'=>'دسترسی ورود به صفحات',
        'titleSpecialUser'=>'انتخاب به عنوان یوزر خاص',
        'backButton'=>'بازگشت',
        'addButton'=>'ویرایش',


    ],


    'messages'=>[
        "title.unique"=>"نام تایتل تکراری است",
        "title.required"=>"فیلد  تایتل نباید خالی باشد.",
        "homepage.required"=>"صفحه اصلی را انتخاب کنید",

    ],
    'validateadd'=>[
        'title' => 'required|max:255|unique:user_accesses',
        'homepage' => 'required',

    ],
    'validateedit'=>[
        'title' => 'required|max:255|unique:user_accesses',
        'homepage' => 'required',

    ],

];
