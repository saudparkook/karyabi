
    <form  id="evidence_form" action="{{ route('editCV') }}" method="POST">
        @csrf
        <input type="text" name="partofpage" value="evidence" hidden>
        @method('put')

        <div class="row"  id="evidence_div">

            <div class="card p-2 mx-auto" style="background-color: transparent" id="evidence_div_0" hidden>
                    <div class="row">
                        <div class="col-sm-5">
                            <select name="evidence_cat[]" class="form-control text-center">
                                <option value="0">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" placeholder="{{__('evidence.placeholder_dec')}}" name="evidence_dec[]">

                        </div>


                        <div class="col-sm-1 text-center">
                            <button class="btn btn-danger my-auto align-middle"
                         type="button" >حذف</button>
                        </div>
                    </div>

            </div>

            @foreach ($userInfo->getEvidence as $item)

                <div class="card p-2 mx-auto" style="background-color: transparent" id="{{$item->id}}">

                        <div class="row">
                            <div class="col-sm-5">
                                <select id="evidence_cat_{{$item->id}}" name="evidence_cat[]" class="form-control text-center">
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
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="evidence_dec[]" value="{{$item->description}}"
                            placeholder="{{__('evidence.placeholder_dec')}}" id="evidence_dec_{{$item->id}}">
                            </div>

                            <div class="col-sm-1 text-center">
                                <button class="btn btn-danger my-auto align-middle"
                             type="button" onclick="delete_fun_evidence('{{$item->id}}')">حذف</button>
                            </div>
                        </div>

                </div>

            @endforeach


            <div class="col-lg-12 text-center p-2 mx-auto" id="evidence_div_1">
                    <img src="{{url('images/add.png')}}" width="55" onclick="add_port_evidence()" >
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

        function add_port_evidence(){


            let evidenceDIV=document.getElementById('evidence_div_0');
            let evidenceDIV2=evidenceDIV.cloneNode(true);

            let divID=Math.floor(Math.random() * 10000);
            evidenceDIV2.setAttribute('id',divID);
            evidenceDIV2.hidden=false;

            evidence_div.insertBefore(evidenceDIV2,evidence_div_1);
            // console.log(evidenceDIV2.childNodes[1].childNodes[5]);
            let children=evidenceDIV2.childNodes[1].childNodes[5].childNodes[1];
            children.setAttribute('onclick','delete_fun_evidence('+divID+')');



        }
            function delete_fun_evidence(num){
                let element=document.getElementById(num).remove();

            }
        </script>
























