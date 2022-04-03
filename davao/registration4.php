<?php 
if(isset($addme))
$addme++; 
else
$addme = 1;
?>

<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo_davao.jpg" />  
            </div>
        </div>
	</div>
    <div class="race_category reg4height">
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
                    <input type="text" name="emergency-fullname" id="emergency-fullname_dv" placeholder="Fullname" >
                    <h3>Home Address<p class="red">*</p></h3>
                    <textarea rows="5" name="emergency-address" id="emergency-address_dv" placeholder="Address" style="width:98.7%;"></textarea>
                    <h3>Contact Number.<p class="red">*</p></h3>
                    <input type="text" name="emergency-number" id="emergency-number_dv" placeholder="Contact Number">
                    <h3>Relationship<p class="red">*</p></h3>
                    <select name="emergency-relationship" id="emergency-relationship_dv">
                        <?php include('relationship_list.php'); ?>
                    </select>
                </div>
                <div class="termsboxes">
                    <div class="ui-grid-a">
                        <div class="ui-block-a" style="position:relative;">
                            <label><input type="checkbox" name="termsAndCondition" id="termsAndCondition_dv"> 
                                I Agree to the <span style="color:#fff">Terms & Conditions</span>
                            </label>
							<a href="#termsAndConditions_dv" data-rel="popup" data-position-to="window" data-transition="fade" id="termsbtn">
                                Terms & Conditions
                            </a>                            
                        </div>
                    </div><!-- /grid-a -->
                    <div class="ui-grid-a">
                        <div class="ui-block-a"><label><input type="checkbox" name="newsletter" id="newsletter">I would like to recieve information<br>
                        on McDonald's events and Promotions.</label></div>
                    </div><!-- /grid-a -->
                </div>
			</div>
        </div>
        <div class="required"><p class="red"></p> </div>
        <?php page_navigator('registration2_davao','confirm_davao','back_reg4_dv','verify_registration4_dv'); ?>
        
        <?php include('mechanics.php'); ?>
      </div>   
      <br><br><br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>                
</div><!-- /content -->
<div data-role="popup" id="termsAndConditions_dv" data-overlay-theme="b" data-theme="a" data-corners="true">
    <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
        <img src="img/termsAndConditions.jpg" />
</div>