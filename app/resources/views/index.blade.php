<!DOCTYPE html>
<html>
    <head>
        <title>HVK30</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" type="text/css" href="css/main.css"> 
    </head>
    <body>
        <div class="container">









			
			{!! Form::open(array('method' => 'POST', 'action' => 'FormController@submit')) !!}
				{!! Form::text(
				    'feel', 
					null, 
					array(
				    	'required', 
						'placeholder' => 'How are you feeling?'
					)
				) !!}
				{{ Form::hidden('method', 'search') }}
				{!! Form::submit('Search!') !!}
			{!! Form::close() !!}









		</div>
		@include('common.footer')
    </body>
</html>
