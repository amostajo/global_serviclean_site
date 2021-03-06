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
  {{ trans('global.service_outsourcing') }} - @parent
@stop

{{-- Meta --}}
@section('meta')
  <meta name="description" content="{{trans('outsourcing.meta-description')}}">
  <meta name="keywords" content="{{trans('outsourcing.meta-keywords')}}">
@stop

{{-- Service title --}}
@section('service-title')
  {{ trans('outsourcing.title') }}
@stop

{{-- Service slogan --}}
@section('service-slogan')
  {{ trans('outsourcing.slogan') }}
@stop

{{-- Service slogan --}}
@section('service-body')
  {{ trans('outsourcing.body') }}
@stop

{{-- Service hidden input --}}
@section('service-hidden-input')
  {{ Form::hidden('service', trans('global.service_outsourcing')) }}
@stop

{{-- Service carousel --}}
@section('service-carousel-slides')
  <div class="slide">
    {{ HTML::image('img/carousel/outsourcing/img001_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_outsourcing'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/outsourcing/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_outsourcing'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/outsourcing/img003_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_outsourcing'))) ) }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/outsourcing/img004_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service_outsourcing'))) ) }}
  </div>
@stop