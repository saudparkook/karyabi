@extends('headerAndFooter')
@section('body')
    <div class="container">
        {{-- منو انتخاب های پروفایل و تکمیل رزومه --}}
        <ul class="nav nav-pills pt-4 mb-3 mx-auto text-center" id="pills-tab" role="tablist">
            <li class="nav-item mx-auto " role="presentation">
              <button class="nav-link mx-auto " id="pills-education-tab" data-bs-toggle="pill"
              data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education"
              aria-selected="false">{{__('text.CVitems')['education']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto active" id="pills-evidence-tab" data-bs-toggle="pill"
               data-bs-target="#pills-evidence" type="button" role="tab" aria-controls="pills-evidence"
               aria-selected="true">{{__('text.CVitems')['evidence']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto" id="pills-skill-tab" data-bs-toggle="pill"
               data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill"
                aria-selected="false">{{__('text.CVitems')['skill']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto" id="pills-experiences-tab" data-bs-toggle="pill"
               data-bs-target="#pills-experiences" type="button" role="tab" aria-controls="pills-experiences"
                aria-selected="false">{{__('text.CVitems')['experiences']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto" id="pills-project-tab" data-bs-toggle="pill"
               data-bs-target="#pills-project" type="button" role="tab" aria-controls="pills-project"
                aria-selected="false">{{__('text.CVitems')['project']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto" id="pills-languages-tab" data-bs-toggle="pill"
               data-bs-target="#pills-languages" type="button" role="tab" aria-controls="pills-languages"
                aria-selected="false">{{__('text.CVitems')['languages']}}</button>
            </li>
            <li class="nav-item mx-auto" role="presentation">
              <button class="nav-link mx-auto" id="pills-media-tab" data-bs-toggle="pill"
               data-bs-target="#pills-media" type="button" role="tab" aria-controls="pills-media"
                aria-selected="false">{{__('text.CVitems')['media']}}</button>
            </li>
        </ul>
        {{-- پایان بخش منو انتخاب ها --}}
        {{-- بخش مربوط به ویرایش پروفایل  ورزومه --}}
        <div class="row">
            <div class="tab-content" id="pills-tabContent">
                {{--  education تحصیلات --}}
                <div class="tab-pane fade"  id="pills-education" role="tabpanel"
                 aria-labelledby="pills-education-tab">
                   @include('CV.education_form')
                </div>
                {{-- end education تحصیلات --}}
                {{-- evidence مدارک --}}
                <div class="row tab-pane fade show active" id="pills-evidence"
                role="tabpanel" aria-labelledby="pills-evidence-tab">
                    @include('CV.evidence')
                </div>
                {{-- end evidence مدارک --}}
                <div class="row tab-pane fade" id="pills-evidence"
                 role="tabpanel" aria-labelledby="pills-evidence-tab">
                 evidence
                </div>
                <div class="row tab-pane fade" id="pills-skill"
                 role="tabpanel" aria-labelledby="pills-skill-tab">
                 skill
                 <input type="range" min="1" max="100" value="50">
                </div>
                <div class="row tab-pane fade" id="pills-experiences"
                 role="tabpanel" aria-labelledby="pills-experiences-tab">
                 experiences
                </div>
                <div class="tab-pane fade" id="pills-project"
                 role="tabpanel" aria-labelledby="pills-project-tab">
                 project
                </div>
                <div class="row tab-pane fade " id="pills-languages"
                 role="tabpanel" aria-labelledby="pills-languages-tab">
                 languages
                </div>
                <div class="row tab-pane fade " id="pills-media"
                 role="tabpanel" aria-labelledby="pills-media-tab">
                 media
                </div>
            </div>
        </div>
    </div>
@endsection
