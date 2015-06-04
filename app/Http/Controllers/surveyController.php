<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyFormRequest;

use Illuminate\Http\Request;

class surveyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('survey.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SurveyFormRequest $request)
	{

		\Mail::send('emails.survey',
        array(
        	'question_one' => $request->get('question-one'),
        	'question_two' => $request->get('question-two'),
        	'question_three' => $request->get('question-three'),
        	'question_four' => $request->get('question-four'),
        	'question_four_b' => $request->get('question-four-b'),
        	'question_five' => $request->get('car-model'),
        	'question_six' => $request->get('question-six'),
        	'question_seven' => $request->get('question-seven'),
        	'question_eight' => $request->get('question-eight'),
        	'question_nine' => $request->get('question-nine'),

            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('dylanautcity@gmail.com');
        $message->to('dylanautcity@gmail.com', 'Admin')->subject('New Survey Entry');
    });
		return \Redirect::route('survey')->with('message', 'Awesome, Thank you!');

  
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	

}
