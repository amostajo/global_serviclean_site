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
  {{ trans('global.service_windows') }} - @parent
@stop

{{-- Meta --}}
@section('meta')
  <meta name="description" content="{{trans('windows.meta-description')}}">
  <meta name="keywords" content="{{trans('windows.meta-keywords')}}">
@stop

{{-- Service title --}}
@section('service-title')
  {{ trans('windows.title') }}
@stop

{{-- Service slogan --}}
@section('service-slogan')
  {{ trans('windows.slogan') }}
@stop

{{-- Service slogan --}}
@section('service-body')
  {{ trans('windows.body') }}
@stop

{{-- Service hidden input --}}
@section('service-hidden-input')
  {{ Form::hidden('service', trans('global.service_windows')) }}
@stop

{{-- Service carousel --}}
@section('service-carousel-slides')
  <div class="slide">
    {{ HTML::image('img/carousel/windows/img001_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_windows'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/windows/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_windows'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/windows/img003_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_windows'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/windows/img004_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_windows'))) ) }}
  </div>
@stop