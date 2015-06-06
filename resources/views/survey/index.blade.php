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

   <h1>Driving Awareness Survey</h1>
   <h3>Help me help you</h3>

   <p>How do we get people to focus on their driving? 
   The root of the problem is that they are unaware, 
   unfocused and on auto-pilot. What we’ve learnt is that the 
   amount of mobile usage that coincides with New Zealand’s 
   economic rank, means businesses focus on the quick route to 
   solving these issues. With mobile apps. My curiosity lies within 
   the belief that the best way to remove a habit, is to get away from it. 
   As Charles Duhigg found, the best way to get away from a habit, is on 
   vacation, where the habits aren’t accessible. In the context of a car, 
   it is to not use your phone at all. To limit the access to your phone. 
    <br>
     <br>
   These questions have been constructed to provide us with the best feedback for moving forward with this issue. 
   Thanks a bunch for participating!</p>
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
     {!! Form::label("0", "Your Name", ['class' => 'survey-name']) !!}
     {!! Form::text('name') !!} 

       </div>
     </div>

        <div class="col-md-6 survey-col">

               <div class="form-group">
               	{!! Form::label('1', 'Do you have a registered drivers lisence?', ['class' => 'survey-label']) !!}
      
                     <div class="checkbox">
                     {!! Form::checkbox('question-one[]', 'yes', false, ['class' => 'form-q-one']) !!}
                     {!! Form::label('one-yes', 'yes') !!}
               	    
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-one[]', 'no', false, ['class' => 'form-q-one']) !!}
                     {!! Form::label('one-no', 'no') !!}
                     
                     </div>
    
               </div>

                <div class="form-group">
                 {!! Form::label('2', 'Do you text and drive?') !!}
      
                    <div class="checkbox">
                     {!! Form::checkbox('question-two[]', 'yes', false, ['class' => 'form-q-two']) !!}
                     {!! Form::label('two-yes', 'yes') !!}
                    
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-two[]', 'no', false, ['class' => 'form-q-two']) !!}
                     {!! Form::label('two-no', 'no') !!}
                     
                     </div>
    
               </div>

                <div class="form-group">
                {!! Form::label('3', 'How far do you travel each day?') !!}
      
                     <div class="checkbox">
                     {!! Form::checkbox('question-three[]', 'Between 0 - 10km', false, ['class' => 'form-q-three']) !!}
                     {!! Form::label('three-yes-one', 'Between 0 - 10km') !!}
                     
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-three[]', 'Between 10 - 50km', false, ['class' => 'form-q-three']) !!}
                     {!! Form::label('three-yes-one', 'Between 10 - 50km') !!}
                     
                     </div>

                      <div class="checkbox">
                      {!! Form::checkbox('question-three[]', 'Between 50 - 100km', false, ['class' => 'form-q-three']) !!}
                      {!! Form::label('three-yes-three', 'Between 50 - 100km') !!}
                     
                     </div>
    
               </div>


                <div class="form-group">
                 {!! Form::label('4', 'What kind of phone do you use?') !!}      
                     <div class="checkbox">
                     {!! Form::checkbox('question-four[]', 'Android', false) !!}
                     {!! Form::label('four-yes', 'Android') !!}
                     
                     </div>
                     
                     <div class="checkbox">
                     {!! Form::checkbox('question-four[]', 'iOS', false) !!}
                     {!! Form::label('four-yes-two', 'iOS') !!}
                     
                     </div>
    
               </div>

               <div class="form-group">
                 {!! Form::label('4-B', 'What distracts you when driving?') !!}
      
                     <div class="checkbox">
                     {!! Form::textarea('question-four-b', false, ['class' => 'form-q-nine','required' => 'required']) !!}
                
                     
                     </div>
                    
    
               </div>

               <div class="form-group">
                 {!! Form::label('4-C', 'On a scale of 1-10, how do you measure your stress whilst driving?') !!}
      
                     <div class="checkbox">
                     {!! Form::text('question-four-c', false, ['class' => 'form-q-nine', 'required' => 'required']) !!}
                
                     
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






