<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo.jpg" />  
            </div>
        </div>
	</div>
    <div class="race_category reg1height">
        <div class="progress_bar-row">
            <div class="progress-label">
            	<h1>Tell us about yourself!</h1>
            </div>
            <div class="progress_bar">
                <img src="img/run_reg1.png"  />
            </div>
        </div>
        
        <div class="J_header_bg">
            <div id="J-outer-width">
                <div class="j-header">
                
                    <div class="clear"></div>
                </div><!--j-header-->
                <div class="form_centered ">  
                	<div class="inner_form">      
                        <div class="ui-field-contain rnnrsname">
                            <font class="form_title">Runner's Name<p class="red">*</p></font>
                            <div class="clear"></div>
                            <div class="J_firstname"><input type="text" name="text-basic" id="firstname"  placeholder="First Name"></div>
                            <div class="J_midname"><input type="text" name="text-basic" id="middlename"  placeholder="Middle Name"></div>
                            <div class="clear"></div>
                            <div class="J_lastname"><input type="text" name="text-basic" id="lastname"  placeholder="Last Name"></div>
                        </div>
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a mob-num-uni">
                                <font class="form_title">Mobile Number<p class="red">*</p></font>
                                <div data-role="controlgroup" data-type="horizontal">
                                    <select id="mobile-network">
                                        <?php include('all_number_list.php'); ?>
                                    </select>
                                    <input id="mobile-number" type="text" maxlength="7" data-wrapper-class="controlgroup-textinput ui-btn">
                                </div>
                            </div>
                        </div><!-- /grid-a -->
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a mob-num-uni">
                                <div data-role="controlgroup" data-type="horizontal">
                                    <form>
                                        <label for="email-2"><font class="form_title">Email Address<p class="red">*</p></font></label>
                                        <div class="J_email"><input type="email" data-clear-btn="true" name="email-2" id="user-email" ></div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /grid-a -->
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a mob-num-uni2">
                                <font class="form_title">Home Phone</font>
                                <div data-role="controlgroup" data-type="horizontal">
                                    <select id="phone-network">
                                        <?php include('all_landline_list.php'); ?>
                
                                    </select>
                                    <input id="landline-number" type="text" maxlength="7" data-wrapper-class="controlgroup-textinput ui-btn">
                                </div>
                          </div>
                        <div class="ui-block-b">
                        </div>
                        </div><!-- /grid-a -->
                        
                        
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                 <div class="J_genderbox">
                                    <font class="form_title">Gender<p class="red">*</p></font>
                                    <form id="user-gender">
                                        <fieldset data-role="controlgroup">
                                            <div class="J_gender">
                                                <input type="radio" name="user-gender" id="radio-choice-v-2a" value="male" checked="checked" >
                                                <label for="radio-choice-v-2a">Male</label>
                                            </div>
                                            <div class="J_gender">
                                                <input type="radio" name="user-gender" id="radio-choice-v-2b" value="female">
                                                <label for="radio-choice-v-2b">Female</label>
                                            </div>
                                            <div class="clear"></div>
                                        </fieldset>
                                    </form>
                                </div><!--J_genderbox-->
                            </div>
                            <div class="ui-block-b">
                                 <div class="J_dobbox fullwidth">
                                    <font class="form_title">Date of Birth<p class="red">*</p></font>
                                    <div class="J_dob"><input type="date" data-clear-btn="false" name="date-1" id="date-of-birth" value="yyyy-mm-dd"></div>
                                </div><!--J_dobbox-->
                            </div>
                        </div><!-- /grid-a -->
                       
        <div class="required"><p class="red"></p> </div>
                   </div>
                   
                    
                       <?php page_navigator('branch_for_registration','registration2','','verify_registration1'); ?>
                        
                       <?php include('mechanics.php'); ?>
                </div><!--form_centered-->
            </div><!--J-outer-width-->
        </div><!--J_header_bg-->
      </div>   
      <br><br><br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>             
</div><!-- /content -->