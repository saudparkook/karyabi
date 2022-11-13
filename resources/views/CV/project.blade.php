


<div class="row">
    <form id="project_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="project" hidden>
    @method('put')

    <div class="col-lg" id="project_div">
        <div class="row p-2 mx-auto" id="project_div_0" hidden>
            <div class="col-sm-3 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_title')}}
                </small>
                <input class="form-control mb-1" name="project_title[]" type="text">
            </div>
            <div class="col-sm-3 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_position')}}
                </small>
                <input class="form-control mb-1" name="project_position[]" type="text">
            </div>

            <div class="col-sm-3 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_date')}}
                </small>
                <select class="form-control text-center" name="project_date[]">

                    @for($i=1357;$i<1500;$i++)
                    <option
                    value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="input-group  mt-3">
                <input class="form-control mb-1" type="text" placeholder="{{__('project.span_dec')}}" name="project_dec[]">

            </div>
            <div class="mt-3 text-center mx-auto">
                <button class="btn btn-danger mx-auto" >حذف</button>
            </div>
        </div>


        {{-- get old item --}}

        @foreach ($userInfo->getProject as $item)
        <div class="row p-2 mx-auto" id="{{$item->id}}">
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_title')}}
                </small>
                <input class="form-control mb-1" value="{{$item->title}}" name="project_title[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_position')}}
                </small>
                <input class="form-control mb-1" value="{{$item->position}}" name="project_position[]" type="text">
            </div>
            <div class="col-sm-2 mt-3 mx-auto">
                <small class="form-text text-muted">
                    {{__('project.span_date')}}
                </small>
                <select class="form-control text-center" name="project_date[]">

                    @for($i=1357;$i<1500;$i++)
                    <option
                        @if ($item->date==$i)
                            selected
                        @endif
                    value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="input-group  mt-3">
                <input class="form-control mb-1" type="text" placeholder="{{__('project.span_dec')}}" value="{{$item->description}}" name="project_dec[]">

            </div>
            <div class="mt-3 text-center mx-auto">
                <button class="btn btn-danger mx-auto" onclick="delete_fun_project('{{$item->id}}')" >حذف</button>
            </div>
        </div>
        @endforeach
{{--end get old item --}}



        <div class="row text-center p-2 mx-auto" id="project_div_1">
            <div class=" text-center mx-auto">
                <img src="{{url('images/add.png')}}" width="55" onclick="add_port_project(1)" >
            </div>
        </div>


    </div>
    <div class="row">
        <div class="mx-auto text-center">
            <button class="btn btn-primary mt-3" type="button"
            onclick="refhref('project_form','{{__('project.confrim')}}')"
            >ذخیره سازی</button>
        </div>
    </div>
</form>
<script>

    function add_port_project(num){

        let projectDIV=document.getElementById('project_div_0');
        let projectDIV2=projectDIV.cloneNode(true);
        let divID=Math.floor(Math.random() * 10000);
        projectDIV2.setAttribute('id',divID);
        projectDIV2.hidden=false;
        project_div.insertBefore(projectDIV2,project_div_1);
        let children=projectDIV2.childNodes[9].childNodes[1];
        children.setAttribute('onclick','delete_fun_project('+divID+')');
        console.log(children);

    }
        function delete_fun_project(num){
            let element=document.getElementById(num).remove();

        }
    </script>

</div>
