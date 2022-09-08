<form id="evidence_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="evidence" hidden>
    @method('put')

    <div class="row" id="evi_div">
        <div class="col-sm-6 p-2 mx-auto" id="evi_div_0" hidden>
            <div class="input-group">
                <select name="evi_cat[]" id="evi_cat_0" class="form-control text-center">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
                <input class="form-control" type="text" placeholder="شرح مدرک گرفته شده" name="evi_dec[]" id="evi_dec_0">
            </div>
        </div>
        @if (session("request"))
            {{session("request")->evi_cat[0]}}
        @endif
        <div class="col-sm-6 text-center p-2 mx-auto" id="evi_div_1">
            <img src="{{url('images/add.png')}}" width="55" onclick="add_port(1)" >
        </div>


    </div>
    <div class="row">
        <div class="mx-auto text-center">
            <button class="btn btn-primary mt-3" type="button"
            onclick="refhref('evidence_form','{{__('evidence.confrim')}}')"
            >ذخیره سازی</button>
        </div>
    </div>
</form>
<script>

    function add_port(num){
        let add_div=document.getElementById('evi_div_'+(num));
        let new_add_div=add_div.cloneNode(true);

        let selectitem=evi_cat_0.cloneNode(true);
        selectitem.setAttribute("id", "evi_cat_"+(num+1));
        let inputitem=evi_dec_0.cloneNode(true);
        inputitem.setAttribute("id", "evi_dec_"+(num+1));
        inputitem.value="";
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
        div_group.appendChild(btn);

        new_add_div.setAttribute("id", "evi_div_"+(num+1));
        add_div.innerHTML="";
        add_div.appendChild(div_group);

        let IMG='{{url('images/add.png')}}';
        let im=document.createElement('img');
        im.setAttribute("width", "55");
        im.setAttribute("src", IMG);
        im.setAttribute("onclick", "add_port("+(num+1)+")");

        new_add_div.innerHTML="";
        new_add_div.appendChild(im);
        evi_div.appendChild(new_add_div);
        }
        function delete_fun(num){
            let element=document.getElementById('evi_div_'+num).remove();

        }
</script>
