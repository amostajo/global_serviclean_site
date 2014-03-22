@extends('services.master')
<?php
/**
 * Index - Home page.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @version v.1.0
 */
?>

{{-- WEB Title --}}
@section('site-title')
  {{ trans('global.service_industrial') }} - @parent
@stop

{{-- Meta --}}
@section('meta')
  <meta name="description" content="{{trans('industrial.meta-description')}}">
  <meta name="keywords" content="{{trans('industrial.meta-keywords')}}">
@stop

{{-- Service title --}}
@section('service-title')
  {{ trans('industrial.title') }}
@stop

{{-- Service slogan --}}
@section('service-slogan')
  {{ trans('industrial.slogan') }}
@stop

{{-- Service slogan --}}
@section('service-body')
  {{ trans('industrial.body') }}
@stop

{{-- Service hidden input --}}
@section('service-hidden-input')
  {{ Form::hidden('service', trans('global.service_industrial')) }}
@stop

{{-- Service carousel --}}
@section('service-carousel-slides')
  <div class="slide">
    {{ HTML::image('img/carousel/industrial/img001_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_industrial'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/industrial/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_industrial'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/industrial/img003_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_industrial'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/industrial/img004_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_industrial'))) ) }}
  </div>
@stop