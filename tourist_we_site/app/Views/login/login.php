<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				<div class="form-left-last">
					<input  type="submit" name="account" class="account" value="Sign " >
				</div>
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
				<h2>Sign up </h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text" pattern="[A-Za-z\s]+">
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text" pattern="[A-Za-z\s]+">
					</div>
				</div>

				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="phone">Phone</label>
						<input type="text" name="phone" id="phone" class="input-text" class="input-text" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
					</div>
					
					<div class="form-row form-row-1">
					<label for="last_name">Gender</label>
				<select name="gender" id="gender"  class="select">
					<option  value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
		         	</div>
				</div>

				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="city">City</label>
						<input type="text" name="city" id="city" class="input-text" pattern="[A-Za-z\s]+">
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Pays</label>
						<input type="text" name="pays" id="pays" class="input-text" pattern="[A-Za-z\s]+">
					</div>

					

				</div>
				<div class="form-row">
					<label for="your_email"> Email</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Sign in" onclick="navigateToPage()">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
    // Avoid form submission during demo
    jQuery.validator.setDefaults({
        debug: true,
        success: function(label) {
            label.attr('id', 'valid');
        },
    });

    // Validate all forms with the class `form-detail`
    $(".form-detail").each(function() {
        $(this).validate({
            rules: {
                first_name: {
                    required: true,
                    pattern: "[A-Za-z\\s]+"
                },
                last_name: {
                    required: true,
                    pattern: "[A-Za-z\\s]+"
                },
                phone: {
                    required: true,
                    digits: true
                },
                city: {
                    required: true,
                    pattern: "[A-Za-z\\s]+"
                },
                pays: {
                    required: true,
                    pattern: "[A-Za-z\\s]+"
                },
                your_email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                },
                comfirm_password: {
                    required: true,
                    equalTo: "#password"
                },
                checkbox: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: "Please enter your first name",
                    pattern: "Only letters and spaces are allowed"
                },
                last_name: {
                    required: "Please enter your last name",
                    pattern: "Only letters and spaces are allowed"
                },
                phone: {
                    required: "Please enter your phone",
                    digits: "Please enter only digits"
                },
                city: {
                    required: "Please enter your city",
                    pattern: "Only letters and spaces are allowed"
                },
                pays: {
                    required: "Please enter your country",
                    pattern: "Only letters and spaces are allowed"
                },
                your_email: {
                    required: "Please provide an email",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please enter a password"
                },
                comfirm_password: {
                    required: "Please confirm your password",
                    equalTo: "Passwords do not match"
                },
                checkbox: {
                    required: "You must agree to the terms and conditions"
                }
            }
        });
    });

	function navigateToPage() {
            // Remplacez 'page2.html' par le chemin de votre fichier HTML cible
            window.location.href = 'sign.php';
        }
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>