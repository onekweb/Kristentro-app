<!DOCTYPE html>
<html lang="en">

<?php
 /*require ("includes/connection/connection.php"); */
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
                    Dagens bibelvers
                </h2>
            	<script type="text/javascript" language="JavaScript" src="http://www.biblegateway.com/votd/votd.write.callback.js"> 
		</script>
		</p>
		<script type="text/javascript" language="JavaScript" src="http://www.biblegateway.com/votd/get?format=json&version=SVL&callback=BG.votdWriteCallback"> 
		</script>	 
            		 	 


            </div>
                     
          
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

