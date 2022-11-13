


<div class="row">
    <form id="experience_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="experience" hidden>
    @method('put')

    <div class="col-lg" id="exp_div">
        <div class="row p-2 mx-auto" id="exp_div_0" hidden>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_title')}}
                </small>
                <input class="form-control mb-1" name="exp_title[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_company')}}
                </small>
                <input class="form-control mb-1" name="exp_company[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_start_date')}}
                </small>
                <select class="form-control text-center" name="exp_start_date[]">
                    @for($i=1357;$i<1500;$i++)
                        <option
                        value="{{$i}}">{{$i}}</option>
                    @endfor

                </select>
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_end_date')}}
                </small>
                <select class="form-control text-center" name="exp_end_date[]">
                    @foreach(__('experience.end_date') as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                    @for($i=1357;$i<1500;$i++)
                    <option
                    value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
                <input class="form-control mb-1" type="text" placeholder="{{__('experience.span_dec')}}" name="exp_dec[]">
            <div class="col-lg mt-3 text-center mx-auto">
                <button class="btn btn-danger mx-auto" >حذف</button>
            </div>
            </div>


        {{-- get old item --}}

        @foreach ($userInfo->getExperience as $item)
        <div class="row p-2 mx-auto" id="{{$item->id}}">
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_title')}}
                </small>
                <input class="form-control mb-1" value="{{$item->title}}" name="exp_title[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_company')}}
                </small>
                <input class="form-control mb-1" value="{{$item->company}}" name="exp_company[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_start_date')}}
                </small>
                <select class="form-control text-center" name="exp_start_date[]">
                    @for($i=1357;$i<1500;$i++)
                        <option
                        @if ($item->start_date==$i)
                            selected
                        @endif
                        value="{{$i}}">{{$i}}</option>
                    @endfor

                </select>
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('experience.span_end_date')}}
                </small>
                <select class="form-control text-center" name="exp_end_date[]">
                    @foreach(__('experience.end_date') as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                    @for($i=1357;$i<1500;$i++)
                    <option
                        @if ($item->end_date==$i)
                            selected
                        @endif
                    value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
                <input class="form-control mb-1" type="text" placeholder="{{__('experience.span_dec')}}" value="{{$item->description}}" name="exp_dec[]">
            <div class="col-lg mt-3 text-center mx-auto">
                <button class="btn btn-danger mx-auto" onclick="delete_fun_experience('{{$item->id}}')" >حذف</button>
            </div>
        </div>
        <hr>
        @endforeach
{{--end get old item --}}



        <div class="row text-center p-2 mx-auto" id="exp_div_1">
            <div class=" text-center mx-auto">
                <img src="{{url('images/add.png')}}" width="70" onclick="add_port_experience()" >
            </div>
        </div>


    </div>
    <div class="row">
        <div class="mx-auto text-center">
            <button class="btn btn-primary mt-3" type="button"
            onclick="refhref('experience_form','{{__('experience.confrim')}}')"
            >ذخیره سازی</button>
        </div>
    </div>
</form>
<script>

    function add_port_experience(){

        let expDIV=document.getElementById('exp_div_0');
        let expDIV2=expDIV.cloneNode(true);
        let divID=Math.floor(Math.random() * 10000);
        expDIV2.setAttribute('id',divID);
        expDIV2.hidden=false;
        let hritem=document.createElement('hr');

        exp_div.insertBefore(expDIV2,exp_div_1);
        exp_div.insertBefore(hritem,exp_div_1);
        let children=expDIV2.childNodes[11].childNodes[1];
        children.setAttribute('onclick','delete_fun_experience('+divID+')');

    }
        function delete_fun_experience(num){
            let element=document.getElementById(num).remove();

        }
    </script>

</div>
