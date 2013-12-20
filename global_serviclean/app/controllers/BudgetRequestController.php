<?php

class BudgetRequestController extends \BaseController {

  /**
   * POST form processing.
   *
   * @return Response
   */
  public function store() {
    $data = array(
        'name' => Input::get('name'),
        'email' => Input::get('email'),
        'company' => Input::get('company'),
        'service' => Input::get('service'),
        'phone' => Input::get('phone'),
        'address' => Input::get('address'),
        'detail' => Input::get('detail')
    );
    // Validation
    $validator = Validator::make(
        array(
            trans('services.contact-name') => $data['name'],
            trans('services.email') => $data['email'],
            'service' => $data['service'],
            trans('services.phone') => $data['phone']
        ),
        array(
            trans('services.contact-name') => 'required|min:5',
            trans('services.email') => 'required|email',
            'service' => 'required',
            trans('services.phone') => 'alpha_num|min:8'
        )
    );

    if ($validator->passes()) {

      try {
        Mail::send('emails.other.budget', $data, function($message) {
            $message->to('info@globalserviclean.com')->subject(trans('services.email-subject', array('service' => $data['service'])));
        });
      } catch (Exception $e) {

        return Response::json(array(
            'error' => true,
            'message' => trans('services.send-error'),
            200
        ));

      }

      return Response::json(array(
          'error' => false,
          'message' => trans('services.send-success'),
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