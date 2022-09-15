@php
    $num=1;
@endphp
<div class="row">
    <form id="media_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="media" hidden>
    @method('put')

    <div class="row" id="media_div">
        <div class="col-sm-6 p-2 mx-auto border border-1" id="media_div_0" hidden>
            <div class="input-group">
                <div class="col-sm-5">
                    <select id="media_company_0" class="form-control text-center">
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <input class="form-control text-center" type="text" id="media_value_0">
                </div>
            </div>
        </div>

        @foreach ($userInfo->getmedia as $item)
            @php
                $num=($item->id)+1;
            @endphp
            <div class="col-sm-6 p-2 mx-auto"  id="media_div_{{$item->id}}">
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
                        <input class="form-control text-center" type="text"  name="media_value[]"
                        id="media_value_{{$item->id}}" value="{{$item->value}}">
                    </div>
                     <div class="col-sm-2 text-center">
                        <button class="btn btn-danger my-auto align-middle"
                     type="button" onclick="delete_fun_media('{{$item->id}}')">حذف</button>
                     </div>

                </div>
            </div>
        @endforeach


        <div class="col-sm-6 text-center p-2 mx-auto" id="media_div_{{$num}}">
            <img src="{{url('images/add.png')}}" width="55" onclick="add_port_media('{{$num}}')" >
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

    function add_port_media(num){
        let add_div=document.getElementById('media_div_'+(num));
        let new_add_div=add_div.cloneNode(true);

        let selectitem=media_company_0.cloneNode(true);
        selectitem.setAttribute("id", "media_company_"+(num+1));
        selectitem.setAttribute("name", "media_company[]");
        let col_selectitem=document.createElement('div');
        col_selectitem.setAttribute("class", "col-sm-5");
        col_selectitem.appendChild(selectitem);

        let value_m=media_value_0.cloneNode(true);
        value_m.setAttribute("id", "media_value_"+(num+1));
        value_m.setAttribute("name", "media_value[]");
        value_m.value='';
        let col_value=document.createElement('div');
        col_value.setAttribute("class", "col-sm-5");
        col_value.appendChild(value_m);
        //delete button
        let btn=document.createElement('button');
        btn.setAttribute("class", "btn btn-danger my-auto align-middle");
        btn.setAttribute("type", "button");
        btn.setAttribute('onclick','delete_fun_media('+num+')');
        btn.innerHTML="حذف";
        let col_btn=document.createElement('div');
        col_btn.setAttribute("class", "col-sm-2");
        col_btn.appendChild(btn);
        // input-group
        let div_group=document.createElement('div');
        div_group.setAttribute("class", "row");
        div_group.appendChild(col_selectitem);
        div_group.appendChild(col_value);
        div_group.appendChild(col_btn);

        new_add_div.setAttribute("id", "media_div_"+(num+1));
        add_div.innerHTML="";
        add_div.appendChild(div_group);

        let IMG='{{url('images/add.png')}}';
        let im=document.createElement('img');
        im.setAttribute("width", "55");
        im.setAttribute("src", IMG);
        im.setAttribute("onclick", "add_port_media("+(num+1)+")");

        new_add_div.innerHTML="";
        new_add_div.appendChild(im);
        media_div.appendChild(new_add_div);
    }
        function delete_fun_media(num){
            let element=document.getElementById('media_div_'+num).remove();

        }
    </script>

</div>
