<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/optionsearch.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Thousands of verified Members</h3>
      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
    </div>
  </div>
  <body onLoad="initClock()">
  <div class="clock" id="timedate">
    <a id="d">1</a>
	<a id="mon">January</a>,
    <a id="y">0</a><br />
    <a id="h">12</a> :
    <a id="m">00</a>:
    <a id="s">00</a>:
    <a id="mi">000</a>
  </div>
</div> 








<form action="#" id="header-search-people" class="form-area" novalidate="novalidate" autocomplete="off">

	<div class="Findpartner">
		<h1>Find your perfect <span>life partner</span></h1>
</div>

  <div class="row">
      <div class="col-md-10">
          <div class="styled-input wide multi">


			  
              <div class="state" id="select-state">
                  <select name="state">
                      <option value="All">All</option>
                      <option value="AL">Groom</option>
                      <option value="AK">Bride</option>
                  </select>
                  <label>I'm Looking</label>
                  <svg class="chevron-down" width="17px" height="10px" viewBox="0 0 17 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="UI-Elements-Forms" transform="translate(-840.000000, -753.000000)" stroke="#4A4A4A" stroke-width="0.9">
                              <g id="Done-Copy-2" transform="translate(622.000000, 727.000000)">
                                  <polyline id="Rectangle-16" transform="translate(226.400000, 27.400000) rotate(-45.000000) translate(-226.400000, -27.400000) "
                                      points="231.8 32.8 221 32.8 221 22"></polyline>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>



<div class="state" id="select-state">
			  <select name="permanent_address" class="selectsearch">
			  <option value="All">All</option>
	<optgroup label="Barishal Division">
	<option value="Barguna">Barguna</option>
	<option value="Barishal">Barishal</option> 
	   <option value="Bhola">Bhola</option>
	<option value="Jhalokati">Jhalokati</option>
	<option value="Patuakhali">Patuakhali</option> 
	   <option value="Pirojpur">Pirojpur</option>
</optgroup>

<optgroup label="Chattagram Division">
	<option value="Bandarban">Bandarban</option>
	<option value="Brahmanbaria">Brahmanbaria</option> 
	   <option value="Chandpur">Chandpur</option>
	<option value="Chattogram">Chattogram</option>
	<option value="Cumilla">Cumilla</option>
	<option value="Coxbazar">Cox's Bazar</option>  
	   <option value="Feni">Feni</option>
	<option value="Khagrachhari">Khagrachhari</option>
	<option value="Lakshmipur">Lakshmipur</option>
	<option value="Noakhali">Noakhali</option>
	<option value="Rangamati">Rangamati</option>
</optgroup>

<optgroup label="Dhaka Division">
	   <option value="Dhaka">Dhaka</option>
	<option value="Faridpur">Faridpur</option>
	<option value="Gazipur">Gazipur</option> 
	   <option value="Gopalganj">Gopalganj</option>
	<option value="Kishoreganj">Kishoreganj</option>
	<option value="Madaripur">Madaripur</option>
	<option value="Manikganj">Manikganj</option> 
	   <option value="Munshiganj">Munshiganj</option>
	<option value="Narayanganj">Narayanganj</option>
	<option value="Narsingdi">Narsingdi</option> 
	   <option value="Rajbari">Rajbari</option>
	<option value="Shariatpur">Shariatpur</option>
	<option value="Tangail">Tangail</option>
</optgroup>

<optgroup label="Khulna Division">
	   <option value="Bagerhat">Bagerhat</option>
	<option value="Chuadanga">Chuadanga</option>
	<option value="Jashore">Jashore</option>
	<option value="Jhenaidah">Jhenaidah</option>  
	   <option value="Khulna">Khulna</option>
	<option value="Kushtia">Kushtia</option>
	<option value="Magura">Magura</option>
	<option value="Meherpur">Meherpur</option>
	<option value="Narail">Narail</option> 
	   <option value="Satkhira">Satkhira</option>
</optgroup>

<optgroup label="Mymensingh Division">
	<option value="Jamalpur">Jamalpur</option>
	<option value="Mymensingh">Mymensingh</option> 
	   <option value="Netrokona">Netrokona</option>
	<option value="Sherpur">Sherpur</option>
</optgroup>

<optgroup label="Rajshahi Division">
	<option value="Bogura">Bogura</option>
	<option value="Chapai Nawabganj">Chapai Nawabganj</option> 
	<option value="Joypurhat">Joypurhat</option> 
	   <option value="Naogaon">Naogaon</option>
	<option value="Natore">Natore</option>
	   <option value="Pabna">Pabna</option>
	<option value="Rajshahi">Rajshahi</option>
	<option value="Sirajganj">Sirajganj</option>
