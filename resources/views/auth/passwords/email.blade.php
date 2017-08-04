@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                   {!!Form::open(['url'=>'/password/reset','class'=>'form-horizontal'])!!}



<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email','Alamat Email',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        
        {!! form::email('email',null, ['class'=>'form-control'])!!}
        {!! $errors->first('email','<p class="help-block">:message</p>')!!}
    </div>
</div>                            

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-envelope"></i> kirim link reset password
        </button>
    </div>
</div>           

{!! Form::close() !!}