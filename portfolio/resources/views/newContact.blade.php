@extends('templates.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading"></div>
                <div class="panel-body">


               {{ Form::open(['url' => 'livre/new']) }}
               {!! Form::control('text', 6, 'name', $errors, trans('front/contact.name')) !!}
            {!! Form::control('email', 6, 'email', $errors, trans('front/contact.email')) !!}
            {!! Form::control('textarea', 12, 'message', $errors, trans('front/contact.message')) !!}
            {!! Form::text('address', '', ['class' => 'hpet']) !!}

            {!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
                                {{ Form::close() }}




            </div>
        </div>
    </div>
</div>
@endsection
