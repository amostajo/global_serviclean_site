<?php

class ContactUsController extends \BaseController {

	/**
	 * POST form processing.
	 *
	 * @return Response
	 */
	public function store() {
		$data = array(
				'name' 			=> Input::get('name'),
				'email' 		=> Input::get('email'),
				'feedback' 	=> Input::get('feedback'),
				'phone' 		=> Input::get('phone'),
		);
		// Validation
		$validator = Validator::make(
        array(
            trans('contact.name') => $data['name'],
            trans('contact.email') => $data['email'],
            trans('contact.feedback') => $data['feedback']
        ),
				array(
						trans('contact.name') => 'required|min:5',
						trans('contact.email') => 'required|email',
						trans('contact.feedback') => 'required|min:10'
				)
		);

		if ($validator->passes()) {

			try {
        Mail::send('emails.other.contact', $data, function($message) {
            $message->to('info@globalserviclean.com')->subject(trans('contact.contact-request'));
        });
			} catch (Exception $e) {

				return Response::json(array(
						'error' => true,
						'message' => trans('contact.send-error'),
						200
				));

			}

			return Response::json(array(
					'error' => false,
					'message' => trans('contact.send-success'),
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