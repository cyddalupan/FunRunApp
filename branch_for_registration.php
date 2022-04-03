<div role="main" class="ui-content">
	<div class="stripes-header">
    	<div class="header-holder">
            <div class="race_category_logo">
                <img src="img/race_category_logo.jpg" />  
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
                <select name="select-native-1" id="branch-of-registration">
                    <option>McDonald&#39;s Greenbelt, Makati</option>
                    <option>McDonald&#39;s People Support, Makati</option>
                    <option>McDonald&#39;s Makati Ave, Makati</option>
                    <option>McDonald&#39;s Valero , Makati</option>
                    <option>McDonald&#39;s 32nd Street , Fort Bonifacio</option>
                    <option>McDonald&#39;s BGC Forum, Fort Bonifacio</option>
                    <option>McDonald&#39;s Park Triangle Mall , Fort Bonfacio</option>
                    <option>McDonald&#39;s Bench, Fort Bonifacio</option>
                    <option>McDonald&#39;s Forbes Town Center , Fort Bonifacio</option>
                    <option>McDonald&#39;s Eastwood, Quezon City</option>
                    <option>McDonald&#39;s Quezon Ave. , Quezon City</option>
                    <option>McDonald&#39;s Katipunan, Quezon City</option>
                    <option>McDonald&#39;s ETON Centris, Quezon City</option>
                    <option>McDonald&#39;s Greenhills, San Juan</option>
                    <option>McDonald&#39;s Strata 100 , Ortigas</option>
                    <option>McDonald&#39;s Tycoon, Ortigas</option>
                    <option>McDonald&#39;s Alabang, Muntinlupas</option>
                    <option>McDonald&#39;s Pontevia , Las Pinas</option>
                    <option>McDonald&#39;s Sucat Caritas , Las Pinas</option>
                    <option>McDonald&#39;s Blue Bay , Manila</option>
                    <option>McDonald&#39;s Jose Abad, Manila</option>
                    <option>McDonald&#39;s Pioneer, Mandaluyong</option>
                    <option>McDonald&#39;s Marcos Highway, Marikina</option>
                    <option>RUNNR BGC, Fort Bonifacio</option>
                </select>
            </div>
            </form>
    	</div>
    	<div class="race_category_left">
            <br />
            <div class="race_category_map">
                <div class="mapcss">Race Route</div>
                <!--<img src="img/race-category-map/children1k.jpg" />-->
                <img src="img/map_dummy.JPG" class="map_dummy" />
                <?php include('gmaps.php'); ?>
            </div>
        </div>
        <div class="clear"></div>
    	<?php page_navigator('race_category','registration1','','verify_branch'); ?>
        
        <?php include('mechanics.php'); ?>
</div>   
      <br><br><br>
      <div class="new_footer">
      	<div class="header-holder">
      		  <img src="img/footer.jpg" />
        </div>
      </div>                
</div><!-- /content -->
