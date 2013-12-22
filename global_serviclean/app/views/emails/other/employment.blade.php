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
  <div style="padding:10px;background-color:#F2F2F2;">
    <address>
      <h1>{{ $name }} <small><a href="mailto:{{ $email }}">{{ $email }}</a></small></h1>      
    </address>
  </div>

  <p>
    <h3>{{ trans('employment.id') }}</h3>
    {{ $id }}
  </p>

  <p>
    <h3>{{ trans('employment.birth-place') }}</h3>
    {{ $birthPlace }}
  </p>

  <p>
    <h3>{{ trans('employment.birth-date') }}</h3>
    {{ $birthDate }}
  </p>

  <p>
    <h3>{{ trans('employment.status') }}</h3>
    {{ $status }}
  </p>

  <p>
    <h3>{{ trans('employment.address') }}</h3>
    {{ $address }}
  </p>

  <p>
    <h3>{{ trans('employment.phone') }}</h3>
    {{ $phone }}
  </p>

  <p>
    <h3>{{ trans('employment.studies') }}</h3>
    {{ $studies }}
  </p>

@stop