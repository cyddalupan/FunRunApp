<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo_davao.jpg" />  
            </div>
        </div>
	</div>
    <div class="race_category reg2height">
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
                            <div class="ui-block-a"> <input type="text" id="address-number_dv" name="add_num" placeholder="Bldg/Number"></div>
                            <div class="ui-block-b"> <input type="text" id="address-street_dv" name="add_street" placeholder="Street"></div>
                            
                        </div><!-- /grid-b -->
                        
                        <div class="ui-grid-b">
                        	<div class="ui-block-a">
                                <form class="ui-filterable citystry">
                                    <input id="address-city_dv" data-type="search" class="get_auto_fill_city_dv" placeholder="City">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_city_dv" data-filter-reveal="true" data-input="#address-city">
                                    <?php include('all_city_list.php'); ?>
                                </ul>
                            </div>
                            <div class="ui-block-b provspace">
                                <form class="ui-filterable">
                                    <input id="address-province_dv" data-type="search" class="get_auto_fill_prov_dv" placeholder="Province">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_prov_dv" data-filter-reveal="true" data-input="#address-province">
                                    <?php include('all_prov_list.php'); ?>
                                </ul>
                            </div>
                            <div class="ui-block-c">
                                <input type="text" id="address-zip_dv" name="add_zip"  placeholder="ZipCode">
                            </div>
                        </div><!-- /grid-b -->
                        
                        <div class="ui-grid-a">
                            <div class="ui-block-a">
                                Nationality
                                <form>
                                    <select name="nationality" id="nationality_dv">
                                        <option>Filipino</option>
                                        <?php include('all_nationality_list.php'); ?>
                                    </select>
                                </form>
                            </div>
                            <div class="ui-block-b">
                                <font class="form_title">Occupation</font>
                                <form class="ui-filterable">
                                <input id="autocomplete-input" data-type="search" class="get_auto_fill_occupation_dv user-occupation_dv" placeholder="Occupation">
                                </form>
                                <ul data-role="listview" data-filter="true" class="set_auto_fill_occupation_dv" data-filter-reveal="true" data-input="#autocomplete-input">
                                    <?php include('all_occupation_list.php'); ?>
                                </ul>
                            </div>
                        </div><!-- /grid-a -->
                        <div class="clear"></div>
                        
                        <div class="ui-grid-solo">
                            Frequently Visited McDonald’s Branch
                        </div>
                    	<div class="ui-grid-solo">
                       <form class="ui-filterable">
                            <input id="filterBasic-input" data-type="search" class="get_auto_fill_branch_dv frequently-visited_dv" placeholder="Frequently Visited McDonald’s Branch">
                        </form>
                        <ul data-role="listview" data-filter="true" class="set_auto_fill_branch_dv" data-filter-reveal="true" data-input="#filterBasic-input">
                            <?php include('all_branch_list.php'); ?>
                        </ul>
                                  
                        </div>
                        <br />
                        <div class="ui-grid-solo">
                       Are you employed by McDonald's Philippines
                       </div>
                       <div class="are_you_employed">
                       
                            <form id="r-u-employed_dv">
                            
                            <div class="ui-grid-a">
                                <div class="ui-block-a">
                                	<div class="ui-block-a">
                                        <!--<label for="radio-choice-0a">Yes</label>-->
                                        <input type="radio" name="r-u-employed" id="radio-choice-0a" value="yes" checked="checked">
                                    </div>
                                    <div class="ui-block-b">
                                        <!--<label for="radio-choice-0b">No</label>-->
                                        <input type="radio" name="r-u-employed" id="radio-choice-0b" value="no" class="custom">
                                    </div>
                                </div>
                                <div class="ui-block-b">
                                     <div class="what_division">
                                        <input type="text" name="Division" id="division_dv" placeholder="Division">
                                    </div>
                                </div>
                            </div><!-- /grid-a -->
                            
                            
                                
                                
                                    
                                    
                               
                                
                                               
                           </form>
                        </div>
        <div class="required"><p class="red"></p> </div>
					</div>
                        
					<?php page_navigator('registration1_davao','registration4_davao','','verify_registration2_dv'); ?>
                    
                    <?php include('mechanics.php'); ?>
                </div><!--form_centered-->
                
                 
      </div>   
      <br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>             
</div><!-- /content -->