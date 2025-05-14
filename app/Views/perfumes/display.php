<!DOCTYPE html>
<html lang="en" style=>
<head>
	<meta charset="utf-8">
	<title>Home</title>
    <link href="<?=base_url('codeigniter/public/')?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url('codeigniter/public/')?>css/temp/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?=base_url('codeigniter/public/')?>css/w3school.css">
	<script type="text/javascript" src="<?=base_url('codeigniter/public/')?>js/jq.js"></script>
	<script type="text/javascript" src="<?=base_url('codeigniter/public/')?>js/jquery.rwdImageMaps.min.js"></script>
	<style type="text/css">

	table, th, td {
	  border: 1px solid blue;
	}
	

		.video-background {
		  position: fixed;
		  top: 0;
		  left: 0;
		  margin:0;
		  width: 100%;
		  height: 100%;
		  z-index: -1; /* Ensure the video stays in the background */
		  filter: blur(5px);
		}
		#background-video {
		  object-fit: cover;
		  width: 100%;
		  height: 100%;
		  margin:0;
		}
	
	body {
			
		}
	#loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white; /* Change to match your background */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
    .spinner {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #3498db;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
	
	.image-3d {
	  width: 250px; /* Set size for the circular image */
	  height: 250px; /* Ensure the height matches the width for a circle */
	  border-radius: 50%; /* Make the image circular */
	  transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for 3D effect */
	  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); /* Shadow for depth */
	  transform: translateZ(50px); /* Add depth */
	  position: relative;
	}

	.image-3d:hover {
	  transform: translateZ(100px) rotateY(10deg) rotateX(10deg); /* Apply 3D effect on hover */
	  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6); /* Stronger shadow on hover */
	}
		
	</style>
</head>
<body style="margin:0px 0px 0px 0px; font-family:'Sans-Serif'">
<div id="loader">
	<img src="<?=base_url('codeigniter/public/')?>images/loading.gif" alt="Loading">
	Searching Your Perfumes...
    <!--<div class="spinner"></div>-->
 </div>
 
<?php $this->session = \Config\Services::session();?>

<div  class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar" onclick="w3_close()">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  
  
</div>

