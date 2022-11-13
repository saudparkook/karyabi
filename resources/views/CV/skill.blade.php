
    <form  id="skill_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="skill" hidden>
    @method('put')

    <div class="row"  id="skill_div">

        <div class="card p-2 mx-auto" style="background-color: transparent" id="skill_div_0" hidden>
                <div class="row">
                    <div class="col-sm-4">
                        <select name="skill_cat[]" class="form-control text-center">
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="{{__('skill.placeholder_dec')}}" name="skill_dec[]">

                    </div>
                    <div class="col-sm-3 my-auto">
                        <input class="m-1 my-auto" type="range" min="0" max="100" style="width: 100%;" name="skill_Score[]">
                    </div>

                    <div class="col-sm-1 text-center">
                        <button class="btn btn-danger my-auto align-middle"
                     type="button" >حذف</button>
                    </div>
                </div>

        </div>

        @foreach ($userInfo->getSkill as $item)

            <div class="card p-2 mx-auto" style="background-color: transparent" id="{{$item->id}}">

                    <div class="row">
                        <div class="col-sm-4">
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
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="skill_dec[]" value="{{$item->description}}"
                        placeholder="{{__('skill.placeholder_dec')}}" id="skill_dec_{{$item->id}}">
                        </div>
                        <div class="col-sm-3 my-auto">
                            <input class=" my-auto" type="range" min="0" max="100" name="skill_Score[]"
                         id="skill_Score_{{$item->id}}" style="width: 100%;" value="{{$item->Score}}">
                        </div>
                        <div class="col-sm-1 text-center">
                            <button class="btn btn-danger my-auto align-middle"
                         type="button" onclick="delete_fun_skill('{{$item->id}}')">حذف</button>
                        </div>
                    </div>

            </div>

        @endforeach


        <div class="col-lg-12 text-center p-2 mx-auto" id="skill_div_1">
                <img src="{{url('images/add.png')}}" width="55" onclick="add_port_skill()" >
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

    function add_port_skill(){


        let skillDIV=document.getElementById('skill_div_0');
        let skillDIV2=skillDIV.cloneNode(true);
        let divID=Math.floor(Math.random() * 10000);
        skillDIV2.setAttribute('id',divID);
        skillDIV2.hidden=false;

        skill_div.insertBefore(skillDIV2,skill_div_1);
        // console.log(skillDIV2.childNodes[1].childNodes[7]);
        let children=skillDIV2.childNodes[1].childNodes[7].childNodes[1];
        children.setAttribute('onclick','delete_fun_skill('+divID+')');






    }
        function delete_fun_skill(num){
            let element=document.getElementById(num).remove();

        }
    </script>

