<html>
	<head>
		<title>Text Driving</title>


		<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="{{ asset('/js/navigation.js') }}"></script>
    <script src="{{ asset('/js/form.js') }}"></script>

		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script> <!-- 16 KB -->

<style type="text/css">
  body{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #333;

  }
  p{
    font-weight: 400;
    color: #575353;
  }
</style>
	</head>
	<body> 

<div class="container survey-header">

   <h1>Driving Awareness Design Survey</h1>
   <h3>Design focus: Aesthetics, Disruption, Viability</h3>

   <p>

   Welcome to hands-on, an integrative awareness control system that encourages drivers to focus on road awareness. The design consists of a copper steering handle that detects pulsations accross the body. This let's the system know that both hands are on the wheel. When one hand is off for more than ten seconds, indicators communicate to the driver that they are unfocused. What's important, is that we understand what is aesthetically pleasing to the driver, what is the least disruptive and what prototype is likely to achieve the most success towards focussing a driver. Smart systems in vehicles are a great way to tackle on-going diverted traffic accidents occuring yearly, as we move slowly towards society's integation of autonomous cars. Thanks for participating! 

    <br>
   <br>

      @if(Session::has('message'))
          <div class="alert alert-info">
              {{Session::get('message')}}
             </div>
          @endif
</div>

<div class="container">
     
     <div class="row">


     <ul>
    @foreach($errors->all() as $error)
        <li class="red">{{ $error }}</li>
    @endforeach
</ul>

     


               {!! Form::open(array('route' => 'survey_store', 'class' => 'form')) !!}

    
     <div class="col-md-12">
     <div class="form-group">
     {!! Form::label("0", "Aesthetics", ['class' => 'survey-name']) !!}

       </div>
     </div>

        <div class="col-md-6 survey-col">

         <div class="form-group">
           <div class="col-md-12">
              	{!! Form::label('1', 'How do you rate the light indicators aesthetics?', ['class' => 'survey-label']) !!}
               </div>
             <div class="col-md-12">
              <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '1', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('1') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '2', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('2') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '3', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('3') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '4', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('4') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '5', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('5') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '6', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('6') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '7', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('7') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '8', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('8') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '9', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('9') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-one[]', '10', false, ['class' => 'form-q-one']) !!}
                {!! Form::label('10') !!}
              </div>
            </div>
     </div>


     <div class="form-group">
           <div class="col-md-12">
                {!! Form::label('1', 'How do you rate the buzzers aesthetics?', ['class' => 'survey-label']) !!}
               </div>
             <div class="col-md-12">
              <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '1', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('1') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '2', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('2') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '3', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('3') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '4', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('4') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '5', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('5') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '6', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('6') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '7', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('7') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '8', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('8') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '9', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('9') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-two[]', '10', false, ['class' => 'form-q-two']) !!}
                {!! Form::label('10') !!}
              </div>
            </div>
     </div>

     <div class="form-group">
           <div class="col-md-12">
                {!! Form::label('1', 'How do you rate the chair vibrations aesthetics?', ['class' => 'survey-label']) !!}
               </div>
             <div class="col-md-12">
              <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '1', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('1') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '2', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('2') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '3', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('3') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '4', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('4') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '5', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('5') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '6', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('6') !!}
              </div>
              <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '7', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('7') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '8', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('8') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '9', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('9') !!}
              </div>
               <div class="col-md-1">
                {!! Form::checkbox('question-three[]', '10', false, ['class' => 'form-q-three']) !!}
                {!! Form::label('10') !!}
              </div>
            </div>
     </div>


    </div>


     <div class="col-md-6 survey-col">

               <div class="form-group">
                 {!! Form::label('5', 'What model car do you have?') !!}
                 <br>
                 <br>
                 {!! Form::text('car-model', '', array('required' => 'required')); !!}
    
               </div>


                <div class="form-group">
                {!! Form::label('6', 'Roughly, how long do you have your phone on you each day? (Between 7am and 7pm)', ['class' => 'survey-label']) !!}
                    
                     <div class="checkbox">
                     {!! Form::checkbox('question-six[]', 'less-than-half', false, ['class' => 'form-q-six']) !!}
                     {!! Form::label('question-one', 'Less than 4 hours') !!}
                     
                     </div>

                     <div class="checkbox">
                     {!! Form::checkbox('question-six[]', 'between 4 - 8 hours', false, ['class' => 'form-q-six']) !!}
                     {!! Form::label('question-one', 'Less than half a day') !!}
                     
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-six[]', 'More than 8 hours', false, ['class' => 'form-q-six']) !!}
                     {!! Form::label('question-six', 'All day') !!}
                     
                     </div>
    
               </div>


               <div class="form-group">
                 {!! Form::label('7', 'Do you find text/driving a dangerous behaivour?') !!}
      
                     <div class="checkbox">
                     {!! Form::checkbox('question-seven[]', 'yes', false, ['class' => 'form-q-seven']) !!}
                     {!! Form::label('seven-yes', 'yes') !!}
                     
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-seven[]', 'no', false, ['class' => 'form-q-seven']) !!}
                     {!! Form::label('seven-no', 'no') !!}
                     
                     </div>
    
               </div>

               <div class="form-group">
                 {!! Form::label('8', 'Do you remember what you thought about during your last commute?') !!}
      
                     <div class="checkbox">
                     {!! Form::checkbox('question-eight[]', 'yes', false, ['class' => 'form-q-eight']) !!}
                     {!! Form::label('eight-yes', 'yes') !!}
                     
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-eight[]', 'no', false, ['class' => 'form-q-eight']) !!}
                     {!! Form::label('eight-no', 'no') !!}
                     
                     </div>
    
               </div>

                 <div class="form-group">
                 {!! Form::label('9', 'What do you have to say?') !!}
      
                     <div class="checkbox">
                     {!! Form::textarea('question-nine', false, ['class' => 'form-q-nine']) !!}
                
                     
                     </div>
                    
    
               </div>

               <div class="form-group">
         {!! Form::submit('Submit!', array('class'=>'btn btn-primary')) !!}
                </div>

             
     

               {!! Form::close() !!}

            

     </div>    
      </div>    
	


	</body>
</html>






