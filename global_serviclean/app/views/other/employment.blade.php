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

        <p class="text-info">
          {{ trans('employment.request-legend') }}
        </p>

        <p>
          <a href="http://goo.gl/forms/tDnNwrIxfB" class="btn btn-success btn-block" role="button">@lang('employment.form')</a>
        </p>

      </div>

    </div>

  </div>

</div>
@stop