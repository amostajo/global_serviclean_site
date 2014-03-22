@extends('master')
<?php
/**
 * Services master template.
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
  {{ HTML::style('css/jquery.bxslider.css') }}
@stop

{{-- Scripts --}}
@section('script')
  @parent
  {{ HTML::script('js/jquery.bxslider.min.js') }}
  {{ HTML::script('js/jquery.ams.forms.js') }}
  {{ HTML::script('js/jquery.gs.service.js') }}
@stop

{{-- Content --}}
@section('content')
<div class="row">
  <div class="col-md-10">
    <h1>
      @section('service-title')
      @show
      <small>
        @section('service-slogan')
        @show
      </small>
    </h1>
  </div>

  <div class="col-md-2">
    <div class="share share-linkedin" onclick="window.open('{{ Share::load(Request::url())->linkedin() }}')" 
        data-toggle="tooltip" data-placement="bottom" 
        title="" data-original-title="{{ trans('global.share', array('share' => trans('global.linkedin')) ) }}"></div>
    <div class="share share-gplus" onclick="window.open('{{ Share::load(Request::url())->gplus() }}')" 
        data-toggle="tooltip" data-placement="bottom" 
        title="" data-original-title="{{ trans('global.share', array('share' => trans('global.gplus')) ) }}"></div>
    <div class="share share-twitter" onclick="window.open('{{ Share::load(Request::url())->twitter() }}')" 
        data-toggle="tooltip" data-placement="bottom" 
        title="" data-original-title="{{ trans('global.share', array('share' => trans('global.twitter')) ) }}"></div>
    <div class="share share-facebook" onclick="window.open('{{ Share::load(str_replace('http://', '', Request::url()))->facebook() }}')" 
        data-toggle="tooltip" data-placement="bottom" 
        title="" data-original-title="{{ trans('global.share', array('share' => trans('global.facebook')) ) }}"></div>
  </div>

</div>

<div class="row new-tag">

  <div class="col-md-7 text-justified">
    @section('service-carousel')
      <div class="bxslider new-following-tag">
        @section('service-carousel-slides')
          <div class="slide">
            {{ HTML::image('img/carousel/outsourcing/img001_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service'))) ) }}
          </div>

          <div class="slide">
            {{ HTML::image('img/carousel/outsourcing/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service'))) ) }}
          </div>

          <div class="slide">
            {{ HTML::image('img/carousel/outsourcing/img003_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service'))) ) }}
          </div>

          <div class="slide">
            {{ HTML::image('img/carousel/outsourcing/img002_300x200.jpg', trans('global.alt-sample', array('text' => trans('global.service'))) ) }}
          </div>
        @show
      </div>
      <div class="new-tag"></div>
    @show
    @section('service-body')
    @show
  </div>

  <div class="col-md-5">

    <div class="panel panel-budget">

      <div class="panel-heading">
        <h3 class="panel-title">{{ trans('services.budget-request') }}</h3>
      </div>

      <div class="panel-body">
        {{ Form::open(array('action-url' => URL::to('processing/budget'), 'class' => 'ajaxForm')) }}

        @section('service-hidden-input')
        @show

        <div class="form-group">
          {{ Form::label('name', trans('services.contact-name')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => trans('services.fullname'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', trans('services.email')) }} <span class="text-info">({{ trans('services.required-field') }})</span>
          {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => trans('services.email'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('phone', trans('services.phone')) }}
          {{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => trans('services.number'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('company', trans('services.company-name')) }}
          {{ Form::text('company', '', array('class' => 'form-control', 'placeholder' => trans('services.name'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('address', trans('services.address')) }}
          {{ Form::text('address', '', array('class' => 'form-control', 'placeholder' => trans('services.address'))) }}
        </div>

        <div class="form-group">
          {{ Form::label('detail', trans('services.detail')) }}
          {{ Form::textarea('detail', '', array('class' => 'form-control', 'placeholder' => trans('services.description'))) }}
        </div>

        <div class="alert"></div>

        <button type="submit" class="btn btn-primary" data-loading-text="{{ trans('services.send') }}...">
          <span class="glyphicon glyphicon-envelope"></span> {{ trans('services.send') }}
        </button>

        {{ Form::close() }}
      </div>

    </div>

  </div>

</div>
@stop