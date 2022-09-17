@php
    $num=1;
@endphp
<div class="row">
    <form id="language_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="language" hidden>
    @method('put')

    <div class="row" id="language_div">
        <div class="col-sm-6 p-2 mx-auto border border-1" id="language_div_0" hidden>
            <div class="input-group">
                <div class="col-sm-5">
                    <select id="language_title_0" class="form-control text-center">
                        @foreach (__('language.list') as $KEY=>$LAN)
                        <option value="{{$KEY}}">{{$LAN}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-sm-5">
                    <input class="m-1 w-12" style="width: 100%;" type="range" min="0" max="100" id="language_Score_0">
                </div>
            </div>
        </div>

        @foreach ($userInfo->getlanguage as $item)
            @php
                $num=($item->id)+1;
            @endphp
            <div class="col-sm-6 p-2 mx-auto"  id="language_div_{{$item->id}}">
                <div class="row">
                    <div class="col-sm-5">
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
                    <div class="col-sm-5">
                        <input class="m-1 w-12" style="width: 100%;" type="range" min="0" max="100" name="language_Score[]"
                        id="language_Score_{{$item->id}}" value="{{$item->Score}}">
                    </div>
                     <div class="col-sm-2 text-center">
                        <button class="btn btn-danger my-auto align-middle"
                     type="button" onclick="delete_fun_language('{{$item->id}}')">حذف</button>
                     </div>

                </div>
            </div>
        @endforeach


        <div class="col-sm-6 text-center p-2 mx-auto" id="language_div_{{$num}}">
            <img src="{{url('images/add.png')}}" width="55" onclick="add_port_language('{{$num}}')" >
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

    function add_port_language(num){
        let add_div=document.getElementById('language_div_'+(num));
        let new_add_div=add_div.cloneNode(true);

        let selectitem=language_title_0.cloneNode(true);
        selectitem.setAttribute("id", "language_title_"+(num+1));
        selectitem.setAttribute("name", "language_title[]");
        let col_selectitem=document.createElement('div');
        col_selectitem.setAttribute("class", "col-sm-5");
        col_selectitem.appendChild(selectitem);

        let Score=language_Score_0.cloneNode(true);
        Score.setAttribute("id", "language_Score_"+(num+1));
        Score.setAttribute("name", "language_Score[]");
        let col_Score=document.createElement('div');
        col_Score.setAttribute("class", "col-sm-5");
        col_Score.appendChild(Score);
        //delete button
        let btn=document.createElement('button');
        btn.setAttribute("class", "btn btn-danger my-auto align-middle");
        btn.setAttribute("type", "button");
        btn.setAttribute('onclick','delete_fun_language('+num+')');
        btn.innerHTML="حذف";
        let col_btn=document.createElement('div');
        col_btn.setAttribute("class", "col-sm-2");
        col_btn.appendChild(btn);
        // input-group
        let div_group=document.createElement('div');
        div_group.setAttribute("class", "row");
        div_group.appendChild(col_selectitem);
        div_group.appendChild(col_Score);
        div_group.appendChild(col_btn);

        new_add_div.setAttribute("id", "language_div_"+(num+1));
        add_div.innerHTML="";
        add_div.appendChild(div_group);

        let IMG='{{url('images/add.png')}}';
        let im=document.createElement('img');
        im.setAttribute("width", "55");
        im.setAttribute("src", IMG);
        im.setAttribute("onclick", "add_port_language("+(num+1)+")");

        new_add_div.innerHTML="";
        new_add_div.appendChild(im);
        language_div.appendChild(new_add_div);
    }
        function delete_fun_language(num){
            let element=document.getElementById('language_div_'+num).remove();

        }
    </script>

</div>
