<div role="main" class="ui-content">
	<div class="race_category">
        <div class="race_category_logo">
        	<img src="img/race_category_logo_davao.jpg" />  
        </div>
        <div class="progress_bar-row">
            <div class="progress-label">
            	<h1>Select a Race</h1>
            </div>
            <div class="progress_bar">
                <img src="img/race_category_progress_bar.png"  />
            </div>
        </div>
        
        
    	
        <div class="race_category_right">
            
            <form id="run_cateogry_form">
                 <fieldset data-role="controlgroup" id="run-category">
                 	<div class="race_category_right_right1">
                		<img src="img/Children-red.png" />   
                    </div>
                 	<div class="race_category_right_left">
                    	<input type="radio" name="run-category" id="run-category1" value="1k-children" checked="checked"  style="display:none;">
                        <label for="run-category1">1K</label>
                        <input type="radio" name="run-category" id="run-category2" value="3k-children"  style="display:none;">
                        <label for="run-category2">3K</label>
                        <div class="clear"></div>
                    </div>                    
                 </fieldset>
                 <fieldset data-role="controlgroup" id="run-category">
                    <div class="race_category_right_right2">
                		<img src="img/adult-red.png" />
                    </div>
                 	<div class="race_category_right_left">
                        <input type="radio" name="run-category" id="run-category3" value="3k-adult" style="display:none;">
                        <label for="run-category3">3K</label>
                        <input type="radio" name="run-category" id="run-categorye4" value="3k-family" style="display:none;">
                        <label for="run-categorye4">3K Family</label>
                        <input type="radio" name="run-category" id="run-category5" value="5k-adult" style="display:none;">
                        <label for="run-category5">5K</label>
                        <input type="radio" name="run-category" id="run-category6" value="10k-adult" style="display:none;">
                        <label for="run-category6">10K</label>
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div> 
    	<div class="race_category_left">    
            <div class="race_category_map">
                <div class="mapcss">Race Route</div>
                <img src="img/race-category-map/children1k.jpg" />
            </div>
        </div>
        <div class="clear"></div>
        <?php page_navigator('home','branch_for_registration_davao','','save_race_category'); ?>
        
        <?php include('mechanics.php'); ?>
    </div>
</div><!-- /content -->