@layout('master')
<?php
/**
 * Index - Home page.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@amsgames.com>
 * @copyright Amsgames Studio 2013
 * @version v.1.0
 */
?>

{{-- CSS --}}
@section('style')
  @parent
  {{ HTML::style('css/home.css') }}
@endsection

{{-- JS --}}
@section('script')
  @parent
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=112751193049";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
@endsection

{{-- Carousel --}}
@section('content-no-container')
<div class="carousel-custom">
  <div class="container">

    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          {{HTML::image('img/carousel/headline_1.jpg')}}
          <div class="carousel-caption">
            <h4>{{__('home.heading_1')}}</h4>
          </div>
        </div>
        <div class="item">
          {{HTML::image('img/carousel/headline_2.jpg')}}
          <div class="carousel-caption">
            <h4>{{__('home.heading_2')}}</h4>
          </div>
        </div>
      </div>
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

  </div>
</div>
@endsection

{{-- Content --}}
@section('content')
  @parent
  <div class="span12 blockquote-custom">
    <h4>{{__('home.slogan')}}</h4>
  </div>

  <div class="row-fluid text-center">
    <ul class="thumbnails">
      <li class="span4">
        <div class="text-center">
          {{HTML::image('img/home/pulidora-main.png')}}
          <h3>{{__('home.title_1')}}</h3>
          <p>{{__('home.description_1')}}</p>
        </div>
      </li>

      <li class="span4">
        <div class="text-center">
          {{HTML::image('img/home/multiple-blue-icon.png')}}
          <h3>{{__('home.title_2')}}</h3>
          <p>{{__('home.description_2')}}</p>
        </div>
      </li>

      <li class="span4">
        <div class="text-center">
          {{HTML::image('img/home/clock.png')}}
          <h3>{{__('home.title_3')}}</h3>
          <p>{{__('home.description_3')}}</p>
        </div>
      </li>
    </ul>
  </div>

  <div class="row-fluid">
    <ul class="inline">
      <li><div class="fb-like" data-send="false" data-layout="button_count" data-show-faces="true" data-action="recommend"></div></li>
      <li><a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">
          {{_('global.twitter')}}</a></li>
      <li><g:plusone annotation="inline"></g:plusone></li>
    </ul>
  </div>
@endsection