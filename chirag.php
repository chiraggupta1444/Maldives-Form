<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maldives Booking</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="container" style="height:750px">
        <h1 style= "font-family:georgia,garamond,serif;font-size:58px;font-style:italic;text-align: center;text-decoration: underline;">Maldives</h1>
        <h3 style= "font-family:georgia,garamond,serif;font-size:58px;font-style:italic;">Online Booking of Maldives Resort.</h3>
        <div class="row">
            <div id="div1"></div>
            <div class="col-md-4" style=""><img src="img.jpg" width="375" height="531"></div>
            <div class="col-md-8" style="background-color:#f9f7f8;">
                <div class="row" style="padding: 73px;">
                    <form id="myform" method="post">
                        <div class="col-md-6">
                            <label for="inputcfirst name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="inputname" id="inputname" onkeypress="return Validatename(event);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputlast name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputlastname" name="inputlastname"  onkeypress="return Validatename(event);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputmobile no" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="inputmobileno" name="inputmobileno" onkeypress="return Validate(event);" >
                        </div>
                        <div class="col-md-6" require>
                            <label for="inputdate of birth" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" style="line-height: 22px !important;" id="inputdate_of_birth" name="inputdate_of_birth" >
                        </div>
                        <div class="col-md-12">
                            <label for="inputemail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputemail" name="inputemail" >
                        </div>
                        <div class="col-md-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="inputCity" >
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" name="inputState" class="form-select form-control">
                                <option value="" ></option>
                                <option value="AP">Delhi</option>
                                <option value="gu">Gujrat</option>
                                <option value="pu">Punjab</option>
                                <option value="uP">Uttar Pradesh</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputpincode" class="form-label">Pin Code</label>
                            <input type="text" class="form-control" id="inputpincode" name="inputpincode" >
                        </div>
                        <div class="col-md-12" style='margin-top: 15px;'>
                            <input type="checkbox" name="agree" id="agree_checkbox" value="yes" />
                            <label for="agree_checkbox">I agree to the terms and conditions</label>
                        </div>
                        <div class="col-md-12" >
                            <button type="button" onclick='Submitform();' style="margin-top:15px" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
   function Submitform()
{
	var firstname = $("#inputname").val();
	var lastname = $("#inputlastname").val();
	var phone = $("#inputmobileno").val();
	var date = $("#inputdate_of_birth").val();
	var email = $("#inputemail").val();
	var Address = $("#inputAddress").val();
	var city = $("#inputCity").val();
	var state=$("#inputState").val();
	var pincode = $("#inputpincode").val();
	var error = '0';

	var intRegex = /[0-9 -()+]+$/;


	if(firstname.trim() == '')
	{
        
		swal({
		 title: "Error!",
		 text: "Please first enter name!",
		 icon: "error",
		});
		error = '1';
		$("#inputname").focus();
		
        //$("#inputname").css('border','1px solid #ff0000');
        return false;
	}

	if(lastname.trim() == '')
	{
		swal({
		 title: "Error!",
		 text: "Please last enter name!",
		 icon: "error",
		});
		error = '1';
		$("#inputlastname").focus();
		return false;
	}
	if(phone.trim() == '')
	{
		swal({
		 title: "Error!",
		 text: "Please enter contact number!",
		 icon: "error",
		});
		error = '1';
		$("#inputmobileno").focus();
		return false;
	}
	else if((phone.length < 10) || (!intRegex.test(phone)))
	{
		swal({
		 title: "Error!",
		 text: 'Please enter a valid phone number.!',
		 icon: "error",
		});
		error = '1';
		$("#inputmobileno").focus();
		return false;
	}
	
/*	if(date==char)
	{  
		swal({
		 title: "Error!",
		 text: "Please Mention your date of birth!",
		 icon: "error",
		});
		error = '1';
		$("#inputdate_of_birth").focus();
		return false;}
	*/
	if(email.trim() == '')
	{
		swal({
		 title: "Error!",
		 text: "Please enter email!",
		 icon: "error",
		});
		error = '1';
		$("#inputemail").focus();
		return false;
	}
	else if(email != '')
	{
		if(IsEmail(email)==false){
			 swal({
			 title: "Error!",
			 text: "Invalid email!",
			 icon: "error",
			});
			error = '1';
			$("#inputemail").focus();
			return false;
		}
	}
	if(Address == '')
	{  
		swal({
		 title: "Error!",
		 text: "Please enter Your Address!",
		 icon: "error",
		});
		error = '1';
		$("#inputAddress").focus();
		return false;
	}
    if(city.trim() == '')
	{  
		swal({
		 title: "Error!",
		 text: "Please enter your City!",
		 icon: "error",
		});
		error = '1';
		$("#inputCity").focus();
		return false;
	}
	 if(state=='')
	 {  
	 	swal({
	 	 title: "Error!",
	 	 text: "Please enter State!",
	 	 icon: "error",
	 	});
	 	error = '1';
	 	$("#inputState").focus();
	 	return false;
	 }
	
/* if(document.myform.type.selectedIndex==0)
 { alert("Please select your member type");
 document.myform.type.focus();
 return false;
 }*/

	if(!$("#agree_checkbox").prop("checked"))
	{
		swal({
		 title: "Error!",
		 text: "Please agree the Terms and Condition!",
		 icon: "error",
		});
		error = '1';
		$("#agree_checkbox").focus();
		return false;
	}

	  
	if(error == '0')
	{
		//$("#myform").submit();
        var dta = $("#myform").serialize();
        //console.log(dta);
        $.ajax({
                data:dta,
                url: "demo_test.php", success: function(result){
                    //alert(result);
                // $("#div1").html(result);
                swal({
				title: 'Success!',
				text: result,
				icon: 'success',
				});
        }});
		document.getElementById("myform").reset();
	}
}

function IsEmail(email) {
       
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
        return false;
    }
	else
	{
        return true;
    }
}
// function validateDOB()
// {
//     var dob = document.forms["myform"]["inputdate_of_birth"].value;
//     var pattern = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
//     if (dob == null || dob == "" || !pattern.test(dob)) {
       
//         return false;
//     }
//     else {
//         return true
//     }
// }


</script>
<script>    
    function Validate(e) {
        var keyCode = e.keyCode || e.which;
       console.log(keyCode);
 
        //Regex for Valid Characters i.e. Alphabets and Numbers.
        var regex = /^[0-9]+$/;
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
			alert(  "Only  Numbers are allowed.");
        }
 
        return isValid;
    }
   </script>
   <script>
       function Validatename(e) {
        var keyCode = e.keyCode || e.which;
       console.log(keyCode);
 
        //Regex for Valid Characters i.e. Alphabets and Numbers.
        var regex = /^[A-Za-z]+$/;
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            alert(  "Only Alphabets are allowed.");
        }
 
        return isValid;
    }
   </script>


	</body>
</html>
