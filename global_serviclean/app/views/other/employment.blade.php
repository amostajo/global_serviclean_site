@extends('master')
<?php
/**
 * Employment page.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @version v.1.0
 */
?>

{{-- Styles --}}
@section('style')
  @parent
  {{HTML::style('css/datepicker.css')}}
@stop

{{-- Scripts --}}
@section('script')
  @parent
  {{ HTML::script('js/jquery.ams.forms.js') }}
  {{ HTML::script('js/jquery.gs.employment.js') }}
  {{ HTML::script('js/datepicker.js') }}
@stop

{{-- WEB Title --}}
@section('site-title')
  {{ trans('global.employment') }} - @parent
@stop


{{-- Content --}}
@section('content')

<div class="row new-tag">

  <div class="col-md-7 text-justified">

    <p>{{ trans('employment.heading') }}</p>

    <p><h3>{{ trans('employment.benefits') }}</h3></p>

    <p>{{ trans('employment.benefits-list') }}</p>

    <p><h3>{{ trans('employment.requirements') }}</h3></p>

    <p>{{ trans('employment.requirements-list') }}</p>

  </div>

  <div class="col-md-5">

    <div class="panel panel-primary">

      <div class="panel-heading">
        <h3 class="panel-title">{{ trans('employment.request') }}</h3>
      </div>

      <div class="panel-body">

        <div class="text-info">
          {{ trans('employment.request-legend') }}
        </div>

        {{ Form::open(array('action-url' => URL::to('processing/employment'), 'class' => 'ajaxForm')) }}

        <div class="form-group new-tag">
          {{ Form::label('name', trans('employment.name')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => trans('employment.fullname'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', trans('employment.email')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => trans('employment.email'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('id', trans('employment.id')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('id', '', array('class' => 'form-control', 'placeholder' => trans('employment.fullid'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('birthPlace', trans('employment.birth-place')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('birthPlace', '', array('class' => 'form-control', 'placeholder' => trans('employment.birth-place'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('birthDate', trans('employment.birth-date')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('birthDate', '', array('class' => 'form-control datepicker', 'placeholder' => trans('employment.birth-date'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('status', trans('employment.status')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('status', '', array('class' => 'form-control', 'placeholder' => trans('employment.status'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('address', trans('employment.address')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('address', '', array('class' => 'form-control', 'placeholder' => trans('employment.address'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('phone', trans('employment.phone')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => trans('employment.phone'))) }}
        </div>

        <div class="form-group new-tag">
          {{ Form::label('studies', trans('employment.studies')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('studies', '', array('class' => 'form-control', 'placeholder' => trans('employment.studies'))) }}
        </div>

        <div class="alert"></div>

        <button type="submit" class="btn btn-primary" data-loading-text="{{ trans('contact.send') }}...">
          <span class="glyphicon glyphicon-envelope"></span> {{ trans('contact.send') }}
        </button>

        {{ Form::close() }}
      </div>

    </div>

  </div>

</div>
@stop