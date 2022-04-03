<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo.jpg" />  
            </div>
        </div>
	</div>
    <div class="race_category df-font reg3height">
            <div class="progress_bar-row">
                <div class="progress-label">
                    <h1>Family members</h1>
                </div>
                <div class="progress_bar">
                    <img src="img/run_reg2.png"  />
                </div>
            </div>
        	<br><br><br>
            <div class="inner_form">
                <div class="ui-grid-b">
                    <h3>Relative 1<p class="red">*</p></h3>
                    <div class="ui-block-a"><input type="text" name="fam1-text1" id="fam1-text1" placeholder="First Name" ></div>
                    <div class="ui-block-b"><input type="text" name="fam1-text3" id="fam1-text3" placeholder="Middle Name"  ></div>
                    <div class="ui-block-c"><input type="text" name="fam1-text2" id="fam1-text2" placeholder="Last Name"  ></div>
                </div><!-- /grid-b -->
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        Date Of Birth<p class="red">*</p>
                        <input type="date" name="fam1-birthday" id="fam1-date"  value="yyyy-mm-dd">
                    </div>
                    <div class="ui-block-b">
                        Relationship<p class="red">*</p>
                        <select name="fam1-relationship1" id="fam1-relationship">
                            <?php include('relationship_list.php'); ?>
                        </select>
                    </div>
                </div><!-- /grid-a -->
                
                <br><br><br><br><br><br><br><br>
                                
                <div class="ui-grid-b">
                    <h3>Relative 2<p class="red">*</p></h3>
                    <div class="ui-block-a"><input type="text" name="fam2-text1" id="fam2-text1" placeholder="First Name"></div>
                    <div class="ui-block-b"><input type="text" name="fam2-text3" id="fam2-text3" placeholder="Middle Name"></div>
                    <div class="ui-block-c"><input type="text" name="fam2-text2" id="fam2-text2" placeholder="Last Name"></div>
                </div><!-- /grid-b -->
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        Date Of Birth<p class="red">*</p>
                        <input type="date" name="fam2-birthday" id="fam2-date"  value="yyyy-mm-dd">
                    </div>
                    <div class="ui-block-b">
                        Relationship<p class="red">*</p>
                        <select name="fam2-relationship1" id="fam2-relationship">
                            <?php include('relationship_list.php'); ?>
                        </select>
                    </div>
                </div><!-- /grid-a -->
                
                
            </div>
                    <div class="required"><p class="red"></p> </div>
        
        <?php page_navigator('registration2','registration4','','verify_registration3'); ?>
        
        <?php include('mechanics.php'); ?>
        
      </div>   
      <br><br><br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>                
</div><!-- /content -->