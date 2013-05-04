@layout('master')
<?php
/**
 * Index - Game page.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@amsgames.com>
 * @copyright Amsgames Studio 2013
 * @version v.1.0
 */
?>

{{-- Site title --}}
@section('site-title')
  @parent - {{__('global.services')}}
@endsection

{{-- CSS --}}
@section('style')
  @parent
  {{ HTML::style('css/services.css') }}
@endsection

{{-- JS --}}
@section('script')
  @parent
  {{ HTML::script('js/services.js') }}
  {{ HTML::script('js/jqBootstrapValidation.js') }}
@endsection

{{-- Content --}}
@section('content')
<div id="top" class="row-fluid">
  <div class="span3">
    <h5 class="text-center">{{__('services.cleanups')}}</h5>
    <ul id="navbar" class="nav nav-tabs nav-stacked side-bar">
      <li><a href="#service1"><i class="icon-chevron-right"></i> {{__('services.service1_nav')}}</a></li>
      <li><a href="#service2"><i class="icon-chevron-right"></i> {{__('services.service2_nav')}}</a></li>
      <li><a href="#service3"><i class="icon-chevron-right"></i> {{__('services.service3_nav')}}</a></li>
      <li><a href="#service4"><i class="icon-chevron-right"></i> {{__('services.service4_nav')}}</a></li>
    </ul>
    <div id="budget-request" class="text-center hidden">
      <a href="#form" class="btn btn-request btn-warning">
        <i class="icon-envelope icon-white"></i> {{__('services.budget_request')}}
      </a>
    </div>
  </div>

  <div class="span9">

    <div id="service1" class="service">
      <div class="row-fluid service-header">
        <div class="span12 text-center">
          <h2>{{__('services.service1_title')}}</h2>
        </div>
      </div>
      <div class="service-top row-fluid">
        <div class="span6">
          <a href="#top" class="btn"><i class="icon-th-list"></i> {{__('services.to_top')}}</a>
        </div>
        <div class="span6 text-right">
          <a href="#form" class=" budget-request btn btn-request btn-info" data-value="service1">
            <i class="icon-envelope icon-white"></i> {{__('services.request')}}
          </a>
        </div>
      </div>
      <div class="service-img">
        {{HTML::image('img/carousel/headline_1.jpg', __('services.service1_title'), array('class' => 'img-rounded'))}}
      </div>
      <div class="service-detail">
        <ul id="service1-tab" class="nav nav-tabs">
          <li class="active"><a href="#service1-1" data-toggle="tab">{{__('services.tab_description')}}</a></li>
          <li><a href="#service1-2" data-toggle="tab">{{__('services.tab_advantages')}}</a></li>
          <li><a href="#service1-3" data-toggle="tab">{{__('services.tab_how')}}</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="service1-1">{{__('services.service1_description')}}</div>
          <div class="tab-pane" id="service1-2">{{__('services.service1_advantages')}}</div>
          <div class="tab-pane" id="service1-3">{{__('services.service1_how')}}</div>
        </div>
      </div>
    </div>

    <div id="service2" class="service">
      <div class="row-fluid service-header">
        <div class="span12 text-center">
          <h2>{{__('services.service2_title')}}</h2>
        </div>
      </div>
      <div class="service-top row-fluid">
        <div class="span6">
          <a href="#top" class="btn"><i class="icon-th-list"></i> {{__('services.to_top')}}</a>
        </div>
        <div class="span6 text-right">
          <a href="#form" class=" budget-request btn btn-request btn-info" data-value="service2">
            <i class="icon-envelope icon-white"></i> {{__('services.request')}}
          </a>
        </div>
      </div>
      <div class="service-img">
        {{HTML::image('img/carousel/headline_2.jpg', __('services.service2_title'), array('class' => 'img-rounded'))}}
      </div>
      <div class="service-detail">
        <ul id="service2-tab" class="nav nav-tabs">
          <li class="active"><a href="#service2-1" data-toggle="tab">{{__('services.tab_description')}}</a></li>
          <li><a href="#service2-2" data-toggle="tab">{{__('services.tab_advantages')}}</a></li>
          <li><a href="#service2-3" data-toggle="tab">{{__('services.tab_how')}}</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="service2-1">{{__('services.service2_description')}}</div>
          <div class="tab-pane" id="service2-2">{{__('services.service2_advantages')}}</div>
          <div class="tab-pane" id="service2-3">{{__('services.service2_how')}}</div>
        </div>
      </div>
    </div>

    <div id="service3" class="service">
      <div class="row-fluid service-header">
        <div class="span12 text-center">
          <h2>{{__('services.service3_title')}}</h2>
        </div>
      </div>
      <div class="service-top row-fluid">
        <div class="span6">
          <a href="#top" class="btn"><i class="icon-th-list"></i> {{__('services.to_top')}}</a>
        </div>
        <div class="span6 text-right">
          <a href="#form" class="budget-request btn btn-request btn-info" data-value="service3">
            <i class="icon-envelope icon-white"></i> {{__('services.request')}}
          </a>
        </div>
      </div>
      <div class="service-img">
        {{HTML::image('img/carousel/headline_2.jpg', __('services.service3_title'), array('class' => 'img-rounded'))}}
      </div>
      <div class="service-detail">
        <ul id="service3-tab" class="nav nav-tabs">
          <li class="active"><a href="#service3-1" data-toggle="tab">{{__('services.tab_description')}}</a></li>
          <li><a href="#service3-2" data-toggle="tab">{{__('services.tab_advantages')}}</a></li>
          <li><a href="#service3-3" data-toggle="tab">{{__('services.tab_how')}}</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="service3-1">{{__('services.service3_description')}}</div>
          <div class="tab-pane" id="service3-2">{{__('services.service3_advantages')}}</div>
          <div class="tab-pane" id="service3-3">{{__('services.service3_how')}}</div>
        </div>
      </div>
    </div>

    <div id="service4" class="service">
      <div class="row-fluid service-header">
        <div class="span12 text-center">
          <h2>{{__('services.service4_title')}}</h2>
        </div>
      </div>
      <div class="service-top row-fluid">
        <div class="span6">
          <a href="#top" class="btn"><i class="icon-th-list"></i> {{__('services.to_top')}}</a>
        </div>
        <div class="span6 text-right">
          <a href="#form" class="budget-request btn btn-request btn-info" data-value="service4">
            <i class="icon-envelope icon-white"></i> {{__('services.request')}}
          </a>
        </div>
      </div>
      <div class="service-img">
        {{HTML::image('img/carousel/headline_1.jpg', __('services.service4_title'), array('class' => 'img-rounded'))}}
      </div>
      <div class="service-detail">
        <ul id="service4-tab" class="nav nav-tabs">
          <li class="active"><a href="#service4-1" data-toggle="tab">{{__('services.tab_description')}}</a></li>
          <li><a href="#service4-2" data-toggle="tab">{{__('services.tab_advantages')}}</a></li>
          <li><a href="#service4-3" data-toggle="tab">{{__('services.tab_how')}}</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="service4-1">{{__('services.service4_description')}}</div>
          <div class="tab-pane" id="service4-2">{{__('services.service4_advantages')}}</div>
          <div class="tab-pane" id="service4-3">{{__('services.service4_how')}}</div>
        </div>
      </div>
    </div>

    <div id="form" class="service-form">
      <div class="header text-center">
        <h2><i class="icon-tint icon-white"></i> {{__('services.budget_request')}}</h2>
      </div>
      <div class="body ">

        <form class="form-horizontal">

          <div class="control-group">
            <label class="control-label" for="type">{{__('services.type')}}</label>
            <div class="controls">
              <select id="type" name="type">
                <option selected value="service1">{{__('services.service1_title')}}</option>
                <option value="service2">{{__('services.service2_title')}}</option>
                <option value="service3">{{__('services.service3_title')}}</option>
                <option value="service4">{{__('services.service4_title')}}</option>
              </select>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="name">{{__('services.name')}}</label>
            <div class="controls">
              <input type="text" id="name" name="name" placeholder="{{__('services.name_placeholder')}}" 
                  required data-validation-required-message="{{__('global.error_empty')}}">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="phone_number">{{__('services.phone_number')}}</label>
            <div class="controls">
              <input type="text" id="phone_number" name="name" required 
                  data-validation-required-message="{{__('global.error_empty')}}">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="phone_number">{{__('services.email')}}</label>
            <div class="controls">
              <input type="email" id="email" name="email" placeholder="{{__('services.email_placeholder')}}" 
                  required validemail data-validation-required-message="{{__('global.error_empty')}}">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="address">{{__('services.address')}}</label>
            <div class="controls">
              <textarea id="address" name="address" rows="3" required 
                  data-validation-required-message="{{__('global.error_empty')}}"></textarea>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="description">{{__('services.description')}}</label>
            <div class="controls">
              <textarea id="description" name="description" rows="3"></textarea>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-primary">{{__('services.request')}}</button>
            </div>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>
@endsection