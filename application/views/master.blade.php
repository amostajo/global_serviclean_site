<?php
/**
 * Master layout.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@amsgames.com>
 * @copyright Amsgames Studio 2013
 * @license Social network icons - http://icondock.com/
 * @version v.1.0
 */
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    @section('site-title')
      {{__('global.company')}} - {{__('global.title')}}
    @yield_section
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
  {{ HTML::style('css/global.css') }}
  @section('style')
  @yield_section
</head>
  <body>

    <div class="wrapper">
      <header>
        @section('nav-contact')
        <div class="container">
          <small class="text-right">
            <ul class="inline">
              <li><i class="icon-envelope"></i> {{HTML::mailto('info@globalserviclean.com', 'info@globalserviclean.com', array('alt' => __('global.company'), 'title' => __('global.company')))}}</li>
              <li><i class="icon-bullhorn"></i> (506) 2234-8274</li>
              <li><i class="icon-bullhorn"></i> (506) 8897-3856</li>
            </ul>
          </small>
        </div>
        @yield_section
        <div class="container">
          <nav class="navbar">
            <div class="navbar-inner">
              <div class="container">
                <a class="brand" href="{{URL::to_route('home')}}"><div id="logo"></div></a>
                <ul class="nav nav-pills">
                  @section('nav')
                  <li><a href="{{URL::to_route('home')}}">{{__('global.home')}}</a></li>
                  <li><a href="{{URL::to_route('services')}}">{{__('global.services')}}</a></li>
                  <li><a href="">{{__('global.employment')}}</a></li>
                  <li><a href="">{{__('global.contact')}}</a></li>
                  @yield_section
                </ul>
                <div class="nav-collapse collapse">
                  @section('nav-collapse')
                  @yield_section
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      @section('content-no-container')
      @yield_section

      <div class="container">
        @section('content')
        @yield_section
      </div>
      <div class="push"></div>
    </div>


    <footer class="footer">
      <div class="footer-custom">
        <div class="container">
          <div class="row-fluid">
            @section('footer')
            <small>
              <div class="span7">
                <p><b>&copy; {{date('Y')}} {{__('global.company_full')}}</b></p>
                {{__('global.made_by')}} Cae Mostajo {{__('global.and')}} <a href="http://about.me/amostajo" title="Alejandro Mostajo">Alejandro Mostajo</a>.
              </div>
              <div class="span5 text-right">
                <div class="row-fluid text-left">
                  @section('footer-links')

                  <div class="span6">
                    <b>{{__('global.about_us')}}</b><br/>
                    <ul class="unstyled">
                      <li>{{HTML::link('#', __('global.contact'), array('alt' => __('global.contact'), 'title' => __('global.contact')))}}</li>
                    </ul>
                  </div>

                  <div class="span6">
                    <b>{{__('global.about_site')}}</b><br/>
                    <ul class="unstyled">
                      <li>{{HTML::link('#', __('global.terms'), array('alt' => __('global.terms'), 'title' => __('global.terms')))}}</li>
                      <li>{{HTML::link('#', __('global.privacy_policy'), array('alt' => __('global.privacy_policy'), 'title' => __('global.privacy_policy')))}}</li>
                    </ul>
                  </div>

                  @yield_section
                </div>
              </div>
            </small>
            @yield_section
          </div>
        </div>
      </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    @section('script')
    @yield_section
  </body>
</html>