</optgroup>

<optgroup label="Rangpur Division">
	   <option value="Dinajpur">Dinajpur</option>
	<option value="Gaibandha">Gaibandha</option>
	<option value="Kurigram">Kurigram</option>
	<option value="Lalmonirhat">Lalmonirhat</option>  
	   <option value="Nilphamari">Nilphamari</option>
	<option value="Panchagarh">Panchagarh</option>
	<option value="Rangpur">Rangpur</option>
	<option value="Thakurgaon">Thakurgaon</option>
</optgroup>

<optgroup label="Sylhet Division">
	<option value="Habiganj">Habiganj</option> 
	   <option value="Moulvibazar">Moulvibazar</option>
	<option value="Sunamganj">Sunamganj</option>
	<option value="Sylhet">Sylhet</option>
</optgroup>
</select>
                  <label>District</label>
                  <svg class="chevron-down" width="17px" height="10px" viewBox="0 0 17 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="UI-Elements-Forms" transform="translate(-840.000000, -753.000000)" stroke="#4A4A4A" stroke-width="0.9">
                              <g id="Done-Copy-2" transform="translate(622.000000, 727.000000)">
                                  <polyline id="Rectangle-16" transform="translate(226.400000, 27.400000) rotate(-45.000000) translate(-226.400000, -27.400000) "
                                      points="231.8 32.8 221 32.8 221 22"></polyline>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>





			  