<div id="main">
	<!--Header-->
	
	<div id="container" style="padding:5px 5px 5px 5px;width:100%;">
		<div style="margin:5px 5px 5px 5px;">
			<div style="display:inline-block;float:left;width:20%;">
				<img src="<?=base_url('codeigniter/public/')?>images/johoni.png" style="width:120px; height:120px;" alt="Johoni">
				<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
			</div>
			<div style="display:inline-block;float:right;text-align:right; padding-top:30px;font-family:'Sans-Serif'; color: #000;">
				<h5>Today: <?=date('d-m-Y')?></h5>
			</div>
		</div>
		<!--end of header-->
		<div style="font-weight:bold;font-size:20px;font-family:'Sans-Serif'; color:#000; padding-top:3%;">
			<h2>DISCOVER YOUR SCENT WITH JOHONI SCENT</h2>
		</div>
		
		<div class="video-background" >
			<video autoplay muted loop id="background-video" >
			  <source src="<?=base_url('codeigniter/public/')?>images/bg2.mp4" type="video/mp4" >
			  Your browser does not support the video tag.
			</video>
		 </div>
		 
		<div style="margin-left:10%; margin-right:10%;">	
			
			<img src="<?=base_url('codeigniter/public/')?>images/perfumePlate.webp" style="width:100%; height:100%;" class="image-3d" usemap="#image-map">

			<map name="image-map">
				<area target="" alt="" title="Discover your scent" href="<?=base_url('codeigniter/public/perfumes/floral')?>" coords="2783,5968,2952,5004,3345,4177,3832,3636,4426,3180,5200,2883,5973,2767,5963,2873,5984,3604,5984,4092,5009,4399,4458,4929,4309,5258,4150,5703,4118,5968" shape="poly">
				 <area target="" alt="" title="Discover your scent" href="<?=base_url('codeigniter/public/perfumes/oriental')?>" coords="7882,5946,9228,5956,9038,4928,8857,4451,8507,3974,8306,3719,7946,3412,7278,3009,7659,5098,7500,4822,7246,3009,7076,3041,6970,2914,7098,2935,6462,2808,6144,2776,6016,2808,7490,4970,7013,4440,6727,4271,6366,4143,6154,4143,6016,4122,6016,3179,6027,2956,6027,2871,7108,4493,7172,4461,7681,5235,7299,4684,7734,5373,7468,4325,7320,3339,7288,3191,7510,4558,7267,3784,7320,4071,7468,4124,7511,4749" shape="poly">
				 <area target="" alt="" title="Discover your scent" href="<?=base_url('codeigniter/public/perfumes/woody')?>" coords="6005,9159,5995,7855,6684,7707,6959,7558,7352,7251,7638,6816,7754,6604,7807,6350,7860,6000,9196,5968,9207,6244,9101,6816,8910,7304,8359,8163,8666,7792,8009,8470,8189,8364,7765,8661,7309,8894,6747,9117,6143,9212" shape="poly"> 
				 <area target="" alt="" title="Discover your scent" href="<?=base_url('codeigniter/public/perfumes/fresh')?>" coords="5984,9170,5984,7823,5327,7696,4988,7527,4691,7283,4415,6975,4320,6795,4214,6551,4161,6371,4129,6223,4118,6021,2772,5989,2846,6530,2973,7071,3186,7527,3419,7929,3822,8353,4235,8661,4723,8936,5231,9117,5613,9191,5836,9223" shape="poly">
				 
				  <area target="" alt="" title="Fruity" href="<?=base_url('codeigniter/public/perfumes/fruity')?>" coords="2772,6795,1097,7219,959,6572,949,6085,970,5438,1023,5057,1097,4717,1447,4792,2210,4972,2783,5099,2687,5936" shape="poly">
				  
				  <area target="" alt="" title="Floral" href="<?=base_url('codeigniter/public/perfumes/floralSub')?>" coords="2825,5078,1108,4717,1267,4198,1532,3572,1860,3053,2125,2714,3451,3848,3080,4420" shape="poly">
				  
				  <area target="" alt="" title="Soft Floral" href="<?=base_url('codeigniter/public/perfumes/floralSoft')?>" coords="3440,3837,2157,2735,2719,2120,3175,1770,3885,1389,4553,3032,4044,3318" shape="poly">
				  
				  <area target="" alt="" title="Floral Oriental" href="<?=base_url('codeigniter/public/perfumes/floralOriental')?>" coords="4574,2989,3896,1399,4511,1155,5168,1007,5952,943,5942,2703,5263,2767" shape="poly">
				   
				  <area target="" alt="" title="Soft Oriental" href="<?=base_url('codeigniter/public/perfumes/softOriental')?>" coords="5984,2661,5995,943,6959,1018,7532,1187,8009,1357,7362,2968,6694,2746" shape="poly">
				  
				 <area target="" alt="" title="Oriental" href="<?=base_url('codeigniter/public/perfumes/orientalSub')?>" coords="7383,2968,8030,1378,8867,1802,9355,2216,9800,2671,8496,3827,7935,3329" shape="poly">
				 
				 <area target="" alt="" title="Woody Oriental" href="<?=base_url('codeigniter/public/perfumes/woodyOriental')?>" coords="8496,3837,9832,2693,10341,3424,10627,3996,10860,4675,9154,5046,8899,4442" shape="poly">
				 
				 <area target="" alt="" title="Woody" href="<?=base_url('codeigniter/public/perfumes/woodySub')?>" coords="9196,5078,10882,4696,11019,5375,11072,6064,11009,6774,10892,7251,9217,6816,9313,6000" shape="poly">
				 
				 <area target="" alt="" title="Mossy Wood" href="<?=base_url('codeigniter/public/perfumes/mossyWood')?>" coords="9207,6837,10882,7272,10638,8014,10394,8481,10012,9053,9843,9244,8560,8110,8973,7452" shape="poly">
				 
				 <area target="" alt="" title="Dry Wood" href="<?=base_url('codeigniter/public/perfumes/dryWood')?>" coords="8507,8120,9822,9286,9387,9753,8952,10081,8475,10399,7988,10633,7362,9000,8009,8640" shape="poly">
				 
				 <area target="" alt="" title="Aromatic" href="<?=base_url('codeigniter/public/perfumes/aromatic')?>" coords="7320,9011,7988,10611,7415,10855,6896,10961,6366,11057,5995,11046,5963,9297,6620,9244" shape="poly">
				 
				 <area target="" alt="" title="Citrus" href="<?=base_url('codeigniter/public/perfumes/citrus')?>" coords="5973,9286,5952,11025,5306,11004,4712,10845,4214,10707,3959,10622,4595,9021,5200,9223" shape="poly">
				 
				 <area target="" alt="" title="Water" href="<?=base_url('codeigniter/public/perfumes/water')?>" coords="4595,9011,3928,10601,3260,10240,2889,9975,2454,9615,2125,9254,3440,8088,3917,8576" shape="poly">
				  
				<area target="" alt="" title="Green" href="<?=base_url('codeigniter/public/perfumes/green')?>" coords="3451,8110,2136,9223,1638,8555,1415,8120,1256,7760,1118,7272,2783,6827,3027,7516" shape="poly">  
				 <area target="" alt="" title="Home" href="#" coords="6026,5991,1792" shape="circle">
			</map>

		</div>	
		
</div>
</div><!--end of main-->	
<script>
window.addEventListener('load', function () {
  setTimeout(function () {
	document.getElementById('loader').style.display = 'none';
	document.getElementById('body').style.display = 'block';
  }, 1000); // 2000 milliseconds = 2 seconds
});
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	/*$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});*/
});
function makeCapital(value, id)
{
	myString = value.toUpperCase();
	document.getElementById(id).value = myString;
	document.getElementById(id).style="background-color:#b3d7ff87;font-size:30px;font-weight:bold";
}

//sidebar
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>
</html>