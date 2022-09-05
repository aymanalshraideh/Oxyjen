<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Partner Application</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="/../appStyle/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="/../appStyle/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="appStyle/css/styleP.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<style>
		
	</style>
		
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
            <form class="form-detail" action="{{ route('add-partner') }}" method="post" id="myform"
                enctype="multipart/form-data">
                @csrf

                <div class="form-center">
                    <h2>Partner Details</h2>
                    <div class="form-row">
                        <input type="text" name="name" class="Partner" id="Partner"
                            placeholder="Partner Name" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="companyName" class="companyName" id="companyName"
                            placeholder="companyName" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="location" class="location" id="location" placeholder="Location"
                            required>
                    </div>

            
                      
                        <div class="form-row ">
                            <input type="text" name="phone" class="phone" id="phone"
                                placeholder="Phone Number" required>
                        </div>
                    
                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text" required
                            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder=" Email">
                    </div>

                    <div class="form-row-last">
                        <input type="submit" name="submit" class="sub" value="Submit!">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
