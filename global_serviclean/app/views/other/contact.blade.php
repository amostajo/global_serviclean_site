@extends('master')
<?php
/**
 * Contact page.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @version v.1.0
 */
?>

{{-- Scripts --}}
@section('script')
  @parent
  {{ HTML::script('js/jquery.ams.forms.js') }}
@stop

{{-- WEB Title --}}
@section('site-title')
  {{ trans('global.contact') }} - @parent
@stop

{{-- Content --}}
@section('content')
<div class="alert alert-info">
  {{ trans('contact.alert-budget-request') }}
</div>

<div class="row new-tag">

  <div class="col-md-7 text-justified">

    <address>
      <h3>{{ trans('contact.address1-title') }}</h3>
      {{ trans('contact.address1-line1') }}<br>
      {{ trans('contact.address1-line2') }}<br>
      {{ trans('contact.address1-line3') }}<br>
      <abbr title="{{ trans('contact.phone') }}">{{ trans('contact.phone-abbr') }}:</abbr> 
      <span class="text-info">{{ trans('contact.phone-number') }}</span>
    </address>

    <address>
      <h3>{{ trans('contact.address2-title') }}</h3>
      {{ trans('contact.address2-line1') }}<br>
      {{ trans('contact.address2-line2') }}<br>
      {{ trans('contact.address2-line3') }}<br>
      <abbr title="{{ trans('contact.phone') }}">{{ trans('contact.phone-abbr') }}:</abbr> 
      <span class="text-info">{{ trans('contact.address2-phone') }}</span>
    </address>

  </div>

  <div class="col-md-5">

    <div class="panel panel-budget">

      <div class="panel-heading">
        <h3 class="panel-title">{{ trans('contact.contact-request') }}</h3>
      </div>

      <div class="panel-body">
        {{ Form::open(array('action-url' => URL::to('processing/contact'), 'class' => 'ajaxForm')) }}

        <div class="form-group">
          {{ Form::label('name', trans('contact.name')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => trans('contact.fullname'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', trans('contact.email')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => trans('contact.email'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('phone', trans('contact.phone')) }}
          {{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => trans('contact.phone'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('feedback', trans('contact.feedback')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::textarea('feedback', '', array('class' => 'form-control', 'placeholder' => trans('contact.feedback'))) }}
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