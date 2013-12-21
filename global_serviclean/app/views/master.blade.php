<?php
/**
 * Master template.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @license Social network icons - http://icondock.com/
 * @version v.1.0
 */
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    @section('site-title')
      {{trans('global.gs')}} - {{trans('global.sitetitle')}}
    @show
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
  {{HTML::style('css/global.css')}}
  @section('style')
  @show
</head>
  <body>

    <div class="wrapper">

      <div class="logo-container">
        <div class="container">
          <a href="{{URL::route('home')}}"><div id="logo"></div></a>
        </div>
      </div>

      <div class="nav-container">
        @section('nav-container')
          <div class="container">
            <nav>
              <ul class="nav nav-pills">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{trans('global.services')}} <span class="caret"></span></a> 
                  <ul class="dropdown-menu">
                    <li>
                      {{HTML::link(
                        URL::route('outsourcing'), 
                        trans('global.service_outsourcing'), 
                        array('alt' => trans('global.service_outsourcing'), 'title' => trans('global.service_outsourcing'))
                      )}}
                    </li>
                    <li><a href="#">{{trans('global.service_builtend')}}</a></li>
                    <li><a href="#">{{trans('global.service_windows')}}</a></li>
                    <li><a href="#">{{trans('global.service_industrial')}}</a></li>
                    <li><a href="#">{{trans('global.service_events')}}</a></li>
                  </ul>
                </li>
                <li><a href="#">{{trans('global.employment')}}</a></li>
                <li>
                  {{HTML::link(
                    URL::route('contact'), 
                    trans('global.contact'), 
                    array('alt' => trans('global.contact'), 'title' => trans('global.contact'))
                  )}}
                </li>
              </ul>
            </nav>
          </div>
        @show
      </div>

      @section('content-no-container')
      @show

      <div class="container">
        <div class="content">
          @section('content')
          @show
        </div>
      </div>

      <div class="push"></div>
    </div>


    <div class="footer-container">
      <div class="container">
        <footer class="footer">
          <div class="hr"></div>
          <div class="row-fluid">
            @section('footer')
            <small>
              <div class="col-md-5">
                &copy; {{date('Y')}} {{trans('global.company')}} {{trans('global.allrights')}} 
                <div>
                  <small>
                    {{trans('global.powered_by')}} {{HTML::link('http://laravel.com/', 'Laravel', array('alt' => 'Laravel', 'title' => 'Laravel'))}}, 
                    {{HTML::link('http://about.me/amostajo', 'Amostajo', array('alt' => 'Bearded', 'title' => 'Amostajo'))}}.
                  </small>
                </div>
              </div>
              <div class="col-md-4 text-center">
              </div>
              <div class="col-md-3">
                <ul class="list-unstyled">
                  @section('footer-links')
                  @show
                  <li><a href="#">{{trans('global.terms')}}</a></li>
                  <li><a href="#">{{trans('global.privacypolicy')}}</a></li>
                </ul>
              </div>
            </small>
            @show
          </div>
        </footer>
      </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    @section('script')
    @show
  </body>
</html>