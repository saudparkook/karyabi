    <form  id="language_form" action="{{ route('editCV') }}" method="POST">
        @csrf
        <input type="text" name="partofpage" value="language" hidden>
        @method('put')

        <div class="row"  id="language_div">

            <div class="card p-2 mx-auto" style="background-color: transparent" id="language_div_0" hidden>
                    <div class="row">
                        <div class="col-sm-4">
                            <select name="language_title[]" class="form-control text-center">
                                @foreach (__('language.list') as $KEY=>$LAN)
                        <option value="{{$KEY}}">{{$LAN}}</option>
                        @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 my-auto">
                            <input class="m-1 my-auto" type="range" min="0" max="100" style="width: 100%;" name="language_Score[]">
                        </div>

                        <div class="col-sm-1 text-center">
                            <button class="btn btn-danger my-auto align-middle"
                         type="button" >حذف</button>
                        </div>
                    </div>

            </div>

            @foreach ($userInfo->getlanguage as $item)

                <div class="card p-2 mx-auto" style="background-color: transparent" id="{{$item->id}}">

                        <div class="row">
                            <div class="col-sm-4">
                                <select id="language_title_{{$item->id}}" name="language_title[]" class="form-control text-center">
                                    @foreach (__('language.list') as $KEY=>$LAN)
                                    <option value="{{$KEY}}"
                                    @if ($item->title==$KEY)
                                    selected
                                    @endif
                                    >{{$LAN}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-6 my-auto">
                                <input class="my-auto" type="range" min="0" max="100" name="language_Score[]"
                             id="language_Score_{{$item->id}}" style="width: 100%;" value="{{$item->Score}}">
                            </div>
                            <div class="col-sm-1 text-center">
                                <button class="btn btn-danger my-auto align-middle"
                             type="button" onclick="delete_fun_language('{{$item->id}}')">حذف</button>
                            </div>
                        </div>

                </div>

            @endforeach


            <div class="col-lg-12 text-center p-2 mx-auto" id="language_div_1">
                    <img src="{{url('images/add.png')}}" width="55" onclick="add_port_language()" >
            </div>


        </div>
        <div class="row">
            <div class="mx-auto text-center">
                <button class="btn btn-primary mt-3" type="button"
                onclick="refhref('language_form','{{__('language.confrim')}}')"
                >ذخیره سازی</button>
            </div>
        </div>
    </form>
    <script>

        function add_port_language(){


            let languageDIV=document.getElementById('language_div_0');
            let languageDIV2=languageDIV.cloneNode(true);
            let divID=Math.floor(Math.random() * 10000);
            languageDIV2.setAttribute('id',divID);
            languageDIV2.hidden=false;

            language_div.insertBefore(languageDIV2,language_div_1);
            // console.log(languageDIV2.childNodes[1].childNodes[5]);
            let children=languageDIV2.childNodes[1].childNodes[5].childNodes[1];
            children.setAttribute('onclick','delete_fun_language('+divID+')');






        }
            function delete_fun_language(num){
                let element=document.getElementById(num).remove();

            }
        </script>











