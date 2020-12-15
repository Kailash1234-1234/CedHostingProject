<?php
/**
 * Recipe class file
 *
 * PHP Version 5.2
 *
 * @category Recipe
 * @package  Recipe
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes
 */
if($menu="login"); ?>
<?php require_once 'header.php'; ?>

        <!---login--->
            <div class="content">
                <!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form> 
                 <div class="register-top-grid">
                    <h3>personal information</h3>
                     <div>
                        <span> Name<label>*</label></span>
                        <input type="text" id="name"> 
                     </div>
                     <div>
                         <span>Email Address<label>*</label></span>
                         <input type="text" id="email"> 
                     </div>
                     <div>
                        <span>Mobile No.<label>*</label></span>
                        <input type="text" id="mobile"> 
                     </div>
                     <div class="clearfix"> </div>
                       <a class="news-letter" href="#">
                         <!-- <label class="checkbox"><input type="checkbox" id="check1" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label> -->
                       </a>
                     </div>
                     <div class=" register-bottom-grid">
                            <h3>login information</h3>
                             <div>
                                <span>Password<label>*</label></span>
                                <input type="password" id="password">
                             </div>
                             <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" id="cpassword">
                             </div>
                             <div>
                            <span>Security Question<label>*</label></span>
                            <select type="text" class="form-control"  
                            id="squestion">
                                 <option value="What was your childhood nickname ?">
                                        What was your childhood nickname ?</option>
                                 <option value="What is the name of your favourite
                                  childhoodfriend ?">
                                    What is the name of your 
                                    favourite childhoodfriend ?
                                </option>
                                    <option value="What was your favourite 
                                    place to visit as a child ?">What was your 
                                    favourite place to visit as a child ?</option>
                                    <option value="What was your dream 
                                    job as a child ?">
                                        What 
                                        was your dream job as a child ?</option>
                                    <option value="What is your favourite 
                                    teacher's nickname ?">What is your favourite
                                     teacher's nickname ?</option>
                            </select>
                             </div>
                             <div>
                                <span>Security Answer<label>*</label></span>
                                <input type="text" 
                                class="form-control" id="sanswer"> 
                             </div>
                     </div>
                </form>
                <div class="clearfix"> </div>
                <div class="register-but">
                   <form>
                       <input type="submit" value="submit" id="register">
                       <div class="clearfix"> </div>
                   </form>
                </div>
           </div>
         </div>
    </div>
<!-- registration -->

            </div>
<!-- login -->
                <!---footer--->
                <?php require_once 'footer.php'; ?>

<script>
$(document).ready(function(){
        $("#name").keypress(function(event) {
            var character = String.fromCharCode(event.keyCode);
            return isValid(character);     
        });
        function isValid(str) {
            return !/[~`.!@#$%\^&*()+=\-\[\]0123456789\\';,/{}|\\":<>\?]/g.test(str);
        }
        $(document).on("keypress", "#mobile", function(event) {
                var character = String.fromCharCode(event.keyCode);
                return isValidmobile(character);     
                });
                function isValidmobile(str) {
                    return !/[~`.!@#$%\^&*()+=\-\[\]\\';,/(a-z)(A-Z){}|\\":<>\?]/g.test(str);
                }
    $("#register").on("click", function(e){
        e.preventDefault();
        var name=$("#name").val().trim();
        var email=$("#email").val().trim();
        var mobile=$("#mobile").val().trim();
        var password= $("#password").val().trim();
        var cpassword=$("#cpassword").val().trim();
        var squestion=$("#squestion").val();
        var sanswer=$("#sanswer").val().trim();

        var letter = /^([a-zA-Z]+\s?)*$/;
        // var ansletter = /^([a-zA-Z0-9]+\s?)*$/;
        var ansletter = /(^([a-zA-Z]+\[0-9]+$))|(^([a-zA-Z])+$)/;
        var pattern = /^(0|[+91]{3})?[7-9][0-9]{9}$/;
        //var pattemail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var pattemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var pattpass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/;
        var intRegexpass = /[0-9 -()+]+$/; 
        if(name=="" || email=="" || mobile==""  || password=="" || cpassword=="" || squestion=="" || sanswer==""){
            alert("all fields are required !!")
            return false;
        } else  if(!(name.match(letter))) {
                alert("Enter Valid Name");
                return false;
        } else  if(!(email.match(pattemail))) {
                alert("Enter Valid Email");
                return false;
        } else  if(!(mobile.match(pattern))) {
                alert("invalid mobile number");
                return false;
        } else if((mobile.length <= 9) || (mobile.length > 11) ) {
                alert('Please enter 10 digit phone number.');
                return false;
            
        } else if (!(password.match(pattpass))) {
                alert("Enter Strong Password");
                return false;
        } else if(password != cpassword) {
                alert("Password mismstch !!");
                 return false;
                 
        } else if((password.length <= 2) || (password.length > 50) || (!intRegexpass.test(password))){
                    alert('password must be 8 digit long.');
                    return false;
        }else  if(!(sanswer.match(ansletter))) {
                alert("Enter Valid Security Answer !!");
                return false;
        } else {
                        $.ajax({
                            url : "useraction.php",
                            type : "POST",
                            data : {
                                    name:name,
                                    email:email,
                                    mobile:mobile,
                                    password:password,
                                    squestion:squestion,
                                    sanswer:sanswer,
                                    action:"register"
                                },
                            success : function(data){
                                if(data==1){
                                    alert("Successfully Registered !! ");
                                } else {
                                    alert("User email exist try another !! ");
                                }
                            }
                        })
                    }
                
            
        
    })

})
              
</script>
