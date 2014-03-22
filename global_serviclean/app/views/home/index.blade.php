@extends('master')
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

{{-- Styles --}}
@section('style')
  @parent
  {{HTML::style('css/jquery.bxslider.css')}}
@stop

{{-- Scripts --}}
@section('script')
  @parent
  {{HTML::script('js/jquery.bxslider.min.js')}}
  {{HTML::script('js/jquery.ams.index.js')}}
@stop

{{-- Carousel --}}
@section('content-no-container')
  @parent
  <div class="alt-container">
    <div class="container"> 
      <div class="bxslider">

        <div class="slide">
          <a href="">
            {{ HTML::image('img/carousel/image002.jpg', trans('global.alt-sample', array('text' => trans('global.cleaning-service'))) ) }}
          </a>
        </div>

        <div class="slide">
          <a href="">
            {{ HTML::image('img/carousel/image003.jpg', trans('global.alt-sample', array('text' => trans('global.cleaning-service'))) ) }}
          </a>
        </div>

        <div class="slide">
          <a href="">
            {{ HTML::image('img/carousel/image001.jpg', trans('global.alt-sample', array('text' => trans('global.cleaning-service'))) ) }}
          </a>
        </div>

        <div class="slide">
          <a href="">
            {{ HTML::image('img/carousel/image000.jpg', trans('global.alt-sample', array('text' => trans('global.cleaning-service'))) ) }}
          </a>
        </div>

      </div>
    </div>
  </div>
@stop

{{-- Content --}}
@section('content')
<div class="text-center text-info">
  <h2><em>{{trans('index.slogan')}}</em></h2>
</div>

<div class="row text-center new-tag">

  <div class="col-sm-6 col-md-4">
    <div>
      <div class="text-center new-tag">
        {{ HTML::image('img/index/availability.clock.png', trans('index.ms1_title') ) }}
        <div class="caption">
          <h3>{{trans('index.ms1_title')}}</h3>
          <p>{{trans('index.ms1_summary')}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div>
      <div class="text-center new-tag">
        {{ HTML::image('img/index/quality.ribbon.png', trans('index.ms2_title') ) }}
        <div class="caption">
          <h3>{{trans('index.ms2_title')}}</h3>
          <p>{{trans('index.ms2_summary')}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div>
      <div class="text-center new-tag">
        {{ HTML::image('img/index/technology.png', trans('index.ms3_title') ) }}
        <div class="caption">
          <h3>{{trans('index.ms3_title')}}</h3>
          <p>{{trans('index.ms3_summary')}}</p>
        </div>
      </div>
    </div>
  </div>

</div>
@stop