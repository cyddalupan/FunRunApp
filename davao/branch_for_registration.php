<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo_davao.jpg" />  
            </div>
        </div>
	</div>
    <div class="race_category">
        <div class="progress_bar-row">
            <div class="progress-label">
            	<h1>Select a McDonald's<br>
					Registration Center</h1>
            </div>
            <div class="progress_bar">
                <img src="img/branch_for_registration_progress_bar.png"  />
            </div>
        </div>
        
        	
        <div class="race_category_right branch-pad">
            <form>
            <div class="ui-field-contain">
                <select name="select-native-1" id="branch-of-registration_dv">
                    <option>McDonald's SM City Davao</option>
                    <option>McDonald's Damosa</option>
                    <option>McDonald's Matina Crossing</option>
                    <option>McDonald's Abreeza</option>
                    <option>McDonald's NCCC Mall</option>
                    <option>McDonald's Bajada</option>
                    <option>McDonald's Davao Pampanga</option>
                    <option>McDonald's Sta Ana</option>
                    <option>McDonald's Illustre</option>
                    <option>McDonald's Bolton</option>
                    <option>McDonald's MTS</option>
                    <option>McDonald's Gaisano Mall</option>
                </select>
            </div>
            </form>
    	</div>
    	<div class="race_category_left">
            <br />
            <div class="race_category_map">
                <div class="mapcss">Race Route</div>
                <!--<img src="img/race-category-map/children1k.jpg" />-->
                <img src="img/map_dummy_dv.JPG" class="map_dummy" />
                <?php include('gmaps_davao.php'); ?>
            </div>
        </div>
        <div class="clear"></div>
    	<?php page_navigator('race_category_davao','registration1_davao','','verify_branch_dv'); ?>
        
        <?php include('mechanics.php'); ?>
</div>   
      <br><br><br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>                
</div><!-- /content -->
