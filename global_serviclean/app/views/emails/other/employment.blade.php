@extends('emails.master')
<?php
/**
 * Employment request email.
 *
 * PHP version 5
 *
 * @author Alejandro Mostajo <amostajo@gmail.com>
 * @copyright Alejandro Mostajo 2013
 * @version v.1.0
 */
?>

{{-- Subject --}}
@section('email-subject')
  {{ trans('employment.request') }}
@stop

{{-- Body --}}
@section('email-body')
  <div style="padding:5px;background-color:#F2F2F2;">
    <address>
      <h3>{{ $name }} <small><a href="mailto:{{ $email }}">{{ $email }}</a></small></h3>
    </address>
  </div>

  <p>
    <h3>{{ trans('employment.id') }}: <small>{{ $id }}</small></h3>    
  </p>

  <p>
    <h3>{{ trans('employment.birth-place') }}: <small>{{ $birthPlace }}</small></h3>
  </p>

  <p>
    <h3>{{ trans('employment.birth-date') }}: <small>{{ $birthDate }}</small></h3>
  </p>

  <p>
    <h3>{{ trans('employment.status') }}: <small>{{ $status }}</small></h3>
  </p>

  <p>
    <h3>{{ trans('employment.address') }}: <small>{{ $district }}, {{ $canton }}, {{ $province }}</small></h3>
  </p>

  <p>
    <h3>{{ trans('employment.phone') }}: <small>{{ $phone }}</small></h3>
  </p>

  <p>
    <h3>{{ trans('employment.studies') }}: <small>{{ $studies }}</small></h3>
  </p>

@stop