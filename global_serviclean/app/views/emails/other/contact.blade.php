@extends('emails.master')
<?php
/**
 * Contact request email.
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
  {{ trans('contact.contact-request') }}
@stop

{{-- Hint --}}
@section('email-hint-message')
  {{ trans('contact.email-hint') }}
@stop

{{-- Body --}}
@section('email-body')
  <div style="padding:10px;background-color:#F2F2F2;">
    <address>
      <h1>{{ $name }} <small><a href="mailto:{{ $email }}">{{ $email }}</a></small></h1>      
    </address>
  </div>

  <p>
    <h3>{{ trans('contact.phone') }}</h3>
    {{ $phone }}
  </p>

  <p>
    <h3>{{ trans('contact.feedback') }}</h3>
    {{ $feedback }}
  </p>
@stop