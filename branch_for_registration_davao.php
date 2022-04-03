<div role="main" class="ui-content">
	<div class="race_category">
        <div class="race_category_logo">
        	<img src="img/race_category_logo.jpg" />  
        </div>
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
                <select name="select-native-1" id="branch-of-registration">
                    <option ></option> 
                    <option>RUNNR, Bonifacio High Street</option>
                    <option>McDonald’s 32nd  & 5th, Fort Bonifacio</option>
                    <option>McDonald’s Bench, Fort Bonifacio</option>
                    <option>McDonald’s BGC Forum, Fort Bonifacio</option>
                    <option>McDonald’s Forbestown, Bonifacio High Street</option>
                    <option>McDonald’s Greenbelt</option>
                    <option>McDonald’s Quezon Ave.</option>
                </select>
            </div>
            </form>
    	</div>
    	<div class="race_category_left">
            <br />
            <div class="race_category_map">
                <div class="mapcss">Race Route</div>
                <img src="img/race-category-map/children1k.jpg" />
            </div>
        </div>
        <div class="clear"></div>
    	<?php page_navigator('race_category_davao','registration1_davao','','verify_branch'); ?>
        
        <?php include('mechanics.php'); ?>
    </div>
</div><!-- /content -->