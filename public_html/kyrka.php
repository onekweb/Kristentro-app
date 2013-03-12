<!DOCTYPE html>
<html lang="en">

<?php
 require ("includes/connection/connection.php"); 
?>

<?php
  include_once("includes/pages/head.php");
?>

  <body>



    <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header">
                
                	  <!-- logo -->
                <?php
				  include_once("includes/pages/logo.php");
				?>
      				  <!-- Menu -->
      			<?php
				  include_once("includes/pages/menu.php");
				?>
      			    <!-- Searchfield -->
				<?php
				  include_once("includes/pages/search-field.php");
				?>
      
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    </div>
                    <div class="ui-block-b">
                    </div>
                </div>
      
            </div>
            <div data-role="content" id="content">

<div id="map" style="width:500px;height:500px;"></div>
            	   
            	   
                <h2>
                    Olika församlimgar i Stockholm
                </h2>
		<p id="address">Fetching your location with HTML 5 geolocation...</p>
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.se/maps?https://maps.google.se/maps?q=kyrka+n%C3%A4ra+Vanadisv%C3%A4gen,+Stockholm&hl=sv&ie=UTF8&sll=59.326142,17.982052&sspn=0.20387,0.631714&oq=kyrka+n%C3%A4ra+vanadis&hq=kyrka&hnear=Vanadisv%C3%A4gen,+Stockholm&t=m&z=13"></iframe><br /><small><a href="https://maps.google.se/?ie=UTF8&amp;ll=59.326142,17.982052&amp;spn=0.187405,0.631714&amp;t=m&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">Visa större karta</a></small>
         		

            </div>
                     
          
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

