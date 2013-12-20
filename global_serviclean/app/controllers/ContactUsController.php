<?php

class ContactUsController extends \BaseController {

	/**
	 * POST form processing.
	 *
	 * @return Response
	 */
	public function store() {
		$data = array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'feedback' => Input::get('message')
		);
		// Validation
		$validator = Validator::make(
				$data,
				array(
						'name' => 'required|min:5',
						'email' => 'required|email',
						'feedback' => 'required|min:10'
				)
		);

		if ($validator->passes()) {

			try {
				Mail::send('emails.support.contact', $data, function($message) {
				    $message->to('support@amsgames.com')->subject(trans('email.contactSuject'));
				});
			} catch (Exception $e) {

				return Response::json(array(
						'error' => true,
						'message' => trans('global.mailError'),
						200
				));

			}

			return Response::json(array(
					'error' => false,
					'message' => trans('contact.successMesage'),
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