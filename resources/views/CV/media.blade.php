
    <form  id="media_form" action="{{ route('editCV') }}" method="POST">
        @csrf
        <input type="text" name="partofpage" value="media" hidden>
        @method('put')

        <div class="row"  id="media_div">

            <div class="card p-2 mx-auto" style="background-color: transparent" id="media_div_0" hidden>
                    <div class="row">
                        <div class="col-sm-5">
                            <select name="media_company[]" class="form-control text-center">
                                <option value="0">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" placeholder="{{__('media.placeholder_value')}}" name="media_value[]">

                        </div>


                        <div class="col-sm-1 text-center">
                            <button class="btn btn-danger my-auto align-middle"
                         type="button" >حذف</button>
                        </div>
                    </div>

            </div>

            @foreach ($userInfo->getmedia as $item)

                <div class="card p-2 mx-auto" style="background-color: transparent" id="{{$item->id}}">

                        <div class="row">
                            <div class="col-sm-5">
                                <select id="media_company_{{$item->id}}" name="media_company[]" class="form-control text-center">
                                    <option value="0"
                                    @if ($item->company==0)
                                    selected
                                    @endif
                                    >1</option>
                                    <option value="1"
                                    @if ($item->company==1)
                                    selected
                                    @endif
                                    >2</option>
                                    <option value="2"
                                    @if ($item->company==2)
                                    selected
                                    @endif
                                    >3</option>
                                    <option value="3"
                                    @if ($item->company==3)
                                    selected
                                    @endif
                                    >4</option>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="media_value[]" value="{{$item->value}}"
                            placeholder="{{__('media.placeholder_value')}}" id="media_value_{{$item->id}}">
                            </div>

                            <div class="col-sm-1 text-center">
                                <button class="btn btn-danger my-auto align-middle"
                             type="button" onclick="delete_fun_media('{{$item->id}}')">حذف</button>
                            </div>
                        </div>

                </div>

            @endforeach


            <div class="col-lg-12 text-center p-2 mx-auto" id="media_div_1">
                    <img src="{{url('images/add.png')}}" width="55" onclick="add_port_media()" >
            </div>


        </div>
        <div class="row">
            <div class="mx-auto text-center">
                <button class="btn btn-primary mt-3" type="button"
                onclick="refhref('media_form','{{__('media.confrim')}}')"
                >ذخیره سازی</button>
            </div>
        </div>
    </form>
    <script>

        function add_port_media(){


            let mediaDIV=document.getElementById('media_div_0');
            let mediaDIV2=mediaDIV.cloneNode(true);
            let divID=Math.floor(Math.random() * 10000);
            mediaDIV2.setAttribute('id',divID);
            mediaDIV2.hidden=false;

            media_div.insertBefore(mediaDIV2,media_div_1);
            // console.log(mediaDIV2.childNodes[1].childNodes[5]);
            let children=mediaDIV2.childNodes[1].childNodes[5].childNodes[1];
            children.setAttribute('onclick','delete_fun_media('+divID+')');

        }
            function delete_fun_media(num){
                let element=document.getElementById(num).remove();

            }
        </script>










