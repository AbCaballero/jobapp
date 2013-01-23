<p><?php print render($intro_text); ?></p>
<div class="JobApp-user-pass-form-wrapper">
  <?php print drupal_render_children($form) ?>
</div>
    <!--This is added Code--->
    
      <div id="forgot-pass-reset">
      	 <h1>Forgot Password</h1>
      	 <p>Enter your username and answer the challenge question.<br>
      	 	<strong>We'll email you a link to reset your password.</strong>
      	 </p>
      	<div class="form-item form-type-textfield form-item-name">
      		<label>Username (Email Address)<span class="form-required" title="This field is required.">*</span></label>
      		<input type="text" id="email-pass" name="name" class="form-text required" />
      	</div>
      	<div id="line"></div>
      	<div id="edit-action" class="form-actions form-wrapper">
      	<input type="submit" class="form-submit forgot-pass-btn" name="op" value="Submit >"/>
      	</div>
      </div>

 