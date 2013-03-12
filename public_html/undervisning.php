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
                    Undervisningar
                </h2>


            </div>
                     
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    </li>
                    <li data-theme="c">
                        <a href="omgud.php" data-transition="slide">
                            Vem är Gud?
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                          Frälsning och hopp
                        </a>
                    </li>
                </ul>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                           Att leva ett kristet liv
                        </a>
                    </li>
                </ul>
                    <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                           Om Jesus
                        </a>
                    </li>
                </ul>
                
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

