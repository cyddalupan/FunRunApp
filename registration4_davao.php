<div role="main" class="ui-content">
	<div class="race_category reg4height">
    	<div class="race_category_logo">
            <img src="img/race_category_logo.jpg" />  
        </div>
        <div class="progress_bar-row">
            <div class="progress-label">
                <h1>Contact Person<br>
					In Case of Emergency</h1>
            </div>
            <div class="progress_bar">
                <img src="img/emergency-progress.png"  />
            </div>
        </div>
 	   <br><br>
       <div class="df-font" align="left">
       		<div class="inner_form">
				<div class="ui-grid-solo">                    
                    <h3>Name<p class="red">*</p></h3>
                    <input type="text" name="emergency-fullname" id="emergency-fullname" placeholder="Fullname" >
                    <h3>Home Address<p class="red">*</p></h3>
                    <textarea rows="5" name="emergency-address" id="emergency-address" placeholder="Address" style="width:98.7%;"></textarea>
                    <h3>Contact Number.<p class="red">*</p></h3>
                    <input type="text" name="emergency-number" id="emergency-number" placeholder="Contact Number">
                    <h3>Relationship<p class="red">*</p></h3>
                    <select name="emergency-relationship" id="emergency-relationship">
                        <?php include('relationship_list.php'); ?>
                    </select>
                </div>
                <div class="termsboxes">
                    <div class="ui-grid-a">
                        <div class="ui-block-a"><label><input type="checkbox" name="termsAndCondition" id="termsAndCondition"> I Agree to the Terms and Conditions</label></div>
                    </div><!-- /grid-a -->
                    <div class="ui-grid-a">
                        <div class="ui-block-a"><label><input type="checkbox" name="newsletter" value="yes" id="newsletter" checked>I would like to recieve information<br>
                        on McDonald's events and Promotions.</label></div>
                    </div><!-- /grid-a -->
                </div>
			</div>
        </div>
        <div class="required"><p class="red"></p> </div>
        <?php page_navigator('registration2_davao','confirm_davao','back_reg4','verify_registration4'); ?>
        
        <?php include('mechanics.php'); ?>
    </div>
</div><!-- /content --> 