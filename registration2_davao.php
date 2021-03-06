<div role="main" class="ui-content">
	<div class="race_category reg2height">
    			<div class="race_category_logo">
                    <img src="img/race_category_logo.jpg" />  
                </div>
                <div class="progress_bar-row">
                    <div class="progress-label">
                        <h1>Keep going!</h1>
                    </div>
                    <div class="progress_bar">
                        <img src="img/run_reg2.png"  />
                    </div>
                </div>
                
                <br><br>

                <div class="form_centered_2">  
                	<div class="inner_form">  
                        Home Address <p class="red">*</p>
                        <div class="ui-grid-a">
                            <div class="ui-block-a"> <input type="text" id="address-number" name="add_num" placeholder="Bldg/Number"></div>
                            <div class="ui-block-b"> <input type="text" id="address-street" name="add_street" placeholder="Street"></div>
                            
                        </div><!-- /grid-b -->
                        
                        <div class="ui-grid-b">
                        	<div class="ui-block-a">
                                <form class="ui-filterable citystry">
                                    <input id="address-city" data-type="search" class="get_auto_fill_city" placeholder="City">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_city" data-filter-reveal="true" data-input="#address-city">
                                    <?php include('all_city_list.php'); ?>
                                </ul>
                            </div>
                            <div class="ui-block-b provspace">
                                <form class="ui-filterable">
                                    <input id="address-province" data-type="search" class="get_auto_fill_prov" placeholder="Province">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_prov" data-filter-reveal="true" data-input="#address-province">
                                    <?php include('all_prov_list.php'); ?>
                                </ul>
                            </div>
                            <div class="ui-block-c">
                                <input type="text" id="address-zip" name="add_zip"  placeholder="ZipCode">
                            </div>
                        </div><!-- /grid-b -->
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                Nationality
                                <form>
                                    <select name="nationality" id="nationality">
                                        <option>Filipino</option>
                                        <?php include('all_nationality_list.php'); ?>
                                    </select>
                                </form>
                            </div>
                            <div class="ui-block-b">
                                <font class="form_title">Occupation</font>
                                <form class="ui-filterable">
                                <input id="autocomplete-input" data-type="search" class="get_auto_fill_occupation user-occupation" placeholder="Occupation">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_occupation" data-filter-reveal="true" data-input="#autocomplete-input">
                                    <?php include('all_occupation_list.php'); ?>
                                </ul>
                            </div>
                        </div><!-- /grid-a -->
                        <div class="clear"></div>
                        
                        Frequently Visited McDonald???s Branch
                        <br>
                    
                       <form class="ui-filterable">
                            <input id="filterBasic-input" data-type="search" class="get_auto_fill_branch frequently-visited" placeholder="Frequently Visited McDonald???s Branch">
                        </form>
                        <ul data-role="listview" data-filter="true" class="set_auto_fill_branch" data-filter-reveal="true" data-input="#filterBasic-input">
                            <?php include('all_branch_list.php'); ?>
                        </ul>
                                  
                        <br />     
                       Are you employed by McDonald's Philippines
                       <div class="are_you_employed">
                       
                            <form id="r-u-employed">
                            
                            <div class="ui-grid-a">
                                <div class="ui-block-a">
                                	<div class="ui-block-a">
                                        <label for="radio-choice-0a">Yes</label>
                                        <input type="radio" name="r-u-employed" id="radio-choice-0a" value="yes" checked="checked">
                                    </div>
                                    <div class="ui-block-b">
                                        <label for="radio-choice-0b">No</label>
                                        <input type="radio" name="r-u-employed" id="radio-choice-0b" value="no" class="custom">
                                    </div>
                                </div>
                                <div class="ui-block-b">
                                     <div class="what_division">
                                        <input type="text" name="Division" id="division" placeholder="Division">
                                    </div>
                                </div>
                            </div><!-- /grid-a -->
                            
                            
                                
                                
                                    
                                    
                               
                                
                                               
                           </form>
                        </div>
        <div class="required"><p class="red"></p> </div>
					</div>
                        
					<?php page_navigator('registration1_davao','registration4_davao','','verify_registration2'); ?>
                    
                    <?php include('mechanics.php'); ?>
                </div><!--form_centered-->
                
                 
      </div>                
</div><!-- /content -->