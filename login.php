<?php if ($menu="login"); ?>
<?php require_once 'header.php'; ?>
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form>
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" id="email"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" id="password"> 
									  </div>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="button" value="Login" id="submit" >
									</form>
									
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
<script>
$(document).ready(function(){
	
	
    $("#submit").on("click", function(e){
		// e.perventDefault();
		var email=$("#email").val();
	    var password = $("#password").val();
		if(email==''){
			alert("Email required !!");
		    return false;
		} else if (password==''){
			alert("password required !!");
			return false;
		} else {
			$.ajax({
				url : "useraction.php",
				type : "POST",
				data : {email:email, password:password, action:"login"},
				success : function(data){
					alert(data)
					if(data==1){
                      window.location.href="Admin/examples/dashboard.php";
                    } else if (data==2) {
                      window.location.href="index.php";
                    } else if(data==3){
                       alert("You Are not Approved by admin  !!"); 
                    } else {
                      alert("Email or password Do not match try again !!"); 
                    }
				}
			})
		}
	})
	

})

</script>
				<!---footer--->
				<?php require_once 'footer.php'; ?>