<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body style='margin: 0;'>
	<div class='container-fluid'>
		<div class='bg-primary text-center'>
			<a href="{{route('home.index')}}" class='btn text-light'>Home</a>
			<a href="{{route('view.index')}}" class='btn text-light'>Find Data</a>
		</div>
		@if(isset($notice))
		<div class='bg-alert text-light text-center'>{!!$notice!!}</div>
		@endif
		<form method='post' action="{{route('view.store')}}" class='container mt-5'>
			{{csrf_field()}}
			<input type="hidden" name="filename" value="{{isset($arr['filename'])?$arr['filename']:null}}">
			<div class='form-group'>
				<label for='name'>Name<b class='text-danger'>*</b></label>
				<input type="text" id='name' name="name" class='form-control' placeholder='Your Name Here' value="{{isset($arr[0])?$arr[0]:null}}" required readonly>
			</div>
			<div class='form-group'>
				<label for='email'>Email<b class='text-danger'>*</b></label>
				<input type="email" id='email' name="email" class='form-control' placeholder='abc@email.com' value="{{isset($arr[1])?$arr[1]:null}}" required>
				<small class='form-text text-muted'>Your email is safe with us.</small>
			</div>
			<div class='form-group'>
				<label for='dob'>Date of Birth<b class='text-danger'>*</b></label>
				<input type="date" id='dob' name="dob" class='form-control' placeholder='YYYY-MM-DD' value="{{isset($arr[2])?$arr[2]:null}}" required>
			</div>
			<div class='form-group'>
				<label for='phone'>Phone Number<b class='text-danger'>*</b></label>
				<input type="number" id='phone' name="phone" class='form-control' placeholder='0XXX XXXX XXXX' maxlength='13' value="{{isset($arr[3])?$arr[3]:null}}" required>
			</div>
			<div class='form-group'>
				<label for='gender'>Gender<b class='text-danger'>*</b></label>
				<select id='gender' name='gender' class='form-control' required>
					<option value=''>Choose one</option>
					<option {{isset($arr[4]) && $arr[4]=='male'?'selected':null}} value='male'>Male</option>
					<option {{isset($arr[4]) && $arr[4]=='female'?'selected':null}} value='female'>Female</option>
				</select>
			</div>
			<div class='form-group'>
				<label for='address'>Address<b class='text-danger'>*</b></label>
				<input type="text" id='address' name="address" class='form-control' placeholder='Placeholder St.' value="{{isset($arr[5])?$arr[5]:null}}" required>
			</div>
			<div class='form-group'>
				<input type="submit" name="submit" value='Update' class='btn btn-primary px-5'>
			</div>
		</form>
	</div>
</body>
</html>