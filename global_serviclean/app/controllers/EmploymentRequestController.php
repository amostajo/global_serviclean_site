<?php

class EmploymentRequestController extends \BaseController {

  /**
   * POST form processing.
   *
   * @return Response
   */
  public function store() {
    $data = array(
        'name' => Input::get('name'),
        'email' => Input::get('email'),
        'birthPlace' => Input::get('birthPlace'),
        'birthDate' => Input::get('birthDate'),
        'id' => Input::get('id'),
        'phone' => Input::get('phone'),
        'address' => Input::get('address'),
        'studies' => Input::get('studies'),
        'status' => Input::get('status')
    );
    // Validation
    $validator = Validator::make(
        array(
            trans('employment.name') => $data['name'],
            trans('employment.email') => $data['email'],
            trans('employment.birth-place') => $data['birthPlace'],
            trans('employment.birth-date') => $data['birthDate'],
            trans('employment.id') => $data['id'],
            trans('employment.phone') => $data['phone'],
            trans('employment.address') => $data['address'],
            trans('employment.studies') => $data['studies'],
            trans('employment.status') => $data['status']
        ),
        array(
            trans('employment.name') => 'required|min:10',
            trans('employment.email') => 'required|email',
            trans('employment.birth-place') => 'required',
            trans('employment.birth-date') => 'required',
            trans('employment.id') => 'required|integer',
            trans('employment.phone') => 'required|alpha_num|min:8',
            trans('employment.address') => 'required|min:10',
            trans('employment.studies') => 'required',
            trans('employment.status') => 'required'
        )
    );

    if ($validator->passes()) {

      try {
        Mail::send('emails.other.employment', $data, function($message) {
            $message->to('info@globalserviclean.com')->subject(trans('employment.request'));
        });
      } catch (Exception $e) {

        return Response::json(array(
            'error' => true,
            'message' => trans('employment.send-error'),
            200
        ));

      }

      return Response::json(array(
          'error' => false,
          'message' => trans('employment.send-success'),
          200
      ));

    } else {
      $errors = '<ul>';
      foreach ($validator->messages()->all('<li>:message</li>') as $message) {
        $errors .= $message;
      }
      $errors .= '</ul>';

      return Response::json(array(
          'error' => true,
          'message' => $errors,
          200
      ));

    }
  }
}