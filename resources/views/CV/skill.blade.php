@php
    $num=1;
@endphp
<div class="row">
    <form id="skill_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="skill" hidden>
    @method('put')

    <div class="row" id="skill_div">
        <div class="col-sm-6 p-2 mx-auto" id="skill_div_0" hidden>
            <div class="input-group">
                <select id="skill_cat_0" class="form-control text-center">
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                </select>
                <input class="form-control" type="text" placeholder="{{__('skill.placeholder_dec')}}" id="skill_dec_0">
                <input class="m-1" type="range" min="0" max="100" id="skill_Score_0">
            </div>
        </div>

        @foreach ($userInfo->getSkill as $item)
            @php
                $num=($item->id)+1;
            @endphp
            <div class="col-sm-6 p-2 mx-auto"  id="skill_div_{{$item->id}}">
                <div class="input-group">
                    <select id="skill_cat_{{$item->id}}" name="skill_cat[]" class="form-control text-center">
                        <option value="0"
                        @if ($item->catgory==0)
                        selected
                        @endif
                        >1</option>
                        <option value="1"
                        @if ($item->catgory==1)
                        selected
                        @endif
                        >2</option>
                        <option value="2"
                        @if ($item->catgory==2)
                        selected
                        @endif
                        >3</option>
                        <option value="3"
                        @if ($item->catgory==3)
                        selected
                        @endif
                        >4</option>
                    </select>
                    <input class="form-control" type="text" name="skill_dec[]" value="{{$item->description}}"
                    placeholder="{{__('skill.placeholder_dec')}}" id="skill_dec_{{$item->id}}">
                    <input class="m-1" type="range" min="0" max="100" name="skill_Score[]"
                     id="skill_Score_{{$item->id}}" value="{{$item->Score}}">
                     <button class="btn btn-danger my-auto align-middle"
                     type="button" onclick="delete_fun('{{$item->id}}')">حذف</button>

                </div>
            </div>
        @endforeach


        <div class="col-sm-6 text-center p-2 mx-auto" id="skill_div_{{$num}}">
            <img src="{{url('images/add.png')}}" width="55" onclick="add_port('{{$num}}')" >
        </div>


    </div>
    <div class="row">
        <div class="mx-auto text-center">
            <button class="btn btn-primary mt-3" type="button"
            onclick="refhref('skill_form','{{__('skill.confrim')}}')"
            >ذخیره سازی</button>
        </div>
    </div>
</form>
<script>

    function add_port(num){
        let add_div=document.getElementById('skill_div_'+(num));
        let new_add_div=add_div.cloneNode(true);

        let selectitem=skill_cat_0.cloneNode(true);
        selectitem.setAttribute("id", "skill_cat_"+(num+1));
        selectitem.setAttribute("name", "skill_cat[]");
        let inputitem=skill_dec_0.cloneNode(true);
        inputitem.setAttribute("id", "skill_dec_"+(num+1));
        inputitem.setAttribute("name", "skill_dec[]");
        inputitem.value="";
        let Score=skill_Score_0.cloneNode(true);
        Score.setAttribute("id", "skill_Score_"+(num+1));
        Score.setAttribute("name", "skill_Score[]");
        //delete button
        let btn=document.createElement('button');
        btn.setAttribute("class", "btn btn-danger my-auto align-middle");
        btn.setAttribute("type", "button");
        btn.setAttribute('onclick','delete_fun('+num+')');
        btn.innerHTML="حذف";
        // input-group
        let div_group=document.createElement('div');
        div_group.setAttribute("class", "input-group");
        div_group.appendChild(selectitem);
        div_group.appendChild(inputitem);
        div_group.appendChild(Score);
        div_group.appendChild(btn);

        new_add_div.setAttribute("id", "skill_div_"+(num+1));
        add_div.innerHTML="";
        add_div.appendChild(div_group);

        let IMG='{{url('images/add.png')}}';
        let im=document.createElement('img');
        im.setAttribute("width", "55");
        im.setAttribute("src", IMG);
        im.setAttribute("onclick", "add_port("+(num+1)+")");

        new_add_div.innerHTML="";
        new_add_div.appendChild(im);
        skill_div.appendChild(new_add_div);
    }
        function delete_fun(num){
            let element=document.getElementById('skill_div_'+num).remove();

        }
    </script>

</div>
