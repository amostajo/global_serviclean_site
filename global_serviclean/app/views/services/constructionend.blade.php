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
  {{ trans('global.service_constructionend') }} - @parent
@stop

{{-- Service title --}}
@section('service-title')
  {{ trans('constructionend.title') }}
@stop

{{-- Service slogan --}}
@section('service-slogan')
  {{ trans('constructionend.slogan') }}
@stop

{{-- Service slogan --}}
@section('service-body')
  {{ trans('constructionend.body') }}
@stop

{{-- Service hidden input --}}
@section('service-hidden-input')
  {{ Form::hidden('service', trans('global.service_constructionend')) }}
@stop

{{-- Service carousel --}}
@section('service-carousel-slides')
  <div class="slide">
    {{ HTML::image('img/carousel/constructionend/img001_300x200.jpg') }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/constructionend/img002_300x200.jpg') }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/constructionend/img004_300x200.jpg') }}
  </div>

  <div class="slide">
    {{ HTML::image('img/carousel/constructionend/img003_300x200.jpg') }}
  </div>
@stop