<div class="state" id="select-state">
                            <select name="occupation" class="selectsearch">
			                   <option value="All">All</option>
			                    <optgroup label="Students Sector">
									<option value="Students of Kawmi Madrasa">Students of Kawmi Madrasa</option> 
									<option value="Students of High School">Students of High School</option>
									<option value="Students of Doploma">Students of Doploma</option> 
	               		            <option value="Students of College">Students of College</option>
	                                <option value="Students of B.Sc. Engineering">Students of B.Sc. Engineering</option> 
	               		            <option value="Students of Medical Sector">Students of Medical Sector</option>
	                                <option value="Students of B.Sc.">Students of B.Sc.</option>
	                                <option value="Students of M.Sc.">Students of M.Sc.</option>
									<option value="Students of B.A.">Students of B.A.</option> 
	               		            <option value="Students of M.A.">Students of M.A.</option>
									<option value="Students of B.Com.">Students of B.Com.</option> 
	               		            <option value="Students of M.Com.">Students of M.Com.</option>
                                    </optgroup>
									
								     <optgroup label="Medical Sector">
	                                <option value="MBBS Doctor">MBBS Doctor</option>
	                                <option value="Internship Doctor">Internship Doctor</option> 
									<option value="FCPS Doctor">FCPS Doctor</option>
									<option value="Pharmacist">Pharmacist</option>
									<option value="Diploma Doctor">Diploma Doctor</option>
									<option value="Peramedical">Peramedical</option> 
	               		            <option value="Nursing">Nursing</option>
									<option value="Midwifary">Midwifary</option>
                                    </optgroup>

									<optgroup label="Engineers Sector">
									<option value="Aerospace Engineer">Aerospace Engineer</option>
									<option value="Agricultural Engineer">Agricultural Engineer</option>
									<option value="Architectural Engineer">Architectural Engineer</option>
									<option value="Biomedical Engineer">Biomedical Engineer</option>
									<option value="Chemical Engineer">Chemical Engineer</option>
									<option value="Civil Engineer">Civil Engineer</option>
									<option value="Electrical Engineer">Electrical Engineer</option>
									<option value="Marine Engineer">Marine Engineer</option> 
									<option value="Mechanical Engineer">Mechanical Engineer</option>
									<option value="Network Engineer">Network Engineer</option> 
									<option value="Robotics Engineer">Robotics Engineer</option>
	                                <option value="Software Engineer">Software Engineer</option> 
	               		            <option value="Textile Engineer">Textile Engineer</option>
                                    </optgroup>

									<optgroup label="Teachers Sector">
									<option value="Teaches of Kawmi Madrasa">Teaches of Kawmi Madrasa</option> 
	                                <option value="Teaches of Primary School">Teaches of Primary School</option> 
	               		            <option value="Teaches of High School">Teaches of High School</option>
									<option value="Professor of College">Professor of College</option>
									<option value="Professor of Public University">Professor of Public University</option>
									<option value="Professor of Private University">Professor of Private University</option>
									<option value="Professor of National University">Professor of National University</option>
									<option value="Professor of Degree">Professor of Degree</option>
                                    </optgroup>

									<optgroup label="Defense Sector">
	                                <option value="Army">Army</option> 
	               		            <option value="Air Force">Air Force</option>
	                                <option value="Navy">Navy</option>
	                                <option value="Police">Police</option>
									<option value="Fire Service">Fire Service</option> 
	               		            <option value="RAB">RAB</option>
	                                <option value="DB">DB</option>
                                    </optgroup>

									<optgroup label="Garments Sector">
	                                <option value="Worker of Garments">Worker of Garments</option> 
	               		            <option value="Managers of Garments">Managers of Garments</option>
                                    </optgroup>

									<optgroup label="Driver Sector">
	                                <option value="Bus Driver">Bus Driver</option> 
									<option value="Micro Driver">Micro Bus Driver</option> 
	                                <option value="Car Driver">Car Driver</option> 
	                                <option value="Truck Driver">Truck Driver</option>
									<option value="CNG Driver">CNG Driver</option> 
	                                <option value="Auto Driver">Auto Driver</option>
                                    </optgroup>

									<optgroup label="Others Sector">
									<option value="Banker">Banker</option>
									<option value="Business">Business</option> 
									<option value="Entrepreneur">Entrepreneur</option> 
									<option value="Lawyer">Lawyer</option> 
	                                <option value="Frelancer">Frelancer</option>
									<option value="Graphics Desigener">Graphics Desigener</option>
									<option value="Sales & Marketing (SR)">Sales & Marketing (SR)</option>  
	                                <option value="No Job">No Job</option>
								</select>
                  <label>Occupation</label>
                  <svg class="chevron-down" width="17px" height="10px" viewBox="0 0 17 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="UI-Elements-Forms" transform="translate(-840.000000, -753.000000)" stroke="#4A4A4A" stroke-width="0.9">
                              <g id="Done-Copy-2" transform="translate(622.000000, 727.000000)">
                                  <polyline id="Rectangle-16" transform="translate(226.400000, 27.400000) rotate(-45.000000) translate(-226.400000, -27.400000) "
                                      points="231.8 32.8 221 32.8 221 22"></polyline>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>









              <div class="state" id="select-state">
                  <select name="state">
                      <option value="All">All</option>
                      <option value="AL">Unmarriade</option>
                      <option value="AK">Divorce</option>
                      <option value="AZ">Bidhoba</option>
                      <option value="AR">Bipotnik</option>

                  </select>
                  <label>Maritial Status</label>
                  <svg class="chevron-down" width="17px" height="10px" viewBox="0 0 17 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="UI-Elements-Forms" transform="translate(-840.000000, -753.000000)" stroke="#4A4A4A" stroke-width="0.9">
                              <g id="Done-Copy-2" transform="translate(622.000000, 727.000000)">
                                  <polyline id="Rectangle-16" transform="translate(226.400000, 27.400000) rotate(-45.000000) translate(-226.400000, -27.400000) "
                                      points="231.8 32.8 221 32.8 221 22"></polyline>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>

			  <div class="state" id="select-state">
                  <select name="state">
                      <option value="All">All</option>
                      <option value="AL">Muslim</option>
                      <option value="AK">Hindusm</option>
                      <option value="AZ">Christian</option>
                      <option value="AR">Budhism</option>
                  </select>
                  <label>Religion</label>
                  <svg class="chevron-down" width="17px" height="10px" viewBox="0 0 17 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="UI-Elements-Forms" transform="translate(-840.000000, -753.000000)" stroke="#4A4A4A" stroke-width="0.9">
                              <g id="Done-Copy-2" transform="translate(622.000000, 727.000000)">
                                  <polyline id="Rectangle-16" transform="translate(226.400000, 27.400000) rotate(-45.000000) translate(-226.400000, -27.400000) "
                                      points="231.8 32.8 221 32.8 221 22"></polyline>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>

			  <div class="first-name" id="input-first-name">
				  <input type="text" value="" id="profid" name="profid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" autocomplete="on" data-placeholder-focus="false" required />
                  <label>Biodata Number</label>
          <script type="text/javascript">
            function viewprofile(){
              var profid=document.getElementById("profid").value;
              window.location.href="view_profile.php?id="+profid;
            }
          </script>

                  <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                          <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                              <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                          </g>
                      </g>
                  </svg>
                  <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                          <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                              <g id="Group" transform="translate(552.000000, 749.000000)">
                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                              </g>
                          </g>
                      </g>
                  </svg>
              </div>

          </div>
      </div>
      <div class="col-md-2 no-pad-left-10">
	      <button  type="button" target="_blank" class="primary-btn serach-btn" onclick="viewprofile();">SEARCH</button>

      </div>
  </div>
