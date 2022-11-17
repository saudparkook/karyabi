@extends('headerAndFooter')
@section('body')



<div class="row col-sm-6 mx-auto mt-5 p-5" style="text-align: center;">
    {{-- <form action="">
        <div class="input-group md-form form-sm form-2 pl-0">
            <input name="search"class="form-control" type="text" placeholder="{{ __('admin/users.userspage.placeholderSearch') }}" aria-label="Search" value="{{ @$request->search }}">
            <select name="useraccess" class="form-control" >
                <option value="0">{{ __('admin/users.userspage.selectFirstOpsion') }}</option>
                @foreach ($useraccess as $item)
                <option value="{{ $item->id }}"
                @if($request->useraccess==$item->id )
                selected
                @endif
                >{{ $item->title }}</option>

                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">{{ __('message.searchButton') }}</button>
        </div>
    </form> --}}

</div>

<div class="row mx-auto" >
    <div class=" col-sm-10 mx-auto">

        <table style="text-align: center;" class="table table-striped">
            <thead class="thead-dark">
                <tr style="text-align: center;">
                   @foreach (__('admin/users.userspage.table') as $key=>$item)
                   <th style="text-align: center;" scope="col">{{ $item}}</th>
                   @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                $pc=10;
                    $x=($users->currentPage()*$pc)-($pc-1);
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$user->username}}</td>
                    <td>
                        <img class="mx-auto my-auto border border-dark m-1 rounded"
                        @if ($user->image)
                        src="{{ url('files/profile/'.$user->image->path) }}"
                        @else
                        src="{{ url('images/profile.jpg') }}"
                        @endif
                        alt="profile" width="50" height="50">

                    </td>
                    <td>{{$user->name}}</td>
                    <td>
                       {{-- {{ $user->userAccess->title }} --}}

                    </td>

                    <td>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                @if ($user->active==0)

                                <label class="btn btn-secondary text-white"
                                style="background-color: #7c7c7c;color: white;">
                                    <a
                                    onclick="refhref('{{route('activeuser',$user->id)}}','{{ __('admin/users.userspage.confrimActiveUserButtonText') }}')"
                                    >
                                    {{ __('admin/users.userspage.ActiveUserButtonText') }}
                                    </a>
                                </label>
                                <label class="btn btn-danger text-white" >
                                    <a >
                                        {{ __('admin/users.userspage.DisActiveUserButtonText') }}
                                    </a>
                                </label>

                                @else

                                <label class="btn btn-success ">
                                    <a >
                                        {{ __('admin/users.userspage.ActiveUserButtonText') }}
                                    </a>
                                </label>
                                <label class="btn btn-secondary text-white"
                                style="background-color: #7c7c7c;color: white;"
                                >
                                    <a
                                    onclick="refhref('{{route('activeuser',$user->id)}}','{{ __('admin/users.userspage.confrimDisActiveUserButtonText') }}')"
                                    >
                                    {{ __('admin/users.userspage.DisActiveUserButtonText') }}
                                    </a>
                                </label>
                                @endif





                        </div>

                        <button class="btn btn-info">
                            <a style="color: white;" href="{{route('editprofile',$user->id)}}">{{ __('message.textUserEditButton') }}</a>
                        </button>
                </td>


                @php
                    $x++;
                @endphp
                </tr>
                @endforeach

            </tbody>
        </table>


      <div class="row mx-auto" >
        <div class="col-lg mx-auto">
            @if ($users->previousPageUrl()!='')
                <a class="btn btn-primary" href="{{ $users->previousPageUrl() }}">قبلی</a>
            @endif
            @if ($users->currentPage()-1>=1)
            <a class="btn btn-primary" href="{{ $users->previousPageUrl() }}">{{ $users->currentPage()-1 }}</a>
            @endif
            <a class="btn btn-white" >صفحه : {{ $users->currentPage() }}</a>

            @if (($users->currentPage()+1)<=($users->total()/$pc))
            <a class="btn btn-primary" href="{{ $users->nextPageUrl() }}">{{ $users->currentPage()+1 }}</a>
            @endif

            @if ($users->nextPageUrl()!='')
            <a class="btn btn-primary" href="{{ $users->nextPageUrl() }}">بعدی</a>
            @endif

        </div>
        <div class="col-lg mx-auto">
            تمام  آیتم ها  : {{ $users->total()  }}

        </div>
    </div>



</div>



</div>


@endsection

















