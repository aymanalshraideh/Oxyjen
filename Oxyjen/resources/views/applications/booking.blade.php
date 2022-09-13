<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Booking Application</title>
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
           
            <form class="form-detail" action="" method="" id="myform"
                enctype="multipart/form-data">
                @csrf

                <div class="form-center">
                    <h2>Booking Details</h2>
                    <div class="form-row">
                        <input type="text" name="name" class="Partner" id="Partner"
                            placeholder="Name" required>
                    </div>

                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text" required
                            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder=" Email">
                    </div>

                                      
                        <div class="form-row ">
                            <input type="text" name="phone" class="phone" id="phone"
                                placeholder="Phone Number" required>
                        </div>
                    
                        <div class="form-row">
                            <input type="date" name="bookingDate" class="bookingDate" id="bookingDate"
                                placeholder="Booking Date" required>
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
