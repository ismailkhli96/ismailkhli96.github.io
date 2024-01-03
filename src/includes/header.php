   
        
           
       
            <?php 
                if(isset($_SESSION['user'])){
                        echo '<nav class="navbar navbar-expand   border-bottom"  style="background-color: #4a77b1;">
                        <div class="container-fluid">
                        <!-- Button for sidebar toggle -->
                            <button class="btn navb-button " type="button" >
                                <span class="navbar-toggler-icon navbar-light" ></span>
                            </button>
                            <a href="includes\logout.inc.php" class="navbar-brand  mb-0 h6 nav-login"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                </nav>';}
                else {echo '<nav class="navbar navbar-expand   "  style="background-color: #4a77b1;">
                        <div class="container-fluid">
                        <!-- Button for sidebar toggle -->
                            <button class="btn navb-button " type="button" >
                                <span class="navbar-toggler-icon navbar-light" ></span>
                            </button>
                            <a href="#" class="navbar-brand  mb-0 h6 nav-login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </div>
                </nav>';}
            ?>
            
     
   
    
    
