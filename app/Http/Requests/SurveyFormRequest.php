<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SurveyFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		    'name' => 'required',
			'question-one' => 'required',
			'question-two' => 'required',
			'question-three' => 'required',
			'question-four' => 'required',
			'question-four-c' => 'required',
			'question-six' => 'required',
			'question-seven' => 'required',	
			'question-eight' => 'required'

		];
	}

}
