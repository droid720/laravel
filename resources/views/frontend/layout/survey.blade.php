@extends('frontend.layout.main')

@section('extend-css')
    <link href="{{ url('assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
          rel="stylesheet">

@endsection

@section('content')

    <div id="survey">
        <div class="col-lg-12">
            <div class="ibox-content">
                <h2>Survey</h2>
                <form action="{{ route('postSurvey') }}" method="post" id="survey-form">
                    {{ csrf_field() }}
                    @foreach($questions as $key => $question)
                        <div class="question question_{{ ++$key }} hidden" id="{{ $key }}">
                            <p>Question {{ $key }}: {{ $question->content }}</p>
                            <ul class="todo-list m-t">
                                @foreach(json_decode($question->answer) as $i => $answer)
                                    <li>
                                        <input type="checkbox" value="{{ $i }}"
                                               name="answer_{{ $key }}[]" class="i-checks answer"/>
                                        <span class="m-l-xs">{{ $answer }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    <p class="text-center"><span class="label label-warning"></span></p>
                    <div class="show-warning hidden">
                        <h3>You have completed all 30 questions. Are you sure to wanna see a result?</h3>
                    </div>
                    <button class="btn btn-primary btn-rounded btn-block btn-submit hide" type="submit">Submit</button>
                    <button class="btn btn-primary btn-rounded btn-block btn-next" type="button">Next</button>
                    <button class="btn btn-danger btn-rounded btn-block btn-prev hide" type="button">Prev</button>
                    <input type="hidden" value="{{ count($questions) }}" name="max_page" class="max_page">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extend-js')
    <!-- iCheck -->
    <script src="{{ url('assets/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ url('assets/js/modules/frontend/survey.js') }}"></script>
@endsection