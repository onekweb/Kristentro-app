<?php session_start();
	if(isset($_GET["true"])) {
					$_SESSION["username"] = null;
				}
if(!isset($_SESSION["username"])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">



<?php
 /* require ("includes/connection/connection.php");*/
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
            	
            	
            <?php
				/*if(!isset($_SESSION['username']))
				{
					header('location:login.php');					
				}
				else 
				{
					echo  "Hello";
					
				}*/
			
				?>
				<h3>	<a href="logout.php?true">Logga ut</a></h3>
				<?php
				if(isset($_SESSION["username"])) {
					echo "Hej " . $_SESSION["username"];
					?>
					
					<?php
				}
	
			?>	
             <h2>
                    Videor
                </h2>
                
                <p>Introduktion till pen ny dag</p>
                
                <iframe src="http://player.vimeo.com/video/34842176" width="400" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 

            	<p>Jesus vill bota dig</p>
            	<iframe src="http://player.vimeo.com/video/34266777?byline=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            	
            	<p>Om förlåtelse</p>
            	<iframe src="http://player.vimeo.com/video/29456320?byline=0" width="400" height="220" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
                     
         	             
            </div>
               
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

