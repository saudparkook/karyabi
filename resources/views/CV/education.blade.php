 <form id="education_form" action="{{ route('editCV') }}" method="POST">
    @csrf
    <input type="text" name="partofpage" value="education" hidden>
    @method('put')
    <div class="row text-center">
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">
                {{__('education.span_edu')}}
            </small>
            <select class="form-control text-center" name="edu" id="edu">
                    @foreach(__('education.edu') as $key=>$value)
                        <option
                        @if ($userInfo->getEducation->edu==$key)
                        selected
                        @endif
                         value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">{{__('education.span_uni')}}
            </small>
            <select class="form-control text-center" name="uni" id="uni">
                    @foreach(__('education.uni') as $key=>$value)
                        <option
                        @if ($userInfo->getEducation->uni==$key)
                        selected
                        @endif
                        value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">{{__('education.span_avg')}}
            </small>

            <input class="form-control text-center" value="{{$userInfo->getEducation->avg}}"
                type="number" name="avg" id="avg">
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">{{__('education.span_start_date')}}
            </small>
            <select class="form-control text-center" name="start_date" id="start_date">
                @for($i=1357;$i<1500;$i++)
                    <option
                    @if ($userInfo->getEducation->start_date==$i)
                    selected
                    @endif
                    value="{{$i}}">{{$i}}</option>
                @endfor

            </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">
                {{__('education.span_end_date')}}
            </small>
            <select class="form-control text-center" name="end_date" id="end_date">
                @foreach(__('education.end_date') as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
                @for($i=1357;$i<1500;$i++)
                <option
                @if ($userInfo->getEducation->end_date==$i)
                selected
                @endif
                value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="col-sm-10 mt-3 mx-auto">
            <small id="helpId" class="form-text text-left text-bold">
                {{__('education.span_description')}}
            </small>
            <input value="{{$userInfo->getEducation->description}}" type="text" class="form-control" name="edu_description" id="edu_description" >
        </div>
    </div>
    <div class="mx-auto text-center">
        <button class="btn btn-primary mt-3" type="button"
        onclick="refhref('education_form','{{__('education.confrim')}}')"
        >ذخیره سازی</button>
    </div>

</form>