</form>
















<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
		
        <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM 1bd_personal_physical";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$profid=$row['user_id'];
        			$biodatagender=$row['biodatagender'];
				


					$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
					$result3=mysqlexec($sql3);
					if($result3)
						while($row3=mysqli_fetch_assoc($result3))
						$occupation=$row3['occupation'];
				
						

							$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";
							$result4=mysqlexec($sql4);
							if($result4)
								while($row4=mysqli_fetch_assoc($result4))
								$permanent_address=$row4['permanent_address'];
							    

								$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
								$result5=mysqlexec($sql5);
								if($result5)
									while($row5=mysqli_fetch_assoc($result5))
									$religion=$row5['religion'];
								
				

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profid}\">";
					echo "<img src=\"profile/{$profid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
					echo "<div class=\"center-middle\">About {$name}</div>";
					echo "</div>";
					echo "<h3><span style=\"color:#02a7e6; font-size:14px;\" class=\"m_3\">Biodata Number : {$profid}</span><br>
					<span style=\"color:black; font-size:13px;\"> Gender :</span> <span style=\"color:#ff0080; font-size:12px;\"> {$biodatagender}</span><br>
					<span style=\"color:black; font-size:13px;\"> Occupation :</span> <span style=\"color:#ff0080; font-size:12px;\"> {$occupation}</span><br>
					<span style=\"color:black; font-size:13px;\"> Religion :</span> <span style=\"color:#ff0080; font-size:12px;\"> {$religion}</span> <br>
					<span style=\"color:black; font-size:13px;\">Address :</span> <span style=\"color:#ff0080; font-size:12px;\"> {$permanent_address}</span></h3></a></div>";
					echo "</li>";
				
        	}
		}


        ?>
          </ul>


	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 700,
				autoPlay:true,
				autoPlaySpeed: 5000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>































<div class="grid_2">
	<div class="container">
		<h2>Success Stories</h2>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
	     <div class="col-md-8 suceess_story">
	         <ul> 


			   <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2015</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/7.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">Lorem & Ipsum</a></h4>				        	
				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>


	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2015</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">Lorem & Ipsum</a></h4>				        	
				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>


	        </ul>
	    </div>



<!--

	    <div class="col-md-4 row_1-right">
	      <h3>News & Events</h3>

	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/14.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>

	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/15.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_2">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/1.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>

	        <div class="religion">
               <div class="religion_1-title">Religion :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Hindu</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Muslim</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Christian</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Sikh</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Inter Religion</a>
	        </div>

	        <div class="religion">
               <div class="religion_1-title">Country :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">India</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Australia</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Russia</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">India</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Kuwait</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Uk</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>

	        <div class="religion">
               <div class="religion_1-title">Caste :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Brahmin</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Kapu</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Kamma</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Padmasali</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Reddy</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>
			
	        <div class="religion">
               <div class="religion_1-title">Regional :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Urdu</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Hindi</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Telugu</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Marwadi</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Oriya</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>

	    </div>

	-->


	     <div class="clearfix"> </div>
	   </div> 
	  </div>
    </div>



    <div class="bg">
		<div class="container"> 
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Bride</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Groom</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="clearfix"> </div>
		</div>
	</div>
	
    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="https://www.facebook.com/ShosurBari.Matrimony" target="blank"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="mailto:shosurbari@gmail.com" target="blank"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2012-23 ShosurBari.com | All Rights Reserved  | Developed By - <a href="https://www.facebook.com/NAFIZ.SWE.DIU/" target="_blank">Nafiz Noyon</a></p>
	        </div>
    	</div>
    </div>
</body>
</html>	



<div id="scroll-up-btn" onclick="scrollToTop()">
    <i class="fa fa-arrow-up"></i>
</div>

<style>
	#scroll-up-btn {
                position: fixed;
                bottom: 0px;
                right: 0px;
                cursor: pointer;
				padding: 10px;
				background: #ff008087;
				color: #fff;
				border-radius: 3px;
            }
			#scroll-up-btn:hover {
				padding: 10px;
				background: #ff0080;
				color: #fff;
				border-radius: 3px;
            }
  </style>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-up-btn").style.display = "block";
      } else {
        document.getElementById("scroll-up-btn").style.display = "none";
      }
    }

    function scrollToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

