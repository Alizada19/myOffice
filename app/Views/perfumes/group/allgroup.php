<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Available Colors">
    <meta name="description" content="">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=base_url('codeigniter/public/')?>passets/nicepage.css" media="screen">
<link rel="stylesheet" href="<?=base_url('codeigniter/public/')?>passets/index.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?=base_url('codeigniter/public/')?>passets/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?=base_url('codeigniter/public/')?>passets/nicepage.js" defer=""></script>
    <meta name="generator" content="Johoni, johoni.com">
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#343138">
    <meta property="og:title" content="Page 17">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <style type="text/css"">
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
	
	.full-page-bg {
      background-image: url('<?=base_url('codeigniter/public/')?>images/<?=$cimage?>'); /* Add your image URL here */
      background-size: 100% 100%; /* Ensure the image covers the entire page */
	  background-attachment: fixed;
      background-position: center center; /* Center the image */
      background-repeat: repeat; /* Prevent the image from repeating */
      height: 100%; /* Ensure it takes up the full height of the page */
      display: flex;
      justify-content: center;
      align-items: center; /* Optional: Centers content inside the background */
    }
	


  </style>
<div id="loader">
	<img src="<?=base_url('codeigniter/public/')?>images/loading.gif" alt="Loading">
	Searching Your Perfumes...
    <!--<div class="spinner"></div>-->
 </div>
 
  <body data-home-page="https://website6420599.nicepage.io/Page-17.html?version=c3af23fe-9027-8e5d-12b7-d6ccb4d1e7ac" data-home-page-title="Page 17" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en"> 
    <section class="u-clearfix u-section-1 full-page-bg" id="sec-d9c4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-custom-font u-font-roboto-slab u-text u-text-1"><a href="<?= base_url('codeigniter/public/perfumes/display')?>?>">All 	Available</a></h2>
            <h6 class="u-text u-text-custom-color-2 u-text-2">Here Are Your Preference</h6>
          </div>
        </div>
		
        <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
            <?php
			foreach($records AS $row)
			{
			?>	
			  <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-image u-image-1" src="<?= base_url('codeigniter/public/')?><?=getImage($row->Id)?>">
                  <h4 class="u-align-center u-text u-text-custom-color-2 u-text-3"><?=$row->name?>
                  </h4>
                  <p class="u-align-center u-text u-text-4"><!--$299.95--></p>
                </div>
              </div>
            <?php
			}
			?>	
            </div>
          </div>
        </div>
	
      </div>
    </section>
    
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>Copyright © 2025</span>
        <a class="u-link" href="https://www.johoni.com" target="_blank" rel="nofollow">
          <span>Discover your scent</span>
        </a>
      </p>
    </section>
  
</body>
<script>
window.addEventListener('load', function () {
	  setTimeout(function () {
		document.getElementById('loader').style.display = 'none';
		document.getElementById('body').style.display = 'block';
	  }, 1000); // 2000 milliseconds = 2 seconds
	});

</script>
</html>