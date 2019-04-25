<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body style='margin: 0;'>
	<div class='container-fluid'>
		<div class='bg-primary text-center'>
			<a href="{{route('home.index')}}" class='btn text-light'>Home</a>
			<a href="{{route('view.index')}}" class='btn text-light'>Find Data</a>
		</div>
		@if(isset($message))
		<div class='bg-alert text-light text-center'>{!!$message!!}</div>
		@endif
		@if(isset($fileList))
			@if(count($fileList) > 0)
				<div class="list-group">
					@foreach($fileList as $file)	
						<a href="{{route('view.show', ['id' => $file])}}" class="list-group-item list-group-item-action">{{$file}}</a>
					@endforeach
				</div>
			@endif
		@endif
	</div>
</body>
</html>