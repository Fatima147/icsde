<!DOCTYPE html>
<html
	lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Past conferences</title>
<?php
include("import.php");
?>
</head>
<body
	class="html not-front not-logged-in one-sidebar sidebar-first page-node page-node- page-node-93 node-type-page grid-type-fluid grid-width-12 fluid-100">
	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable">Skip
			to main content</a>
	</div>
	<div id="container" class="clearfix">
		<?php
		include("header.php");
		?>
		<div id="main-wrapper" class="clearfix">
			<div id="main-subwrapper" class="clearfix">
				<div id="main-contsubwrapper" class="clearfix">
					<section id="main" role="main" class="clearfix">
          <div id="main-innerwrapper" class="clearfix">
                    <a id="main-content"></a>
                              <h1 class="title" id="page-title">Past Conferences</h1>                                                    <div class="region region-content">
    <div id="block-system-main" class="block block-system">

      
  <div class="content">
    <article id="node-88" class="node node-page clearfix">

  
  <div class="content">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><ul>

<h2 class="w3-center"><a href="http://ifride.com/icsde2017/" target="_blank">International Conference on Smart Digital Environment (ICSDE 2017)</a></h2>
<h4 class="w3-center" style="border-bottom: 1px solid black;padding-bottom: 5px;font-size: medium;">
<a href="https://dl.acm.org/citation.cfm?id=3128128&CFID=1026308680&CFTOKEN=47704505" target="_blank" >ACM INDEXING</a>
,
<a href="https://www.scopus.com/results/results.uri?sort=plf-f&src=s&st1=ICSDE&nlo=&nlr=&nls=&sid=335eca246671fe198ef4a6c54fe9309e&sot=b&sdt=b&sl=11&s=CONF%28ICSDE%29&cl=t&offset=1&origin=resultslist&ss=plf-f&ws=r-f&ps=r-f&cs=r-f&cc=10&txGid=1d1eddaa3ecda6d0cc6bb7a804b77546"  target="_blank" >SCOPUS INDEXING</a>

,
<a href="https://webofknowledge.com/"  target="_blank" >THOMSON REUTERS INDEXING</a>

and 
<a href="http://dblp.uni-trier.de/db/conf/icsde/icsde2017.html"  target="_blank" >DBLP INDEXING</a>

</h4>

<div class="w3-content w3-display-container">
 <?php
     $files = glob("image_icde_2017/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
             echo '<img src="'.$image .'"  class="mySlides" style="width:100%" alt="Random image" />';
            } else {
                continue;
            }
          }
       ?>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</div></div></div>      </div> <!-- /.content -->

</article> <!-- /.node -->
  </div> <!-- /.content -->

</div> <!-- /.block -->
  </div>
                    </div> <!-- /#main-innerwrapper -->
        </section>
		
						<!-- /#main-innerwrapper -->
					</section>
					<!-- /#main -->

					<aside id="sidebar-first" role="complementary"
						class="sidebar clearfix">
						<div class="region region-sidebar-first">
							<div id="block-menu-block-2" class="block block-menu-block"
								class="odd block-without-title">

							</div>
							<!-- /.block -->
							<div id="block-block-14" class="block block-block"
								class="even block-without-title">


								<div class="content">
									<p> </p>
								</div>
								<!-- /.content -->

							</div>
							<!-- /.block -->
						</div>
					</aside>
					<!-- /#sidebar-first -->

				</div>
				<!-- /#main-contsubwrapper -->
			</div>
			<!-- /#main-subwrapper -->
		</div>
		<!-- /#main-wrapper -->

		
		<?php
     include("footer.php");
?>


	</div>
	<!-- /#container -->
</body>
</html>
