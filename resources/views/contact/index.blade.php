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

   <h1>Contact Dylan</h1>


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

     


           {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

    

     </div>

        <div class="col-md-6 survey-col">

            <div class="form-group">
      {!! Form::label('name', 'Your name') !!}
                     <div class="checkbox">
                      
                      {!! Form::text('name', '', ['class' => 'form-control']); !!}
                    
        </div>
  

                <div class="form-group">

       {!! Form::label('Email-label', 'Your email') !!}
                     <div class="checkbox">
                     
                      {!! Form::text('email', '', ['class' => 'form-control']); !!}
                    
                     </div>
                    
               <div class="form-group">

                 <div class="form-group">
            
      
                     <div class="checkbox">
                     
                      {!! Form::textarea('message', '', ['class' => 'form-control']); !!}
                    
                     </div>
                    
               <div class="form-group">
         {!! Form::submit('Submit!', array('class'=>'btn btn-primary')) !!}
                </div>

             
     

               {!! Form::close() !!}

            

     </div>    
      </div>    
	


	</body>
</html>






