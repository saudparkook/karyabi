@extends('headerAndFooter')
@section('body')

<div class="container mt-5 mb-5">
    <form class=" mt-5 mb-5" id="myForm" method="POST" action="{{ route('adduseraccess') }}">
        @csrf
        <h6 class="pt-4">
            <b class="bg-dark p-1 text-white">
                {{ __('admin/userAccessPage.addUserAccessPage.titleUseraccessPage') }}
            </b>
        </h6>
        <div class="row pt-2">
            <div class="col-sm-4 mt-2">
                <input class="form-control" type="text" name="title" placeholder="{{ __("admin/userAccessPage.addUserAccessPage.accessName") }}">
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                <select id="homepage" name="homepage" onchange="changed(this);" class="form-control" name="">
                    <option value="">{{ __("admin/userAccessPage.addUserAccessPage.selectFirstOpsion") }}</option>
                   @foreach (__('setting.allpage') as $key=>$page)
                   <option value="{{ $key }}">{{ $page }}</option>
                   @endforeach
                </select>
                </div>
            </div>

            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="publicuser" name="publicuser" type="checkbox"> {{ __('admin/userAccessPage.publicuser') }}
                    </label>
                </div>
            </div>


            @foreach (__('setting.allpage') as $key=>$page)
            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="{{ $key }}" name="{{ $key }}" type="checkbox"> {{ $page }}
                    </label>
                </div>
            </div>
            @endforeach


        </div>
        <hr>
        <h6 class="pt-4">
            <b class="bg-dark p-1 text-white">
                {{ __('admin/userAccessPage.addUserAccessPage.titleSpecialUser') }}
            </b>
        </h6>
        <div class="row pt-2">
            @foreach (__('setting.specialUser') as $key=>$page)
            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="{{ $key }}" name="{{ $key }}" type="checkbox"> {{ $page }}
                    </label>
                </div>
            </div>
            @endforeach
        </div>


        <div class=" col-sm-3 mx-auto">
            <div class="input-group mx-auto m-2">
                <button class="btn btn-success mx-auto" onclick="refsubmit();" type="button">{{ __("admin/userAccessPage.addUserAccessPage.addButton") }}</button>
                <a class="btn btn-primary mx-auto"  href="{{ route('useraccess') }}">{{ __("admin/userAccessPage.addUserAccessPage.backButton") }}</a>
            </div>
        </div>
    </form>

</div>


<script>
    function refsubmit(){
        if(confirm('{{ __("admin/userAccessPage.addUserAccessPage.confrimAddUserAccess") }}')){
        var form=document.getElementById("myForm");
              form.submit();

        }
    }
    function changed(item){
        document.getElementById(item.value).checked = true
    }


</script>
@endsection
