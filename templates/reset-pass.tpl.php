<p><?php print render($intro_text); ?></p>
<div class="JobApp-user-pass-form-wrapper">
  <?php print drupal_render_children($form) ?>
</div>
    <!--This is added Code--->
    
      <div id="reset-password">
      	 <h1>Reset Password</h1>
      	 <p><strong>This is a one-time login for admin and will expire.</strong></p>
      	<div class="form-item form-type-textfield form-item-name">
      		<label>Username (Email Address)<span class="form-required" title="This field is required.">*</span></label>
      		<input type="text" id="email-pass" name="name" class="form-text required" />
      	</div>
      	<div id="line"></div>
      	<div id="edit-actions" class="form-actions form-wrapper">
      	<input type="submit" class="form-submit reset-pass" id="edit-submit" name="op" value="Login"/>
      	</div>
      </div>

 