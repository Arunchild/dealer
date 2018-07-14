@extends('company::layouts.app')

@section('content')
<div class="container">
    <p class="lead">Edit and Update this Company Details below, or <a href="{{ route('company.index') }}">Go back to all Company Details.</a></p>
    <hr>

    @include('company::partials.alerts.errors')


    {!! Form::model($items, [
        'method' => 'PATCH',
        'route' => ['dealer.update', $items->id]
    ]) !!}
    <div class="row">
        <div class="col-md-3">
            {!! Form::input('text', 'companyname', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Company Name', 'tabindex' => 4)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'addressline1', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Adress Line 1', 'tabindex' => 7)) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::input('text', 'addressline2', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Address Line 2', 'tabindex' => 8)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'state', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'state', 'tabindex' => 8)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'pincode', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'pincode', 'tabindex' => 8)) !!}
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            {!! Form::input('text', 'country', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'country', 'tabindex' => 8)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'mobile', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'mobile', 'tabindex' => 8)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'gst', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Gst', 'tabindex' => 2)) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::input('text', 'email', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'email', 'tabindex' => 2)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'website', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'website', 'tabindex' => 2)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'contact_person', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'contact_person', 'tabindex' => 2)) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::input('text', 'contact_person_mobile', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'contact_person_mobile', 'tabindex' => 2)) !!}
        </div>

        <div class="col-md-3">
            {!! Form::input('text', 'opening_balance', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'opening_balance', 'tabindex' => 2)) !!}
        </div>
    </div>
    <div class="row">
        {!! Form::submit('Update Dealer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>

@stop