<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Start up Company</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="/../appStyle/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="/../appStyle/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="appStyle/css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
</head>
<body class="form-v10">
	
		
	<div class="page-content">
		<div class="form-v10-content">
			@if (Session::has('flash_message'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<i class="fa fa-times"></i>
				</button>
				<strong>{{ session('flash_message') }}</strong> 
			</div>
			@endif
			<form class="form-detail" action="{{route('add-startup')}}" method="post" enctype="multipart/form-data" id="myform">
				@csrf
				<div class="form-left">
					<h2>Company Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="companyName" id="companyname" class="input-text" placeholder="Company Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="location" id="location" class="input-text" placeholder="Company Location"  required>
						</div>
					</div>
						
						<div class="form-row">
							<div class="form-group">
								<textarea name="description" id=" desc"  cols="65" rows="7" placeholder="Write A Description..." required="required"
									class="form-control bg-white"></textarea>
							</div>
						</div>
						<div class="form-row">
							
							<div class="form-group">
								<label for="image" >Upload image:</label>
							<input type="file" id="img" name="image" accept="image/*">
							</div>
							</div>
					</div>
					
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="ceoName" class="ceon" id="ceoN" placeholder="Ceo Name" required>
					</div>
				
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="+ 962" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="ceoemail" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="CEO Email">
					</div>
					
					<div class="form-row-last">
						<input type="submit" name="submit" class="sub" value="Submit You Startup Company!">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>