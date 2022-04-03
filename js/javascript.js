$(document).ready(function(){
	/*
	mechanicsList = $('.mechanics_list').html();
	$('.get_mechanics_list').html(mechanicsList);
	*/
	
	$('.set_auto_fill_city li').click(function(){
		addressCity = $(this).html();
		$('.get_auto_fill_city').val(addressCity);
		$('.set_auto_fill_city li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_prov li').click(function(){
		addressProvince = $(this).html();
		$('.get_auto_fill_prov').val(addressProvince);
		$('.set_auto_fill_prov li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_occupation li').click(function(){
		occupation = $(this).html();
		$('.get_auto_fill_occupation').val(occupation);
		$('.set_auto_fill_occupation li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_branch li').click(function(){
		branch = $(this).html();
		$('.get_auto_fill_branch').val(branch);
		$('.set_auto_fill_branch li').addClass( "ui-screen-hidden" );
	});
	
	$('.user-occupation').click(function(){
		$( ".set_auto_fill_occupation li" ).removeClass( "ui-screen-hidden" );
		$( ".set_auto_fill_branch li" ).addClass( "ui-screen-hidden" );
	});
	
	$('.get_auto_fill_branch').click(function(){
		$( ".set_auto_fill_branch li" ).removeClass( "ui-screen-hidden" );
		$( ".set_auto_fill_occupation li" ).addClass( "ui-screen-hidden" );
	});
	
	
	//DAVAO AUTOFILL
	$('.set_auto_fill_city_dv li').click(function(){
		addressCity = $(this).html();
		$('.get_auto_fill_city_dv').val(addressCity);
		$('.set_auto_fill_city_dv li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_prov_dv li').click(function(){
		addressProvince = $(this).html();
		$('.get_auto_fill_prov_dv').val(addressProvince);
		$('.set_auto_fill_prov_dv li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_occupation_dv li').click(function(){
		occupation = $(this).html();
		$('.get_auto_fill_occupation_dv').val(occupation);
		$('.set_auto_fill_occupation_dv li').addClass( "ui-screen-hidden" );
	});
	
	$('.set_auto_fill_branch_dv li').click(function(){
		branch = $(this).html();
		$('.get_auto_fill_branch_dv').val(branch);
		$('.set_auto_fill_branch_dv li').addClass( "ui-screen-hidden" );
	});
	
	$('.user-occupation_dv').click(function(){
		$( ".set_auto_fill_occupation_dv li" ).removeClass( "ui-screen-hidden" );
		$( ".set_auto_fill_branch_dv li" ).addClass( "ui-screen-hidden" );
	});
	
	$('.get_auto_fill_branch_dv').click(function(){
		$( ".set_auto_fill_branch_dv li" ).removeClass( "ui-screen-hidden" );
		$( ".set_auto_fill_occupation_dv li" ).addClass( "ui-screen-hidden" );
	});
	
	
	
	
	$('.are_you_employed input').click(function(){
		are_you_employed = $(this).val();
		if(are_you_employed == 'no')
			$('.what_division').fadeOut('slow');
		else
			$('.what_division').fadeIn('slow');
	});
	
	
	
	/*$('.race_category_right input').click(function(){
		race_category = $(this).val();

		if(race_category == '1k-children')
			$('.race_category_map').html('<img src="img/race-category-map/children1k.png" />');
		else if(race_category == '3k-children')
			$('.race_category_map').html('<img src="img/race-category-map/children3k.png" />');
		else if(race_category == '3k-adult')
			$('.race_category_map').html('<img src="img/race-category-map/adult3k.png" />');
		else if(race_category == '3k-family')
			$('.race_category_map').html('<img src="img/race-category-map/family3k.png" />');
		else if(race_category == '5k-adult')
			$('.race_category_map').html('<img src="img/race-category-map/adult5k.png" />');
		else if(race_category == '10k-adult')
			$('.race_category_map').html('<img src="img/race-category-map/adult10k.png" />');
	});*/
	
	$('.save_race_category').click(function(){
		race_category = $('input[name=run-category]:checked', '#run_cateogry_form').val();
		
		if(race_category == '3k-family'){
			console.log('true');
			$('.verify_registration2').attr('href','#registration3');
			$('.back_reg4').attr('href','#registration3');
		}else{
			console.log('false');
			$('.verify_registration2').attr('href','#registration4');
			$('.back_reg4').attr('href','#registration2');
		}
		
		//save race category
		var url="ajax/save_race_category.php";
		var pmeters=
			'user_id='+user_id+
			'&race_category='+race_category;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_race_category: '+data);
				return true;
			}
		});
	});
	
	$('.save_race_category_dv').click(function(){
		race_category = $('input[name=run-category]:checked', '#run_cateogry_form_dv').val();
		
		if(race_category == '3k-family'){
			console.log('true');
			$('.verify_registration2_dv').attr('href','#registration3_davao');
			$('.back_reg4_dv').attr('href','#registration3_davao');
		}else{
			console.log('false');
			$('.verify_registration2_dv').attr('href','#registration4_davao');
			$('.back_reg4_dv').attr('href','#registration2_davao');
		}
		
		//save race category
		var url="ajax/save_race_category.php";
		var pmeters=
			'user_id='+user_id+
			'&race_category='+race_category;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_race_category: '+data);
				return true;
			}
		});
	});


	$('#branch-of-registration').change(function(){
		branchalert = $('#branch-of-registration').val();
		//alert(branchalert);
		$(".map_dummy").hide();
		
		
		if(branchalert == "McDonald's Greenbelt, Makati"){
			var mapProp = {
				center: new google.maps.LatLng(14.551784, 121.019491),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.551799,121.019876),
			});
		}
		if(branchalert == "McDonald's People Support, Makati"){
			var mapProp = {
				center: new google.maps.LatLng(14.560085, 121.014967),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.560085, 121.014967),
			});
			
		}
		if(branchalert == "McDonald's Makati Ave, Makati"){
			var mapProp = {
				center: new google.maps.LatLng(14.562207,121.027916),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.562207,121.027916),
			});
		}
		if(branchalert == "McDonald's Valero , Makati"){
			var mapProp = {
				center: new google.maps.LatLng(14.560646,121.018023),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.560646,121.018023),
			});
		}
		if(branchalert == "McDonald's 32nd Street , Fort Bonifacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.554109, 121.048439),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.554109, 121.048439),
			});
		}
		if(branchalert == "McDonald's BGC Forum, Fort Bonifacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.548136, 121.048703),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.548136, 121.048703),
			});
		}
		if(branchalert == "McDonald's Park Triangle Mall , Fort Bonfacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.553267, 121.054787),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.553267, 121.054787),
			});
		}
		if(branchalert == "McDonald's Bench, Fort Bonifacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.553548, 121.045638),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.553548, 121.045638),
			});
		}
		if(branchalert == "McDonald's Forbes Town Center , Fort Bonifacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.549795, 121.044844),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.549795, 121.044844),
			});
		}
		if(branchalert == "McDonald's Eastwood, Quezon City"){
			var mapProp = {
				center: new google.maps.LatLng(14.608833, 121.079905),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.608833, 121.079905),
			});
		}
		if(branchalert == "McDonald's Quezon Ave. , Quezon City"){
			var mapProp = {
				center: new google.maps.LatLng(14.639915, 121.029783),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.639915, 121.029783),
			});
		}
		if(branchalert == "McDonald's Katipunan, Quezon City"){
			var mapProp = {
				center: new google.maps.LatLng(14.635873, 121.073981),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.635873, 121.073981),
			});
		}
		if(branchalert == "McDonald's ETON Centris, Quezon City"){
			var mapProp = {
				center: new google.maps.LatLng(14.639695, 121.040993),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.639695, 121.040993),
			});
		}
		if(branchalert == "McDonald's Greenhills, San Juan"){
			var mapProp = {
				center: new google.maps.LatLng(14.601877, 121.051395),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.601877, 121.051395),
			});
		}
		if(branchalert == "McDonald's Strata 100 , Ortigas"){
			var mapProp = {
				center: new google.maps.LatLng(14.587052, 121.061626),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.587052, 121.061626),
			});
		}
		if(branchalert == "McDonald's Tycoon, Ortigas"){
			var mapProp = {
				center: new google.maps.LatLng(14.580671, 121.060460),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.580671, 121.060460),
			});
		}if(branchalert == "McDonald's Alabang, Muntinlupas"){
			var mapProp = {
				center: new google.maps.LatLng(14.424485, 121.030596),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.424485, 121.030596),
			});
		}
		if(branchalert == "McDonald's Pontevia , Las Pinas"){
			var mapProp = {
				center: new google.maps.LatLng(14.375137, 121.011862),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.375137, 121.011862),
			});
		}
		if(branchalert == "McDonald's Sucat Caritas , Las Pinas"){
			var mapProp = {
				center: new google.maps.LatLng(14.457735, 121.032085),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.457735, 121.032085),
			});
		}
		if(branchalert == "McDonald's Blue Bay , Manila"){
			var mapProp = {
				center: new google.maps.LatLng(14.537270, 120.989184),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.537270, 120.989184),
			});
		}
		if(branchalert == "McDonald's Jose Abad, Manila"){
			var mapProp = {
				center: new google.maps.LatLng(14.612647, 120.976581),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.612647, 120.976581),
			});
		}
		if(branchalert == "McDonald's Pioneer, Mandaluyong"){
			var mapProp = {
				center: new google.maps.LatLng(14.571149, 121.047943),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.571149, 121.047943),
			});
		}
		if(branchalert == "McDonald's Marcos Highway, Marikina"){
			var mapProp = {
				center: new google.maps.LatLng(14.621183, 121.102716),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.621183, 121.102716),
			});
		}
		if(branchalert == "RUNNR BGC, Fort Bonifacio"){
			var mapProp = {
				center: new google.maps.LatLng(14.551127, 121.050635),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(14.551127, 121.050635),
			});
		}
		
		var map = new google.maps.Map(document.getElementById("m1"),mapProp);
		marker.setMap(map);
		//google.maps.event.addDomListener(window, 'load', initialize);
		
	});
	
	$('#branch-of-registration_dv').change(function(){
		branchalert = $('#branch-of-registration_dv').val();
		//alert(branchalert);
		$(".map_dummy").hide();
		
		
		if(branchalert == "McDonald's SM City Davao"){
			var mapProp = {
				center: new google.maps.LatLng(7.049671, 125.587519),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.049671, 125.587519),
			});
		}
		if(branchalert == "McDonald's Damosa"){
			var mapProp = {
				center: new google.maps.LatLng(7.102768, 125.632909),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.102768, 125.632909),
			});
			
		}
		if(branchalert == "McDonald's Matina Crossing"){
			var mapProp = {
				center: new google.maps.LatLng(7.058660, 125.568257),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.058660, 125.568257),
			});
		}
		if(branchalert == "McDonald's Abreeza"){
			var mapProp = {
				center: new google.maps.LatLng(7.190697, 125.455339),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.190697, 125.455339),
			});
		}
		if(branchalert == "McDonald's NCCC Mall"){
			var mapProp = {
				center: new google.maps.LatLng(7.062379, 125.593911),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.062379, 125.593911),
			});
		}
		if(branchalert == "McDonald's Bajada"){
			var mapProp = {
				center: new google.maps.LatLng(7.084848, 125.611990),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.084848, 125.611990),
			});
		}
		if(branchalert == "McDonald's Davao Pampanga"){
			var mapProp = {
				center: new google.maps.LatLng(7.102818, 125.633042),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.102818, 125.633042),
			});
		}
		if(branchalert == "McDonald's Sta Ana"){
			var mapProp = {
				center: new google.maps.LatLng(7.076634, 125.616479),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.076634, 125.616479),
			});
		}
		if(branchalert == "McDonald's Illustre"){
			var mapProp = {
				center: new google.maps.LatLng(7.068957, 125.605442),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.068957, 125.605442),
			});
		}
		if(branchalert == "McDonald's Bolton"){
			var mapProp = {
				center: new google.maps.LatLng(7.066362, 125.609347),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.066362, 125.609347),
			});
		}
		if(branchalert == "McDonald's MTS"){
			var mapProp = {
				center: new google.maps.LatLng(7.062913, 125.596517),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.062913, 125.596517),
			});
		}
		if(branchalert == "McDonald's Gaisano Mall"){
			var mapProp = {
				center: new google.maps.LatLng(7.078066, 125.614037),
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
			
			var marker=new google.maps.Marker({
			  position:new google.maps.LatLng(7.078066, 125.614037),
			});
		}
		
		
		var map = new google.maps.Map(document.getElementById("m1_dv"),mapProp);
		marker.setMap(map);
		//google.maps.event.addDomListener(window, 'load', initialize);
		
	});
	
	/*verification and saving*/
	$('.verify_branch').click(function(){
		
		branchOfRgstrtn = $('#branch-of-registration').val();
		console.log(branchOfRgstrtn+ " asd");
		
		if(branchOfRgstrtn == ''){
			alert('please fill branch of registration');
			return false;
		}else{
			var url="ajax/save_branch.php";
			var pmeters=
				'user_id='+user_id+
				'&branchOfRgstrtn='+branchOfRgstrtn;
			$.post(url,pmeters,function(data){
				if(data=="false"){alert('acces failed');}
				else{
					console.log('save_branch: '+data);
					return true;
				}
			});
		}
		
	});
	
	/*verification and saving*/
	$('.verify_branch_dv').click(function(){
		
		branchOfRgstrtn = $('#branch-of-registration_dv').val();
		console.log(branchOfRgstrtn+ " dav");
		if(branchOfRgstrtn == ''){
			alert('please fill branch of registration');
			return false;
		}else{
			var url="ajax/save_branch.php";
			var pmeters=
				'user_id='+user_id+
				'&branchOfRgstrtn='+branchOfRgstrtn;
			$.post(url,pmeters,function(data){
				if(data=="false"){alert('acces failed');}
				else{
					console.log('save_branch: '+data);
					return true;
				}
			});
		}
	});
	
	$('.verify_registration1').click(function(){
		fullname = $('#firstname').val();
		fullname2 = $('#lastname').val();
		fullname3 = $('#middlename').val();
		
		mobileNetwork = $('#mobile-network').val();
		mobileNumber = $('#mobile-number').val();
		
		useremail = $('#user-email').val();
		
		dateofbirth = $('#date-of-birth').val();
		
		phonenetwork = $('#phone-network').val();
		landlinenumber = $('#landline-number').val();
		usergender = $('input[name=user-gender]:checked', '#user-gender').val();	
		
		$('#view_pdf').attr('href',fullname+'-'+fullname2+'-'+user_id+'.pdf');
		
		if(fullname == '' || fullname2 == '' || fullname3 == ''){
			alert('please complete the name');
			return false;
		}
		
		if(mobileNumber.length != 7){
			alert('Mobile number incomplete');
			return false;
		}
		
		if(isNaN(mobileNumber)){
			alert('mobile number you enter is not a number');
			return false;
		}
		
		if(validateEmail(useremail)){
		}else{
			alert('Email address not valid');
			return false;
		}
		
		if(dateofbirth == ''){
			alert('please enter your birthday');
			return false;
		}
		
		if(validateDate(dateofbirth)){
		}else{
			alert('Invalid Birthday Format please follow yyyy-mm-dd ');
			return false;
		}
		
		//save registration 1
		var url="ajax/save_reg1.php";
		var pmeters=
			'user_id='+user_id+
			'&fullname='+fullname+
			'&fullname2='+fullname2+
			'&fullname3='+fullname3+
			'&mobileNetwork='+mobileNetwork+
			'&mobileNumber='+mobileNumber+
			'&useremail='+useremail+
			'&dateofbirth='+dateofbirth+
			'&phonenetwork='+phonenetwork+
			'&landlinenumber='+landlinenumber+
			'&usergender='+usergender;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg1: '+data);
				return true;
			}
		});
		
	});
	
	$('.verify_registration1_dv').click(function(){
		fullname = $('#firstname_dv').val();
		fullname2 = $('#lastname_dv').val();
		fullname3 = $('#middlename_dv').val();
		
		mobileNetwork = $('#mobile-network_dv').val();
		mobileNumber = $('#mobile-number_dv').val();
		
		useremail = $('#user-email_dv').val();
		
		dateofbirth = $('#date-of-birth_dv').val();
		
		phonenetwork = $('#phone-network_dv').val();
		landlinenumber = $('#landline-number_dv').val();
		usergender = $('input[name=user-gender]:checked', '#user-gender_dv').val();	
		
		$('#view_pdf').attr('href',fullname+'-'+fullname2+'-'+user_id+'.pdf');
		
		if(fullname == '' || fullname2 == '' || fullname3 == ''){
			alert('please complete the name');
			return false;
		}
		
		if(mobileNumber.length != 7){
			alert('Mobile number incomplete');
			return false;
		}
		
		if(isNaN(mobileNumber)){
			alert('mobile number you enter is not a number');
			return false;
		}
		
		if(validateEmail(useremail)){
		}else{
			alert('Email address not valid');
			return false;
		}
		
		if(dateofbirth == ''){
			alert('please enter your birthday');
			return false;
		}
		
		if(validateDate(dateofbirth)){
		}else{
			alert('Invalid Birthday Format please follow yyyy-mm-dd ');
			return false;
		}
		
		//save registration 1
		var url="ajax/save_reg1.php";
		var pmeters=
			'user_id='+user_id+
			'&fullname='+fullname+
			'&fullname2='+fullname2+
			'&fullname3='+fullname3+
			'&mobileNetwork='+mobileNetwork+
			'&mobileNumber='+mobileNumber+
			'&useremail='+useremail+
			'&dateofbirth='+dateofbirth+
			'&phonenetwork='+phonenetwork+
			'&landlinenumber='+landlinenumber+
			'&usergender='+usergender;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg1: '+data);
				return true;
			}
		});
		
	});
	
	//registration 2 verification
	$('.verify_registration2').click(function(){
		addressNumber = $("#address-number").val();
		addressStreet = $("#address-street").val();
		addressCity = $("#address-city").val();
		addressProvince = $("#address-province").val();
		addressZip = $("#address-zip").val();
		nationality = $("#nationality").val();
		userOccupation = $(".user-occupation").val();
		frequentlyVisited = $(".frequently-visited").val();
		RUEmployed = $('input[name=r-u-employed]:checked', '#r-u-employed').val();
		division = $("#division").val();
		
		if(addressCity == ''){
			alert('please insert address');
			return false;
		}
		
		if(addressProvince == ''){
			alert('please insert Province');
			return false;
		}
		
		//save registration 2
		var url="ajax/save_reg2.php";
		var pmeters=
			'user_id='+user_id+
			'&addressNumber='+addressNumber+
			'&addressStreet='+addressStreet+
			'&addressCity='+addressCity+
			'&addressProvince='+addressProvince+
			'&addressZip='+addressZip+
			'&nationality='+nationality+
			'&userOccupation='+userOccupation+
			'&frequentlyVisited='+frequentlyVisited+
			'&RUEmployed='+RUEmployed+
			'&division='+division;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg2: '+data);
				return true;
			}
		});
		
	});
	
	//registration 2 verification
	$('.verify_registration2_dv').click(function(){
		addressNumber = $("#address-number_dv").val();
		addressStreet = $("#address-street_dv").val();
		addressCity = $("#address-city_dv").val();
		addressProvince = $("#address-province_dv").val();
		addressZip = $("#address-zip_dv").val();
		nationality = $("#nationality_dv").val();
		userOccupation = $(".user-occupation_dv").val();
		frequentlyVisited = $(".frequently-visited_dv").val();
		RUEmployed = $('input[name=r-u-employed]:checked', '#r-u-employed_dv').val();
		division = $("#division_dv").val();
		
		if(addressCity == ''){
			alert('please insert address');
			return false;
		}
		
		if(addressProvince == ''){
			alert('please insert Province');
			return false;
		}
		
		//save registration 2
		var url="ajax/save_reg2.php";
		var pmeters=
			'user_id='+user_id+
			'&addressNumber='+addressNumber+
			'&addressStreet='+addressStreet+
			'&addressCity='+addressCity+
			'&addressProvince='+addressProvince+
			'&addressZip='+addressZip+
			'&nationality='+nationality+
			'&userOccupation='+userOccupation+
			'&frequentlyVisited='+frequentlyVisited+
			'&RUEmployed='+RUEmployed+
			'&division='+division;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg2: '+data);
				return true;
			}
		});
		
	});
	
	//registration 3 verification
	$('.verify_registration3').click(function(){
		fam1Text1 = $("#fam1-text1").val();
		fam1Text2 = $("#fam1-text2").val();
		fam1Text3 = $("#fam1-text3").val();
		
		fam1Date = $("#fam1-date").val();
		fam1relationship = $("#fam1-relationship").val();
		
		
		fam2Text1 = $("#fam2-text1").val();
		fam2Text2 = $("#fam2-text2").val();
		fam2Text3 = $("#fam2-text3").val();
		
		fam2Date = $("#fam2-date").val();
		fam2relationship = $("#fam2-relationship").val();
		
		fam3Text1 = $("#fam3-text1").val();
		fam3Text2 = $("#fam3-text2").val();
		fam3Text3 = $("#fam3-text3").val();
		
		fam3Date = $("#fam3-date").val();
		fam3relationship = $("#fam3-relationship").val();
		
		if(fam1Text1 != ''){
			if(fam1Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam1Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam1Date == ''){
				alert('please complete the form');
				return false;
			}
			
			/*if(validateDate(fam1Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam1Date,16)){
				alert('Adult must be 16years old and above');
				return false;
			}*/
			
		}
		
		if(fam2Text1 != ''){
			if(fam2Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam2Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam2Date == ''){
				alert('please complete the form');
				return false;
			}
			
			/*if(validateDate(fam2Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam2Date,2)){
				alert('Kid-1 must be Older than 2years old');
				return false;
			}
			
			if(cyd_confirm_age_greater_than(fam2Date,15)){
				alert('Kid-1 must be Younger than 16 years old');
				return false;
			}*/
			
			
		}
		
		/*if(fam3Text1 != ''){
			if(fam3Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam3Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam3Date == ''){
				alert('please complete the form');
				return false;
			}
			
			if(validateDate(fam3Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam3Date,2)){
				alert('Kid-2 must be Older than 2years old');
				return false;
			}
			
			if(cyd_confirm_age_greater_than(fam3Date,15)){
				alert('Kid-2 must be Younger than 16 years old');
				return false;
			}
			
		}*/
		
				
		//save registration 3
		var url="ajax/save_reg3.php";
		var pmeters=
			'user_id='+user_id+
			'&fam1Text1='+fam1Text1+
			'&fam1Text2='+fam1Text2+
			'&fam1Text3='+fam1Text3+
			'&fam1Date='+fam1Date+
			'&fam1relationship='+fam1relationship+
			'&fam2Text1='+fam2Text1+
			'&fam2Text2='+fam2Text2+
			'&fam2Text3='+fam2Text3+
			'&fam2Date='+fam2Date+
			'&fam2relationship='+fam2relationship+
			/*'&fam3Text1='+fam3Text1+
			'&fam3Text2='+fam3Text2+
			'&fam3Text3='+fam3Text3+
			'&fam3Date='+fam3Date+
			'&fam3relationship='+fam3relationship;*/
			'&fam3Text1= ---'
			'&fam3Text2= ---'
			'&fam3Text3= ---'
			'&fam3Date= ---'
			'&fam3relationship= ---';
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg3: '+data);
				return true;
			}
		});
		
	});
	
	
	//registration 3 verification
	$('.verify_registration3_dv').click(function(){
		fam1Text1 = $("#fam1-text1_dv").val();
		fam1Text2 = $("#fam1-text2_dv").val();
		fam1Text3 = $("#fam1-text3_dv").val();
		
		fam1Date = $("#fam1-date_dv").val();
		fam1relationship = $("#fam1-relationship_dv").val();
		
		
		fam2Text1 = $("#fam2-text1_dv").val();
		fam2Text2 = $("#fam2-text2_dv").val();
		fam2Text3 = $("#fam2-text3_dv").val();
		
		fam2Date = $("#fam2-date_dv").val();
		fam2relationship = $("#fam2-relationship_dv").val();
		
		fam3Text1 = $("#fam3-text1_dv").val();
		fam3Text2 = $("#fam3-text2_dv").val();
		fam3Text3 = $("#fam3-text3_dv").val();
		
		fam3Date = $("#fam3-date_dv").val();
		fam3relationship = $("#fam3-relationship_dv").val();
		
		if(fam1Text1 != ''){
			if(fam1Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam1Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam1Date == ''){
				alert('please complete the form');
				return false;
			}
			
			/*if(validateDate(fam1Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam1Date,16)){
				alert('Adult must be 16years old and above');
				return false;
			}*/
			
		}
		
		if(fam2Text1 != ''){
			if(fam2Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam2Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam2Date == ''){
				alert('please complete the form');
				return false;
			}
			
			/*if(validateDate(fam2Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam2Date,2)){
				alert('Kid-1 must be Older than 2years old');
				return false;
			}
			
			if(cyd_confirm_age_greater_than(fam2Date,15)){
				alert('Kid-1 must be Younger than 16 years old');
				return false;
			}*/
			
			
		}
		
		/*if(fam3Text1 != ''){
			if(fam3Text2 == ''){
				alert('please complete the form');
				return false;
			}else if(fam3Text3 == ''){
				alert('please complete the form');
				return false;
			}else if(fam3Date == ''){
				alert('please complete the form');
				return false;
			}
			
			if(validateDate(fam3Date)){
			}else{
				alert('Invalid Birthday Format please follow yyyy-mm-dd ');
				return false;
			}
			
			if(cyd_confirm_age_less_than(fam3Date,2)){
				alert('Kid-2 must be Older than 2years old');
				return false;
			}
			
			if(cyd_confirm_age_greater_than(fam3Date,15)){
				alert('Kid-2 must be Younger than 16 years old');
				return false;
			}
			
		}*/
		
				
		//save registration 3
		var url="ajax/save_reg3.php";
		var pmeters=
			'user_id='+user_id+
			'&fam1Text1='+fam1Text1+
			'&fam1Text2='+fam1Text2+
			'&fam1Text3='+fam1Text3+
			'&fam1Date='+fam1Date+
			'&fam1relationship='+fam1relationship+
			'&fam2Text1='+fam2Text1+
			'&fam2Text2='+fam2Text2+
			'&fam2Text3='+fam2Text3+
			'&fam2Date='+fam2Date+
			'&fam2relationship='+fam2relationship+
			/*'&fam3Text1='+fam3Text1+
			'&fam3Text2='+fam3Text2+
			'&fam3Text3='+fam3Text3+
			'&fam3Date='+fam3Date+
			'&fam3relationship='+fam3relationship;*/
			'&fam3Text1= ---'
			'&fam3Text2= ---'
			'&fam3Text3= ---'
			'&fam3Date= ---'
			'&fam3relationship= ---';
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg3: '+data);
				return true;
			}
		});
		
	});
	
	//registration 4 verification
	$('.verify_registration4').click(function(){
		emergencyFullname = $('#emergency-fullname').val();
		emergencyAddress = $('#emergency-address').val();
		emergencyNumber = $('#emergency-number').val();
		emergencyRelationship = $('#emergency-relationship').val();
		
		if(emergencyFullname == ''){
			alert('please provide contact person in case of emergency');
			return false;
		}
				
		if(emergencyNumber == ''){
			alert('please provide contact person`s number');
			return false;
		}
		
		if ($('#termsAndCondition').is(':checked')) {
			termsAndCondition = 'checked';
		}else{
			termsAndCondition = 'not checked';
			alert('please agree to the terms and conditions');
			return false;
		}
		
		if ($('#newsletter').is(':checked')) {
			newsletter = 'checked';
		}else{
			newsletter = 'not checked';
		}
		
		
		//save registration 4
		var url="ajax/save_reg4.php";
		var pmeters=
			'user_id='+user_id+
			'&emergencyFullname='+emergencyFullname+
			'&emergencyAddress='+emergencyAddress+
			'&emergencyRelationship='+emergencyRelationship+
			'&emergencyNumber='+emergencyNumber+
			'&termsAndCondition='+termsAndCondition+
			'&newsletter='+newsletter;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg4s: '+data);
				return true;
			}
		});
		
	});
	
	//registration 4 verification
	$('.verify_registration4_dv').click(function(){
		emergencyFullname = $('#emergency-fullname_dv').val();
		emergencyAddress = $('#emergency-address_dv').val();
		emergencyNumber = $('#emergency-number_dv').val();
		emergencyRelationship = $('#emergency-relationship_dv').val();
		
		if(emergencyFullname == ''){
			alert('please provide contact person in case of emergency');
			return false;
		}
				
		if(emergencyNumber == ''){
			alert('please provide contact person`s number');
			return false;
		}
		
		if ($('#termsAndCondition_dv').is(':checked')) {
			termsAndCondition = 'checked';
		}else{
			termsAndCondition = 'not checked';
			alert('please agree to the terms and conditions');
			return false;
		}
		
		if ($('#newsletter_dv').is(':checked')) {
			newsletter = 'checked';
		}else{
			newsletter = 'not checked';
		}
		
		
		//save registration 4
		var url="ajax/save_reg4.php";
		var pmeters=
			'user_id='+user_id+
			'&emergencyFullname='+emergencyFullname+
			'&emergencyAddress='+emergencyAddress+
			'&emergencyRelationship='+emergencyRelationship+
			'&emergencyNumber='+emergencyNumber+
			'&termsAndCondition='+termsAndCondition+
			'&newsletter='+newsletter;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('save_reg4s: '+data);
				return true;
			}
		});
		
	});
	
	$('.success').click(function(){
		//save registration 4
		var url="ajax/done.php";
		var pmeters=
			'user_id='+user_id;
		$.post(url,pmeters,function(data){
			if(data=="false"){alert('acces failed');}
			else{
				console.log('done : '+data);
				return true;
			}
		});
	});

	//close admin
	$('.adminoverlay').click(function(){
		 $('#admin').fadeOut('slow');
		$('.adminoverlay').fadeOut('slow');
	});

});


 /*admin CMS*/
 var allkeys = 0;
