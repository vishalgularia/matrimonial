<!--//app/View/Users/login.ctp-->
<?php 
echo $this->Session->flash('auth');
/*if( isset( $error ) ){
		debug( $error );
}*/
//echo $user_profile->identifier;
if(isset($thisuser)){
	//echo $provider;
	//print_r($thisuser);
?>
<style type="text/css">
.rselect select{ 
width: 18% !important;
margin-left: 1% !important;
}
.addressdiv textarea{
float: right !important;
width: 55% !important;
margin-right: 10%;
}
.imageset{
float: left;
width: 30%;
clear: both;
margin-top: -38px;
margin-left: 50%;
}
</style>
<?php echo $this->Form->create('User', array('type' => 'file','action' => 'editprofile')); ?>
<div class="middle-container">
   
    <h2 class="title"><?php echo 'Update your Profile' ?></h2>

    <div class="form">
         <?php 
		      if($provider=='Facebook'){
				    //for matrimonial table
					echo $this->Form->input('Matrimonial.facebook_profile', array('type' => 'hidden','value' => $thisuser['Matrimonial']['facebook_profile']) );
				    echo $this->Form->input('Matrimonial.twitter_profile', array('type' => 'hidden','value' => '') );
					echo $this->Form->input('Matrimonial.linkedin_profile', array('type' => 'hidden','value' => '') );
					echo $this->Form->input('Matrimonial.google_profile', array('type' => 'hidden','value' => '') );
					  
			  } 
			  else if($provider=='Google'){
				 //for matrimonial table
					echo $this->Form->input('Matrimonial.facebook_profile', array('type' => 'hidden','value' =>'') );
				    echo $this->Form->input('Matrimonial.twitter_profile', array('type' => 'hidden','value' => '') );
					echo $this->Form->input('Matrimonial.linkedin_profile', array('type' => 'hidden','value' => '') );
					echo $this->Form->input('Matrimonial.google_profile', array('type' => 'hidden','value' => $thisuser['Matrimonial']['google_profile']) );
			  } 
			  else if($provider=='Twitter'){
				
				//for matrimonial table
				echo $this->Form->input('Matrimonial.facebook_profile', array('type' => 'hidden','value' =>'') );
				echo $this->Form->input('Matrimonial.twitter_profile', array('type' => 'hidden','value' => $thisuser['Matrimonial']['twitter_profile']) );
				echo $this->Form->input('Matrimonial.linkedin_profile', array('type' => 'hidden','value' => '') );
				echo $this->Form->input('Matrimonial.google_profile', array('type' => 'hidden','value' =>  '') );
				
			  } 
			  else if($provider=='Linkedin'){
				//for matrimonial table
				echo $this->Form->input('Matrimonial.facebook_profile', array('type' => 'hidden','value' =>'') );
				echo $this->Form->input('Matrimonial.twitter_profile', array('type' => 'hidden','value' => '') );
				echo $this->Form->input('Matrimonial.linkedin_profile', array('type' => 'hidden','value' => $thisuser['Matrimonial']['linkedin_profile']) );
				echo $this->Form->input('Matrimonial.google_profile', array('type' => 'hidden','value' =>  '') );
			  }
		 ?>
         <div class="col-md-6 col-sm-6 input-row">
                <?php echo $this->Form->input('Matrimonial.first_name', array('label' => 'First Name:','div' => false,'placeholder' => 'First Name','default' => $thisuser['Matrimonial']['first_name']) ); ?>
      </div>
      <div class="col-md-6 col-sm-6 input-row">
          <?php echo $this->Form->input('Matrimonial.last_name', array('label' => 'Last Name:','div' => false,'placeholder' => 'Last Name','default' => $thisuser['Matrimonial']['last_name']) ); ?>
     </div>
     <div class="col-md-6 col-sm-6 input-row">
          <?php echo $this->Form->input('Matrimonial.email_address', array('label' => 'Email:','div' => false,'placeholder' => 'Email','default' =>$thisuser['Matrimonial']['email_address']) ); ?>
     </div>

      <div class="col-md-6 col-sm-6 input-row">
       <?php echo $this->Form->input('Matrimonial.father_name', array('label' => 'Father\'s Name:','div' => false,'placeholder' => 'Father\'s Name','default' => $thisuser['Matrimonial']['father_name']) ); ?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">
          <?php echo $this->Form->input('Matrimonial.mother_name', array('label' => 'Mother\'s Name:','div' => false,'placeholder' => 'Mother\'s Name','default' => $thisuser['Matrimonial']['mother_name']) ); ?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">

        <label>Gender:</label>
        <label class="radio"> <?php  $options = array('1' => 'Male', '2' => 'Female');
		    if($thisuser['Matrimonial']['gender']==1){
				$gender='1';
			}else{
				$gender='2';
			}
            $attributes = array('legend' => false,'default' => $gender);
            echo $this->Form->radio('Matrimonial.gender', $options, $attributes);?></label>

      </div>

      <div class="col-md-6 col-sm-6 input-row">
      <?php echo $this->Form->input('Matrimonial.date_of_birth', array('label' => 'Date of Birth:','type'=>'text','div' => false,'placeholder' => 'mm/dd/yy','default' => date('m/d/Y',strtotime($thisuser['Matrimonial']['date_of_birth']))) ); ?>
      </div> 
      <div class="col-md-6 col-sm-6 input-row">
         <?php echo $this->Form->input('Matrimonial.caste', array('label' => 'Caste:','div' => false,'placeholder' => 'Caste','default' => $thisuser['Matrimonial']['caste']) ); ?>
      </div>      
      <div class="col-md-6 col-sm-6 input-row">
         <?php  
		 $education = array('B.A' => 'B.A', 
		 'B.Arch' => 'B.Arch',
		 'BCA' => 'BCA',
		 'B.B.A' => 'B.B.A', 
		 'B.Com' => 'B.Com',
		 'B.Ed' => 'B.Ed',
		 'BDS' => 'BDS',
		 'BHM' => 'BHM',
		 'B.Pharma' => 'B.Pharma',
		 'B.Pharma' => 'B.Pharma',
		 'B.Sc' => 'B.Sc',
		 'B.Sc' => 'B.Sc',
		 'B.Tech/B.E.' => 'B.Tech/B.E.',
		 'LLB' => 'LLB',
		 'MBBS' => 'MBBS',
		 'Diploma' => 'Diploma',
		 'CA' => 'CA',
		 'CS' => 'CS',
		 'ICWA' => 'ICWA',
		 'Integrated PG' => 'Integrated PG',
		 'LLM' => 'LLM',
		 'M.A' => 'M.A',
		 'M.Arch' => 'M.Arch',
		 'M.Com' => 'M.Com',
		 'M.Ed' => 'M.Ed',
		 'M.Pharma' => 'M.Pharma',
		 'M.Sc' => 'M.Sc',
		 'M.Tech' => 'M.Tech',
		 'MBA/PGDM' => 'MBA/PGDM',
		 'MCA' => 'MCA',
		 'MS' => 'MS',
		 'PG Diploma' => 'PG Diploma',
		 'MVSC' => 'MVSC',
		 'MCM' => 'MCM',
		 'other' => 'other');
           echo $this->Form->input(
              'Matrimonial.education',
              array('label' => 'Education:','options' => $education, 'default' => $thisuser['Matrimonial']['education'],'empty' => 'Choose Education')
         );?>
      </div>
      <div class="col-md-6 col-sm-6 input-row">
       <?php  $profession = array(
		'Construction Project Manager' => 'Construction Project Manager', 
		'Project Builder' => 'Project Builder', 
		'Engineering Manager' => 'Engineering Manager', 
		'Production Manager (Mining)' => 'Production Manager (Mining)',
	    'Child Care Centre Manager' => 'Child Care Centre Manager',
		'Medical Administrator' => 'Medical Administrator',
		'Nursing Clinical Director' => 'Nursing Clinical Director',
		'Primary Health Organisation Manager' => 'Primary Health Organisation Manager',
		'Welfare Centre Manager' => 'Welfare Centre Manager',
		'Accountant (General)' => 'Accountant (General)',
		'Management Accountant' => 'Management Accountant',
		'Taxation Accountant' => 'Taxation Accountant',
		'External Auditor' => 'External Auditor',
		'Internal Auditor' => 'Internal Auditor',
		'Actuary' => 'Actuary',
		'Land Economist' => 'Land Economist',
		'Valuer' => 'Valuer',
		'Ship\'s Engineer' => 'Ship\'s Engineer',
		'Ship\'s Master' => 'Ship\'s Master',
		'Ship\'s Officer' => 'Ship\'s Officer',
		'Architect' => 'Architect',
		'Landscape Architect' => 'Landscape Architect',
		'Cartographer' => 'Cartographer',
		'Other Spatial Scientist' => 'Other Spatial Scientist',
		'Surveyor' => 'Surveyor',
		'Urban and Regional Planner' => 'Urban and Regional Planner',
		'Civil Engineer' => 'Civil Engineer',
		'Geotechnical Engineer' => 'Geotechnical Engineer','Quantity Surveyor' => 'Quantity Surveyor','other' => 'other');
           echo $this->Form->input(
              'Matrimonial.profession',
              array('label' => 'Your Occupation:','options' => $profession, 'default' =>  $thisuser['Matrimonial']['profession'],'empty' => 'Choose Occupation')
         );?>

      </div>
      <div class="col-md-6 col-sm-6 input-row">
          <?php  $salary = array('0-10000' => '0-10000',
		    '10000-20000' => '10000-20000',
		    '20000-30000' => '20000-30000', 
			'30000-40000' => '30000-40000', 
			'40000-50000' => '40000-50000',
			'50000-60000' => '50000-60000',
			'60000-70000' => '60000-70000',
			'70000-80000' => '70000-80000',
			'80000-90000' => '80000-90000',
			'more than 90k' => 'more than 90k');
           echo $this->Form->input(
              'Matrimonial.salary',
              array('label' => 'Salary:','options' => $salary, 'default' => $thisuser['Matrimonial']['salary'],'empty' => 'Choose Salary')
         );?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">

         <?php echo $this->Form->input('Matrimonial.number_of_brothers', array('default' => $thisuser['Matrimonial']['number_of_brothers']) ); ?> 
         </div>
      <div class="col-md-6 col-sm-6 input-row">
           <?php echo $this->Form->input('Matrimonial.number_of_sisters', array('default' => $thisuser['Matrimonial']['number_of_sisters']) ); ?>
        </div>
       <div class="col-md-6 col-sm-6 input-row">
        <?php echo $this->Form->input('Matrimonial.address', array('label' => 'Address:','div'=> array('class'=>'addressdiv'),'type' => 'textarea','default' =>$thisuser['Matrimonial']['address']) ); ?>
       </div>
      <div class="col-md-6 col-sm-6 input-row">
       <?php  $height = array(
	   'less than 4.6' => 'Less than 4 ft 6 in',
	   '4.6' => '4 ft 6 in', 
	   '4.7' => '4 ft 7 in',
	   '4.8' => '4 ft 8 in',
	   '4.9' => '4 ft 9 in',
	   '4.10' => '4 ft 10 in',
	   '4.11' => '4 ft 11 in',
	   '5.0' => '5 ft',
	   '5.1' => '5 ft 1 in',
	   '5.2' => '5 ft 2 in',
	   '5.3' => '5 ft 3 in',
	   '5.4' => '5 ft 4 in',
	   '5.5' => '5 ft 5 in',
	   '5.6' => '5 ft 6 in',
	   '5.7' => '5 ft 7 in',
	   '5.8' => '5 ft 8 in',
	   '5.9' => '5 ft 9 in',
	   '5.10' => '5 ft 10 in',
	   '5.11' => '5 ft 11 in',
	   '6.0' => '6 ft',
	   '6.1' => '6 ft 1 in',
	   '6.2' => '6 ft 2 in',
	   '6.3' => '6 ft 3 in',
	   '6.4' => '6 ft 4 in',
	   '6.5' => '6 ft 5 in',
	   '6.6' => '6 ft 6 in',
	   '6.7' => '6 ft 7 in',
	   '6.8' => '6 ft 8 in',
	   '6.9' => '6 ft 9 in',
	   '6.10' => '6 ft 10 in',
	   '6.11' => '6 ft 11 in',
	   '7.0' => '7 ft',
	   'More than 7.0' => 'More than 7 ft',
	  );
           echo $this->Form->input(
              'Matrimonial.height',
              array('label' => 'Height-Foot &amp; Inch:','options' => $height, 'default' => $thisuser['Matrimonial']['height'],'empty' => 'Choose Height')
         );?>        

       </div>
        
       <div class="col-md-6 col-sm-6 input-row">
        <?php echo $this->Form->input('Matrimonial.city', array('label' => 'City:','div' => false,'placeholder' => 'City','default' => $city['City']['city_name']) ); ?>
       </div>      
      
       <div class="col-md-6 col-sm-6 input-row">
         <?php 
		 if($thisuser['Matrimonial']['country_primary_key']=='103'){
		     echo $this->Form->input('State.field', array('label' => 'Select State:','div' => false, 'type'=>'select','options'=>$states,'default' => $thisuser['Matrimonial']['state_primary_key']) ); 
		 }else{
			 echo $this->Form->input('State.field', array('label' => 'Select State:','div' => false, 'type'=>'text','default' => $state['State']['state_name'] ) ); 
		 }
		?>
       </div>
       <div class="col-md-6 col-sm-6 input-row">
         <?php echo $this->Form->input('Country.field', array('label' => 'Select Country:','div' => false, 'type'=>'select','options'=>$countries,'default' => $thisuser['Matrimonial']['country_primary_key']) ); ?>
       </div>
        
       <div class="col-md-6 col-sm-6 input-row">
         <?php echo $this->Form->input('Matrimonial.zip', array('label' => 'Zip code:','div' => false,'placeholder' => 'Zip code','default' => $thisuser['Matrimonial']['zip']) ); ?>
       </div> 
            
       <div class="col-md-6 col-sm-6 input-row">
         <?php echo $this->Form->input('Matrimonial.contact_number', array('label' => 'Contact Number:','div' => false,'placeholder' => 'Contact Number','default' => $thisuser['Matrimonial']['contact_number']) ); ?>
        </div>  
        <div class="col-md-6 col-sm-6 input-row">
        <?php echo $this->Form->input('Matrimonial.other_qualification', array('label' => 'Other Qualification:','div'=> array('class'=>'addressdiv'),'type' => 'textarea','default' => $thisuser['Matrimonial']['other_qualification']) ); ?>
       </div>     

      <div class="title-row" style='margin-top:20px;'><strong>Register your Gotra</strong></div>

      <div class="col-md-6 col-sm-6 input-row">
       <?php  $gotra = array(
		'Airan/Aeron' => 'Airan/Aeron', 
		'Bansal' => 'Bansal', 
		'Bindal' => 'Bindal', 
		'Dharan' => 'Dharan', 
		'Garg' => 'Garg',
		'Goyal' => 'Goyal',
		'Gangal' => 'Gangal',
		'Jindal' => 'Jindal',
		'Jindal' => 'Jindal',
		'Kansal' => 'Kansal',
		'Kuchhal' => 'Kuchhal',
		'Madhukul' => 'Madhukul',
		'Mangal' => 'Mangal',
		'Mittal' => 'Mittal',
		'Nangal' => 'Nangal',
		'Singhal' => 'Singhal',
		'Tayal' => 'Tayal',
		'Tingal' => 'Tingal',
		);
           echo $this->Form->input(
              'Matrimonial.father_gotra',
              array('label' => 'Father Gotra:','options' => $gotra, 'default' => $thisuser['Matrimonial']['father_gotra'],'empty' => 'Choose Gotra')
         );?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">
    <?php  $gotra = array(
		'Airan/Aeron' => 'Airan/Aeron', 
		'Bansal' => 'Bansal', 
		'Bindal' => 'Bindal', 
		'Dharan' => 'Dharan', 
		'Garg' => 'Garg',
		'Goyal' => 'Goyal',
		'Gangal' => 'Gangal',
		'Jindal' => 'Jindal',
		'Jindal' => 'Jindal',
		'Kansal' => 'Kansal',
		'Kuchhal' => 'Kuchhal',
		'Madhukul' => 'Madhukul',
		'Mangal' => 'Mangal',
		'Mittal' => 'Mittal',
		'Nangal' => 'Nangal',
		'Singhal' => 'Singhal',
		'Tayal' => 'Tayal',
		'Tingal' => 'Tingal',
		);
           echo $this->Form->input(
              'Matrimonial.mother_gotra',
              array('label' => 'Mother Gotra:','options' => $gotra, 'default' => $thisuser['Matrimonial']['mother_gotra'],'empty' => 'Choose Gotra')
         );?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">

       <?php  $gotra = array(
		'Airan/Aeron' => 'Airan/Aeron', 
		'Bansal' => 'Bansal', 
		'Bindal' => 'Bindal', 
		'Dharan' => 'Dharan', 
		'Garg' => 'Garg',
		'Goyal' => 'Goyal',
		'Gangal' => 'Gangal',
		'Jindal' => 'Jindal',
		'Jindal' => 'Jindal',
		'Kansal' => 'Kansal',
		'Kuchhal' => 'Kuchhal',
		'Madhukul' => 'Madhukul',
		'Mangal' => 'Mangal',
		'Mittal' => 'Mittal',
		'Nangal' => 'Nangal',
		'Singhal' => 'Singhal',
		'Tayal' => 'Tayal',
		'Tingal' => 'Tingal',
		);
           echo $this->Form->input(
              'Matrimonial.dadi_gotra',
              array('label' => 'Dadi Gotra:','options' => $gotra, 'default' =>$thisuser['Matrimonial']['dadi_gotra'],'empty' => 'Choose Gotra')
         );?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">
         <?php  $gotra = array(
		'Airan/Aeron' => 'Airan/Aeron', 
		'Bansal' => 'Bansal', 
		'Bindal' => 'Bindal', 
		'Dharan' => 'Dharan', 
		'Garg' => 'Garg',
		'Goyal' => 'Goyal',
		'Gangal' => 'Gangal',
		'Jindal' => 'Jindal',
		'Jindal' => 'Jindal',
		'Kansal' => 'Kansal',
		'Kuchhal' => 'Kuchhal',
		'Madhukul' => 'Madhukul',
		'Mangal' => 'Mangal',
		'Mittal' => 'Mittal',
		'Nangal' => 'Nangal',
		'Singhal' => 'Singhal',
		'Tayal' => 'Tayal',
		'Tingal' => 'Tingal',
		);
           echo $this->Form->input(
              'Matrimonial.nani_gotra',
              array('label' => 'Nani Gotra:','options' => $gotra, 'default' => $thisuser['Matrimonial']['nani_gotra'],'empty' => 'Choose Gotra')
         );?>
      </div>

       <div class="col-md-12 col-sm-12 input-row">
       <?php echo $this->Form->input(
              'Matrimonial.profile_image', array('label' => 'Your Profile Photo: ','div' => array('style'=>'width:50%'),'type' => 'file'));
              ?>
        <div class='imageset' ><figure class="user-img"><img src='<?php 
		
		if(!empty($thisuser['PhotoCustomer'])){
		    echo $thisuser['PhotoCustomer'][0]['photo_path'];
		}else{
		   if($thisuser['Matrimonial']['gender']==1){
		        echo $this->webroot.'img/male.png';
		   }else{
			    echo $this->webroot.'img/female.png';
		   }
		}?>' alt='<?php echo $thisuser['Matrimonial']['first_name'];?>'/></figure></div>

      </div>

      <div class="clear"></div>

       <div class="col-md-12 col-sm-12 input-row textarea">
        <?php echo $this->Form->input(
              'Matrimonial.profile_short_description', array('label' =>'Profile Short Description :','type' => 'textarea','default'=> $thisuser['Matrimonial']['profile_short_description']));?>

      </div>
       <div class="col-md-12 col-sm-12 input-row textarea" style='margin-top:10px;'>
        <?php echo $this->Form->input(
              'Matrimonial.profile_long_description', array('label' => 'Profile Long Description :','type' => 'textarea','default'=>$thisuser['Matrimonial']['profile_long_description']));?>

      </div>

      <div class="col-md-6 col-sm-6 input-row">
       <?php
		
		echo $this->Form->button('Update Now', array('type' => 'submit' ,'class'=>'register-btn btn'));
        echo $this->Form->end();
		?>
        </div>
   </div>
</div>
<?php } ?>
<script type="application/javascript" >
jQuery(document).ready(function(){
	jQuery('#UserEditprofileForm').validate({
	    rules: {
	      "data[Matrimonial][first_name]": {
	      	required: true
	      },
	     "data[Matrimonial][last_name]": {
	        required: true
	      },
		  "data[Matrimonial][email_address]": {
	        required: true,
	        email: true
	      },
		  "data[Matrimonial][father_name]": {
	        required: true
	      },
		  "data[Matrimonial][mother_name]": {
	        required: true
	      },
		  "data[Matrimonial][caste]": {
	        required: true
	      },
		  "data[Matrimonial][number_of_brothers]": {
	        required: true,
			number:true,
			range: [0,10]
	      },
		  "data[Matrimonial][number_of_sisters]": {
	        required: true,
			number:true,
			range: [0,10]
	      },
		  "data[Matrimonial][gender]": {
	        required: true
	      },
		  "data[Matrimonial][education]": {
	        required: true
	      },
		  "data[Matrimonial][date_of_birth]": {
	        required: true,
			date: true
	      },
		  "data[Matrimonial][profession]": {
	        required: true
	      },
		  "data[Matrimonial][city]": {
	        required: true
	      },
		  "data[Matrimonial][address]": {
	        required: true
	      },
		  "data[Matrimonial][zip]": {
	       required: true,
			 number: true
	      },
		  "data[Matrimonial][contact_number]": {
	         required: true,
			 number: true
	      },
		  "data[Matrimonial][father_gotra]": {
	        required: true
	      },
		  "data[Matrimonial][mother_gotra]": {
	        required: true
	      },
		  "data[Matrimonial][dadi_gotra]": {
	        required: true
	      },
		  "data[Matrimonial][nani_gotra]": {
	        required: true
	      },
		  "data[Matrimonial][profile_image]": {
	         accept: "jpg,jpeg,png,gif"
	      },
		  "data[Matrimonial][profile_short_description]": {
	          required: true,
			  minlength: 50
	      },
       },
	   messages: {
		    "data[Matrimonial][first_name]": {
				required: "First Name is not empty.",
			},
			"data[Matrimonial][profile_image]": {
				accept: "Please enter an image file.(format may be jpg,jpeg,png,gif)",
			}
		},
		highlight: function(element) {
				$(element).closest('.input-row').removeClass('success').addClass('error');
		},
		success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.input-row').removeClass('error').addClass('success');
		}
	  });
});	
//jQuery('#dp3').datepicker();
jQuery("#MatrimonialDateOfBirth").datepicker({dateFormat: 'mm/dd/yy',changeYear: true,yearRange:'1980:2000'});
jQuery('#MatrimonialTimeOfBirth').timepicker({ 'step': 10 });
function changestate(val){
	var countryid=val;
	if(countryid!='103'){
		jQuery('#statechange').html('<label for="StateField">Select State:</label><input name="data[State][field]" placeholder="State" type="text" id="StateField">');
	}else{
		jQuery('#statechange').html('<label for="StateField">Select State</label><select name="data[State][field]" id="StateField" class="valid"><option value="1">Andaman and Nicobar Island (UT)</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="6">Chandigarh (UT)</option><option value="7">Chhattisgarh</option><option value="8">Dadra and Nagar Haveli (UT)</option><option value="9">Daman and Diu (UT)</option><option value="10">Delhi (NCT)</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Karnataka</option><option value="16">Kerala</option><option value="17">Lakshadweep (UT)</option><option value="18">Madhya Pradesh</option><option value="19">Maharashtra</option><option value="20">Manipur</option><option value="21">Meghalaya</option><option value="22">Mizoram</option><option value="23">Nagaland</option><option value="24">Odisha</option><option value="25">Puducherry (UT)</option><option value="26">Punjab</option><option value="27">Rajasthan</option><option value="28">Sikkim</option><option value="29">Tamil Nadu</option><option value="30">Tripura</option><option value="31">Uttarakhand</option><option value="32">Uttar Pradesh</option><option value="33">West Bengal</option></select>');
	}
}
</script>