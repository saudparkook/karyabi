<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
    <head>
        <!-- <base href="../../"> -->
        <meta charset="utf-8"/>
        <title>خمیر ورک</title>
        <meta name="description" content="No subheader example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
                <!--end::Fonts-->

                    <!--begin::Page Vendors Styles(used by this page)-->
                        <!--end::Page Vendors Styles-->


        <!--begin::Global تم Styles(used by all pages)-->
                    <link href="assets/plugins/global/plugins.bundle.rtl.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                    <link href="assets/css/style.bundle.rtl.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <!--end::Global تم Styles-->

        <!--begin::چیدمان رزومه(used by all pages)-->


<link href="assets/css/themes/layout/aside/dark.rtl.css?v=7.0.6" rel="stylesheet" type="text/css"/>
<!--end::چیدمان رزومه-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

        <script src="{{ url('js/sweetalert.js') }}"></script>
        <style>
        @font-face {
          font-family: iransans;
          src: url({{ url('fonts/isw.ttf') }});
        }
        *{
            font-family: iransans;
        }
        .header {
            background-size: cover;
            background-position: center center;
            background-color: #ffffff; /* For browsers that do not support gradients */
            background-image: linear-gradient(#ffffff,#ffffff);
        }



        .a-tag{
            color: #000000;
            text-decoration: none !important;
            font-weight: bold;
            margin-right: 15px;
        }
        .a-tag2{
            color: #000000;
            text-decoration: none !important;
            font-weight: bold;
            margin-left: 15px;
        }
        .astyle{
            background-color: #00000013;
            color: #021ec0;
            text-decoration: none !important;
            font-weight: bold;
        }
         .footerclass{
            background-image: url("{{ url('images/footer.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
           }
           .vertical-center {
          min-height: 450px;  /* Fallback for browsers do NOT support vh unit */
          align-items: center;
        }
        </style>
        <script>
            function toast_dialog_error(txt){
                Swal.fire({
                    html: txt,
                    icon: "error",
                    confirmButtonText : "{{ __('text.confirmButtonText') }}",
                    buttonsStyling: false,
                    customClass : {
                        confirmButton: "btn font-weight-bold btn-primary"
                    }
                });
            }
            function toast_dialog(txt){
                Swal.fire({
                    html: txt,
                    icon: "success",
                    confirmButtonText : "{{ __('text.confirmButtonText') }}",
                    buttonsStyling: false,
                    customClass : {
                        confirmButton: "btn font-weight-bold btn-primary"
                    }
                });
            }
            function toast_loading(title,body){
                Swal.fire({
                title: title,
                html: body,
                timerProgressBar: true,
                closeOnClickOutside: false,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')

                },

            });
            }
            function refhref(id,message){
                if(confirm(message))
                {
                    document.getElementById(id).submit();
                }
            }

            function changevalue(item,message){
                item.innerHTML=message;
            }
            </script>
            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

    	<!--begin::Main-->
	<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/logo-light.png"/>
	</a>
	<!--end::Logo-->

	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
					<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->

					<!--begin::Header Menu Mobile Toggle-->
			<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>
			<!--end::Header Menu Mobile Toggle-->

		<!--begin::Topbar Mobile Toggle-->
		<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		</button>
		<!--end::Topbar Mobile Toggle-->
	</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
	<!--begin::Brand-->
	<div class="brand flex-column-auto " id="kt_brand">
		<!--begin::Logo-->
		<a href="index.html" class="brand-logo">
			<img alt="Logo" src="assets/media/logos/logo-light.png"/>
		</a>
		<!--end::Logo-->

					<!--begin::Toggle-->
			<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
				<span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    </g>
</svg><!--end::Svg Icon--></span>			</button>
			<!--end::Toolbar-->
			</div>
	<!--end::Brand-->

	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

		<!--begin::Menu Container-->
		<div
			id="kt_aside_menu"
			class="aside-menu my-4 "
			data-menu-vertical="1"
			 data-menu-scroll="1" data-menu-dropdown-timeout="500" 			>
			<!--begin::Menu Nav-->
			<ul class="menu-nav ">
				<li class="menu-item " aria-haspopup="true" >
                    <a  href="index.html" class="menu-link ">
                        <i class="menu-icon flaticon2-poll-symbol"></i>
                        <span class="menu-text">داشبورد</span>
                    </a>
                </li>
            </li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                <a  href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-image-file">
                    </i>
                <span class="menu-text">رزومه</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu ">
                <i class="menu-arrow">

                </i>
                <ul class="menu-subnav">
                    <li class="menu-item  menu-item-parent" aria-haspopup="true" >
                        <span class="menu-link">
                            <span class="menu-text">رزومه</span>
                        </span>
                    </li>
                    <li class="menu-item " aria-haspopup="true" >
                        <a class="menu-link ">
                            <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                            </i>
                            <span class="menu-text">test</span>
                        </a>
                    </li>
                </ul>
            </div>
            </li>
            </ul>
			<!--end::Menu Nav-->
		</div>
		<!--end::Menu Container-->
	</div>
	<!--end::Aside Menu-->
</div>
<!--end::Aside-->

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
<div id="kt_header" class="header  header-fixed " >
	<!--begin::Container-->
	<div class=" container-fluid  d-flex align-items-stretch justify-content-between">
					<!--begin::Header Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->

				<!--end::Header Menu-->
			</div>
			<!--end::Header Menu Wrapper-->

		<!--begin::Topbar-->
		<div class="topbar">
		    		    			            <!--begin::جستجو-->
		    		<div class="dropdown" id="kt_quick_search_toggle">
		                <!--begin::Toggle-->
		                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		        			<div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
		        				<span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		        			</div>
		                </div>
		                <!--end::Toggle-->

		                <!--begin::دراپ دان-->
		    			<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
		    				<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
    <!--begin:Form-->
    <form method="get" class="quick-search-form">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                </span>
            </div>
            <input type="text" class="form-control" placeholder="جستجو..."/>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                </span>
            </div>
       	</div>
    </form>
    <!--end::Form-->

    <!--begin::Scroll-->
    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200">
    </div>
    <!--end::Scroll-->
</div>
		    			</div>
		                <!--end::دراپ دان-->
		    		</div>
		            <!--end::جستجو-->




					        		           	<!--begin::Cart-->
		            <div class="topbar-item">
		                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_cart_toggle">
		                   <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>		        	    </div>
		            </div>
		            <!--end::Cart-->

		    		        <!--begin::Quick panel-->
		        <div class="topbar-item">
		            <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
		                <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>		            </div>
		        </div>
		        <!--end::Quick panel-->

							<!--begin::چت-->
				<div class="topbar-item">
				   <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">
					  <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>				   </div>
				</div>
				<!--end::چت-->

		    		        <!--begin::زبان ها-->
		        <div class="dropdown">
		            <!--begin::Toggle-->
		            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
		                    <img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt=""/>
		                </div>
		            </div>
		            <!--end::Toggle-->

		            <!--begin::دراپ دان-->
		    	    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
		    	        <!--begin::Nav-->
<ul class="navi navi-hover py-4">
    <!--begin::Item-->
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/226-united-states.svg" alt=""/>
            </span>
            <span class="navi-text">انگلیسی</span>
        </a>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="navi-item active">
        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/128-spain.svg" alt=""/>
            </span>
            <span class="navi-text">اسپانیایی</span>
        </a>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/162-germany.svg" alt=""/>
            </span>
            <span class="navi-text">آلمانی</span>
        </a>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/063-japan.svg" alt=""/>
            </span>
            <span class="navi-text">ژاپنی</span>
        </a>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/195-france.svg" alt=""/>
            </span>
            <span class="navi-text">فرانسه</span>
        </a>
    </li>
    <!--end::Item-->
</ul>
<!--end::Nav-->
		    	    </div>
		            <!--end::دراپ دان-->
		        </div>
		        <!--end::زبان ها-->

		    		        		            <!--begin::User-->
		            <div class="topbar-item">
		                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
							<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">سلام,</span>
		                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">محسن</span>
		                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
		                        <span class="symbol-label font-size-h5 font-weight-bold">م</span>
		                    </span>
		                </div>
		            </div>
		            <!--end::User-->
		        		    		</div>
		<!--end::Topbar-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->

				<!--begin::Content-->
                @include('error')
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

					<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<!--begin::داشبورد-->

            @yield('body')
            <!--end::داشبورد-->
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>
				<!--end::Content-->

									<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
	<!--begin::Container-->
	<div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::کپی رایت-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted font-weight-bold mr-2">2020&copy;</span>
			<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
		</div>
		<!--end::کپی رایت-->

		<!--begin::Nav-->
		<div class="nav nav-dark">
			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">درباره ما</a>
			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">تیم</a>
			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">مخاطب</a>
		</div>
		<!--end::Nav-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
							</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
<!--end::Main-->




        <script>var HOST_URL  = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global جی اس scripts)-->
        <script>
            var KTAppSettings  = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#3699FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#E4E6EF",
                "dark": "#181C32"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1F0FF",
                "secondary": "#EBEDF3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#3F4254",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#EBEDF3",
            "gray-300": "#E4E6EF",
            "gray-400": "#D1D3E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#7E8299",
            "gray-700": "#5E6278",
            "gray-800": "#3F4254",
            "gray-900": "#181C32"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global تم Bundle(used by all pages)-->
    	    	   <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
		    	   <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
				<!--end::Global تم Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>
