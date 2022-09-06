@extends('headerAndFooter')
@section('body')
    <div class="container">
        {{-- منو انتخاب های پروفایل و تکمیل رزومه --}}
        <ul class="nav nav-pills pt-4 mb-3 mx-auto text-center" id="pills-tab" role="tablist">
            @foreach (__('text.CVitems') as $key=>$item)
            <li class="nav-item mx-auto " role="presentation">
                <button
                 id="pills-{{$key}}-tab" data-bs-toggle="pill"
                data-bs-target="#pills-{{$key}}" type="button" role="tab" aria-controls="pills-{{$key}}"
                @if ($item[1]==1)
                aria-selected="true"
                class="nav-link mx-auto active"
                @else
                aria-selected="false"
                class="nav-link mx-auto "
                @endif
                >{{$item[0]}}</button>
              </li>
            @endforeach
        </ul>
        {{-- پایان بخش منو انتخاب ها --}}
        {{-- بخش مربوط به ویرایش پروفایل  ورزومه --}}
        <div class="row">
            <div class="tab-content" id="pills-tabContent">

                @foreach (__('text.CVitems') as $key=>$item)
                <div
                @if ($item[1]==1)
                class="tab-pane fade show active"
                @else
                class="tab-pane fade"

                @endif
                 id="pills-{{$key}}" role="tabpanel"
                aria-labelledby="pills-{{$key}}-tab">
                  @include('CV.'.$key)
               </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
