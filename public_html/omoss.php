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
                    Om oss
                </h2>
            <p>Kristentro är en mobilanpassad sajt till kristna. Sajt appen är till för att informera och lära kristna mer om sin tro</p>
            	
            <p>Enligt bibeln så är det viktigt att alla kristna kommer till insikt och sanning om vår Gud (1Timotheosbrevet 2:4). Det är av den anledningen att denna sajten finns till</p>	 
            
            <p>Vår vision är att alla som är frälsta(troende) ska lära sig mer om Gud. Icken troende får också gärna ta del av de informationer och undervisningar om Gud.</p>	 
				

            </div>
                     
          
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

