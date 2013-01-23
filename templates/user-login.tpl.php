<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
<![endif]-->

<p><?php print render($intro_text); ?></p><?php $impath = drupal_get_path('theme', 'jobapp');?>
<div class="JobApp-user-login-form-wrapper">
  <?php print drupal_render_children($form) ?> 
 </div> 
  <!--This is added Code--->
  <div id="log">

    <div id="register-now">
    	<div id="img-reg-now"><img src="../<?php print $impath?>/img/photo.steps.png" /></div>
      <h1>Register Now</h1>
      <p><strong>Welcome to VISTA STAFFING SOLUTIONS online application page.</strong><br>
      To apply, please create an account below. It only takes two minutes*.</p>
      <div id="create-acc"><a href="register">Create an account</a></div>
      <p>*User with an existing MY VISTA account are still required to create<br> a new applicant account.</p>
    
    </div>
    
		<div id="registered-user">
			<div id="img-reg-user"><img src="../<?php print $impath?>/img/photo.tablet.png" /></div>
      <h1>Registered Users</h1>
      <p>Sign is to complete or check the status of your applications </p> 
      <input type="hidden" name="form_build_id" value="">
      <input type="hidden" name="form-id" value="user_login_block">
      <input calss="username-log form-text required" type="text" id="username-txt edit-name" size="15" name="name" maxlength="60" value="User Name (email address)" onblur="if (this.value == ''){this.value = 'User Name (email address)'; }" 
      onfocus="if (this.value == 'User Name (email address)') {this.value = '';}">
      
      <input calss="password-log form-text required" type="password" id="password-txt edit-pass" name="pass" maxlength="128" value="" onblur="if (this.value == ''){this.value ='Password'; }" 
      onfocus="if (this.value == 'Password') {this.value = '';}">
      <div id="login-btn">
      <input type="submit" class="login-btn form-submit" id="edit-submit" value="Login" name="op" >
      </div>
      <div id="forgot-pass"><a href="user/password"><p>Forgot your password?</p></a></div>
  
    </div>
    <hr>
  </div><!--end of the log div is here-->
  



<!--<p><?php print $intro_text; ?></p>

<div class="my-form-wrapper">
  <?php print $rendered; ?>
</div>-->
