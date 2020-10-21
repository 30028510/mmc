<?php
   include("header.php");
   ?>
<div class="login_tb contactus">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form"  method="post" id="signupForm">
               <h3 class="omb_authTitle robness">Contact us</h3>
               <hr class="colorgraph">
               <div class="contactus-map">	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.6965917858097!2d76.71126091448016!3d30.698811694319083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee9255555555%3A0x1017eda44f6f4fe9!2sAnaya+Communication+Private+Limited!5e0!3m2!1sen!2sin!4v1467128146067" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
               <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <br></br>
                     <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" tabindex="1" required>
                     </div>
                     <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="2" required>
                     </div>
                     <div class="form-group">
                        <input type="number" name="subject" id="subject" class="form-control input-lg" placeholder="Phone number" tabindex="3" required>
                     </div>
                     <div class="form-group">
                        <textarea rows="7" cols="76" name="message" placeholder="Message" tabindex="4" class="form-control input-lg">
                        </textarea>
                     </div>
                     <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit">Send</button>
                     <?php
                        if (isset($_POST["submit"])) {
                        	$username=$_POST['username'];
                        	$email=$_POST['email'];
                        	$subject=$_POST['subject'];
                        	$message=$_POST['message'];
                        $to = "shameemmohammed@gmail.com";
                        $subject = "Contact us";
                        
                        $txt	= "<img src='http://anayaclients.com/Potair/yourmmc/Images/mmc.png'><br><br>"." Name:$username<br> Email: $email<br>Subject: $subject<br>Message : $message";
                           	$headers  = "MIME-Version: 1.0\r\n";
                        	$headers .= "Content-type: text/html; charset=utf-8\r\n";
                        	$headers .= "From: $email\r\n";
                        
                        mail($to,$subject,$txt,$headers); }
                        else{
                        	
                        }
                        ?>	
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                     <h3 class="con-title">Contact Detail</h3>
                     <p>E 253 Eltop Industrial Area Phase 8 B,</p>
                     <p> Mohali, Sahibzada Ajit Singh Nagar, </p>
                     <p>Punjab 160071, India</p>
                  </div>
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer.php");?>