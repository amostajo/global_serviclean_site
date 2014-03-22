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
  {{ trans('global.service_deepcleaning') }} - @parent
@stop

{{-- Meta --}}
@section('meta')
  <meta name="description" content="{{trans('deepcleaning.meta-description')}}">
  <meta name="keywords" content="{{trans('deepcleaning.meta-keywords')}}">
@stop

{{-- Service title --}}
@section('service-title')
  {{ trans('deepcleaning.title') }}
@stop

{{-- Service slogan --}}
@section('service-slogan')
  {{ trans('deepcleaning.slogan') }}
@stop

{{-- Service slogan --}}
@section('service-body')
  {{ trans('deepcleaning.body') }}
@stop

{{-- Service hidden input --}}
@section('service-hidden-input')
  {{ Form::hidden('service', trans('global.service_deepcleaning')) }}
@stop

{{-- Service carousel --}}
@section('service-carousel-slides')
  <div class="slide">
    {{ HTML::image('img/carousel/deepcleaning/img001_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_deepcleaning'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/deepcleaning/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_deepcleaning'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/deepcleaning/img003_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_deepcleaning'))) ) }}
  </div>
@stop