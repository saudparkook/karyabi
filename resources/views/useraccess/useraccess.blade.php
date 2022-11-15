@extends('headerAndFooter')
@section('body')

<div class="row mx-auto p-5" style="text-align: center;">
    <div class="col-sm-3 mx-auto">
        <a href="{{ route('adduseraccess') }}" class="btn btn-primary">{{ __('admin/userAccessPage.userAccessPage.textAdduserAccessButton') }}</a>
    </div>
</div>


    <div class=" row mx-auto">
        @if (count($get)<1)
            <h2 class="mx-auto my-auto pt-5 mt-5">
                لیست خالی است
            </h2>
        @else
        <table style="text-align: center;" class="table table-striped">
            <thead class="thead-dark">
                <tr style="text-align: center;">

                    @foreach (__('admin/userAccessPage.userAccessPage.table') as $key=>$item)
                    <th style="text-align: center;" scope="col">{{ $item}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($get as $useraccess)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$useraccess->title}}</td>
                    <td>{{__('setting.allpage')[$useraccess->homepage]}}</td>
                    <td>
                        <button class="btn btn-info">
                            <a style="color: white;" href="{{route('edituseraccess',$useraccess->id)}}">{{ __('admin/userAccessPage.userAccessPage.textEditButton') }}</a>
                        </button>
                    </td>


                @php
                    $x++;
                @endphp
                </tr>
                @endforeach

            </tbody>
        </table>
        @endif

    </div>










@endsection
