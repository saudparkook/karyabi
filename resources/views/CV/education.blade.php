 <form id="education_form" action="{{ route('editCV', '1') }}" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">
                {{__('education.span_edu')}}
            </small>
            <select class="form-control text-center" name="edu" id="edu">
                    @foreach(__('education.edu') as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">{{__('education.span_uni')}}
            </small>
            <select class="form-control text-center" name="uni" id="uni">
                    @foreach(__('education.uni') as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">{{__('education.span_avg')}}
            </small>

            <input class="form-control text-center" value="{{old('avg')}}"
                type="number" name="avg" id="avg">
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">{{__('education.span_start_date')}}
            </small>
            <select class="form-control text-center" name="start_date" id="start_date">
                @for($i=1357;$i<1500;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor

            </select>
        </div>
        <div class="col-sm-2 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">
                {{__('education.span_end_date')}}
            </small>
            <select class="form-control text-center" name="end_date" id="end_date">
                @foreach(__('education.end_date') as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
                @for($i=1357;$i<1500;$i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="col-sm-10 mt-3 mx-auto">
            <small id="helpId" class="form-text text-muted">
                {{__('education.span_description')}}
            </small>
            <input type="text" class="form-control" name="edu_description" id="edu_description" >
        </div>
        <div class="mx-auto text-center">
            <button class="btn btn-primary mt-3" type="button"
            onclick="refhref('education_form','{{__('education.confrim')}}')"
            >ذخیره سازی</button>
        </div>

    </div>

</form>
