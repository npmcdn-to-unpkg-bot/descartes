<!DOCTYPE html>
<html>
    <head>
        <title>HVK30</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" type="text/css" href="css/main.css"> 
    </head>
    <body>
        <div class="container">









			
			{!! Form::open(array('method' => 'get', 'url' => 'emoticons')) !!}

				{!! Form::text(
				    'name', 
					null, 
					array(
				    	'required', 
						'placeholder' => 'How are you feeling?'
					)
				) !!}

				{!! Form::submit('Search!') !!}
			{!! Form::close() !!}









		</div>
		@include('common.footer')
    </body>
</html>