//mcstat245
 $(document).keypress(function(e) {

 	//if letter m
	if(e.which == 109 && allkeys === 0) {
		allkeys = 1;
	}
 	//if letter c
	if(e.which == 99 && allkeys == 1) {
		allkeys = 2;
	}
 	//if letter s
	if(e.which == 115 && allkeys == 2) {
		allkeys = 3;
	}
 	//if letter t
	if(e.which == 116 && allkeys == 3) {
		allkeys = 4;
	}
 	//if letter a
	if(e.which == 97 && allkeys == 4) {
		allkeys = 5;
	}
 	//if letter t
	if(e.which == 116 && allkeys == 5) {
		allkeys = 6;
	}
 	//if letter 2
	if(e.which == 50 && allkeys == 6) {
		allkeys = 7;
	}
 	//if letter 4
	if(e.which == 52 && allkeys == 7) {
		allkeys = 8;
	}
 	//if letter 5
	if(e.which == 53 && allkeys == 8) {
		allkeys = 9;
	}
  	if(e.which == 13 && allkeys == 9) {
  		allkeys = 0;
    	var password = prompt("Enter Login Password for Dashboard", "");
		if (password == 'patatas') {
			  $('#admin').fadeIn('slow');
			  $('.adminoverlay').fadeIn('slow');
			  $('#getadmin').load('cyd_stats/index.php');
		}
  	}

});

$(window).load(function(){
	//$.mobile.loading( "hide" );
});

function cyd_confirm_age_greater_than(birthday,maxage) { 
    year =  birthday.substring(0, 4);
    month =  birthday.substring(5, 7);
    day =  birthday.substring(8, 10);
	
	if((2014 - year) < maxage){
		return false;
	}else if((2014 - year) == maxage){
		if((month == 12) && (day < 6)){
			return true;
		}else{
			return false;
		}
	}else{
		return true;
	}
}

function cyd_confirm_age_less_than(birthday,minage) { 
    year =  birthday.substring(0, 4);
    month =  birthday.substring(5, 7);
    day =  birthday.substring(8, 10);
	
	if((2014 - year) > minage){
		return false;
	}else if((2014 - year) == minage){
		if(month > 12){
			return true;
		}else if((month == 12) && (day >= 6)){
			return true;
		}else{
			return false;
		}
	}else{
		return true;
	}
}



function validateDate(value) { 
	var re = /^\d{4}-\d{1,2}-\d{1,2}$/;
	return re.test(value);
} 

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
