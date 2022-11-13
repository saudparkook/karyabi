@extends('headerAndFooter')
@section('body')
        {{-- منو انتخاب های پروفایل و تکمیل رزومه --}}
        <ul class="nav pt-4 mb-3 mx-auto text-center" id="pills-tab" >
            @foreach (__('text.CVitems') as $key=>$item)
            <div class="nav-item mx-auto" id="pillsDiv{{$key}}" >
                <button onclick="changeCVpage('pills-{{$key}}','{{$key}}')"
                 type="button" id="btnSelect{{$key}}"
                @if(session("partofpage"))
                    @if (session("partofpage")!=$key)
                    class="btn btn-primary"
                    @else
                    class="btn btn-success"
                    @endif
                @else
                    @if ($item[1]!=1)
                    class="btn btn-primary"
                    @else
                    class="btn btn-success"
                    @endif
                @endif
                >{{$item[0]}}</button>
            </div>
            @endforeach
        </ul>
        {{-- پایان بخش منو انتخاب ها --}}
        {{-- بخش مربوط به ویرایش پروفایل  ورزومه --}}
        <div class="row text-center mx-auto" id="tabContent">

                @foreach (__('text.CVitems') as $key=>$item)
                <div class="row text-center mx-auto"
                @if(session("partofpage"))
                    @if (session("partofpage")!=$key)
                    hidden
                    @endif
                @else
                    @if ($item[1]!=1)
                    hidden
                    @endif
                @endif
                    id="pills-{{$key}}">
                  @include('CV.'.$key)
               </div>
                @endforeach

        </div>
    <script>
        function changeCVpage(divid,btnid){
            // alert(divid);
            Did=document.getElementById("tabContent").childNodes;
            let text = "";
            for (let i = 0; i < Did.length; i++) {
                if(Did[i].id===divid){
                    Did[i].hidden=false;
                }else{
                    Did[i].hidden=true;
                }

            }
            // btn
            Bid=document.getElementById("pills-tab").children;
            console.log((Bid.length));

            for (let i = 0; i < Bid.length; i++) {
                // if(Bid[i].childNodes[1].id===btnid){
                //     Bid[i].childNodes[1].hidden=false;
                // }else{
                //     Bid[i].childNodes[1].hidden=true;
                // }
                $item=(Bid[i].id).replace('pillsDiv','');
                if($item===btnid){
                    document.getElementById('btnSelect'+btnid).className='btn btn-success';
                }else{
                    document.getElementById('btnSelect'+$item).className='btn btn-primary';
                }

            }
        }
    </script>
@endsection
