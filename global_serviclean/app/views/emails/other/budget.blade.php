@extends('emails.master')
<?php
/**
 * Budget request email.
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
  {{ trans('services.email-subject', array('service' => $service)) }}
@stop

{{-- Hint --}}
@section('email-hint-message')
  {{ trans('services.email-hint', array('service' => $service)) }}
@stop

{{-- Body --}}
@section('email-body')
  <div style="padding:10px;background-color:#F2F2F2;">
    <address>
      <h1>{{ $name }} <small><a href="mailto:{{ $email }}">{{ $email }}</a></small></h1>      
    </address>
  </div>

  <p>
    <h3>{{ trans('services.phone') }}</h3>
    {{ $phone }}
  </p>

  <p>
    <h3>{{ trans('services.company-name') }}</h3>
    {{ $company }}
  </p>

  <p>
    <h3>{{ trans('services.address') }}</h3>
    {{ $address }}
  </p>

  <p>
    <h3>{{ trans('services.detail') }}</h3>
    {{ $detail }}
  </p>

@stop