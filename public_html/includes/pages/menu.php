          <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="index.php" data-transition="fade" data-theme="a" data-icon="home">
                                Hem
                            </a>
                        </li>
                        <li>
                            <a href="omoss.php" data-transition="fade" data-theme="a" data-icon="star">
                                Om oss
                            </a>
                        </li>
                        <li>
                            <a href="undervisning.php" data-transition="fade" data-theme="a" data-icon="info">
                                Undervisning
                            </a>
                        </li>
                        <li>
                            <a href="kyrka.php" data-transition="fade" data-theme="a" data-icon="search">
                                Kyrka
                            </a>
                        </li>
                        
                          <li>
                            
                            	<?php
                            	if(isset($_SESSION["username"])) {
                            		?>
                            		<a href="logout.php" data-transition="fade" data-theme="a" data-icon="delete">Logga ut
                            		</a>
                            		<?php
                            	} else {
                            		?>
                            		<a href="login.php" data-transition="fade" data-theme="a" data-icon="login">Videor
                            		<?php
                            	}
                            	?>
                            </a>
                        </li>
                    </ul>
                    
                    
                </div>