<?php
/**
 * Master email template.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @version v.1.0
 */
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body style="padding:15px;">
    {{-- Head --}}
    <header style="margin:20px 0 20px 0;">
      <a href="{{ URL::route('home') }}">{{ HTML::image('img/logo_horizontal_small.png', '', array( 'alt' => trans('global.gs') )) }}</a>
    </header>

    {{-- Subject --}}
    <section style="background-color:#012440;color:#FFF;padding:5px;margin-bottom:20px;">
      <h1>
        @section('email-subject')
        @show
      </h1>
    </section>

    {{-- Email body --}}
    <section style="text-align:justify;padding:15px;">
      {{-- Email hint --}}
      @section('email-hint')
        <div style="color:#999;font-size:20px;margin-bottom:20px;">
          @section('email-hint-message')
          @show
        </div>
      @show

      <div>
        {{-- Email body --}}
        @section('email-body')
        @show
      </div>
    </section>

    <footer style="background-color:#012440;color:#FFF;padding:15px">
      <div style="color:#AAA;">
        <small>{{ trans('global.email-no-reply') }}</small>
      </div>
      <hr>
      <div>
        <small>&copy; {{ date('Y') }} {{ trans('global.company') }} {{ trans('global.allrights') }}</small>
      </div>
    </footer>

  </body>

</html>