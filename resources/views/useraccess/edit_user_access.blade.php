@extends('headerAndFooter')
@section('body')
<div class="container mt-5 mb-5">
    <form class=" mt-5 mb-5" id="myForm" method="POST" action="{{ route('edituseraccess',$userAccess->id) }}">
        @csrf
        <h6 class="pt-4">
            <b class="bg-dark p-1 text-white">
                {{ __('admin/userAccessPage.editUserAccessPage.titleUseraccessPage') }}
            </b>
        </h6>
        <div class="row pt-2">
            <div class="col-sm-4 mt-2">
                <input class="form-control" type="text" name="title"
                value="{{ $userAccess->title }}"
                 placeholder="{{ __("admin/userAccessPage.editUserAccessPage.accessName") }}">
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                <select id="homepage" name="homepage" onchange="changed(this);" class="form-control" name="">
                    <option value="">{{ __("admin/userAccessPage.editUserAccessPage.selectFirstOpsion") }}</option>
                   @foreach (__('setting.allpage') as $key=>$page)
                   <option
                   @if ($userAccess->homepage==$key )
                       selected
                   @endif
                   value="{{ $key }}">{{ $page }}</option>
                   @endforeach
                </select>
                </div>
            </div>

            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="publicuser" name="publicuser" type="checkbox"
                        @if ($userAccess->status=='on')
                            checked
                        @endif
                        > {{ __('admin/userAccessPage.publicuser') }}
                    </label>
                </div>
            </div>


                <br><br><br>


            @foreach (__('setting.allpage') as $key=>$page)
            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="{{ $key }}" name="{{ $key }}" type="checkbox"
                        @isset($midellwareuseraccess[$key])
                            checked
                        @endisset
                        > {{ $page }}
                    </label>
                </div>
            </div>
            @endforeach


        </div>
        <hr>
        <h6 class="pt-4">
            <b class="bg-dark p-1 text-white">
                {{ __('admin/userAccessPage.editUserAccessPage.titleSpecialUser') }}
            </b>
        </h6>
        <div class="row pt-2">
            @foreach (__('setting.specialUser') as $key=>$page)
            <div class="col-sm-4 mt-2">
                <div class="input-group" >
                    <label class="form-control">
                        <input id="{{ $key }}" name="{{ $key }}" type="checkbox"
                        @isset($settinguseraccess[$key])
                            checked
                        @endisset
                        > {{ $page }}
                    </label>
                </div>
            </div>
            @endforeach
        </div>


        <div class=" col-sm-3 mx-auto">
            <div class="input-group mx-auto m-2">
                <button class="btn btn-success mx-auto" onclick="refsubmit();" type="button">{{ __("admin/userAccessPage.editUserAccessPage.addButton") }}</button>
                <a class="btn btn-primary mx-auto"  href="{{ route('useraccess') }}">{{ __("admin/userAccessPage.editUserAccessPage.backButton") }}</a>
            </div>
        </div>
    </form>

</div>


<script>
    function refsubmit(){
        if(confirm('{{ __("admin/userAccessPage.editUserAccessPage.confrimAddUserAccess") }}')){
        var form=document.getElementById("myForm");
              form.submit();

        }
    }
    function changed(item){
        document.getElementById(item.value).checked = true
    }


</script>
@endsection
