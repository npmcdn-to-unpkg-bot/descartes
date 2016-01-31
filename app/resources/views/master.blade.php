<!DOCTYPE html>
<html>
    <head>
        <title>HVK30</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" type="text/css" href="../css/main.css"> 
    </head>
    <body>
        <div class="container">
        	@yield('content')      
        </div>
		@include('common.footer')	
		@yield('scripts')
    </body>
</html>
