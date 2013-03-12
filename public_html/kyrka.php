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
            	             
                <h2>
                    Olika församlimgar i Stockholm
                </h2>
         		
         		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.se/maps?f=q&amp;source=s_q&amp;hl=sv&amp;geocode=&amp;q=f%C3%B6rsamlingar+i+stockholm&amp;aq=&amp;sll=59.322702,18.065962&amp;sspn=0.053775,0.09922&amp;ie=UTF8&amp;hq=f%C3%B6rsamlingar&amp;hnear=Stockholm&amp;t=m&amp;ll=59.314328,18.052231&amp;spn=0.077036,0.069407&amp;output=embed"></iframe><br /><small><a href="https://maps.google.se/maps?f=q&amp;source=embed&amp;hl=sv&amp;geocode=&amp;q=f%C3%B6rsamlingar+i+stockholm&amp;aq=&amp;sll=59.322702,18.065962&amp;sspn=0.053775,0.09922&amp;ie=UTF8&amp;hq=f%C3%B6rsamlingar&amp;hnear=Stockholm&amp;t=m&amp;ll=59.314328,18.052231&amp;spn=0.077036,0.069407" style="color:#0000FF;text-align:left">Visa större karta</a></small> 


            </div>
                     
          
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

