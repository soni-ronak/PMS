<?php
  session_start();
 if (isset($_SESSION['pusername'])){
   
	
	   }
   else {
	   header("location: index.php");
   }
   
?>
<!--
    Developed by ByteRoots
    Contact: https://www.instagram.com/ByteRoots
    Starting Date :: Monday, 1 January, 2024
    Ending Date :: 
    All over :: 4 months and 18 days.
    Source copyright (c) 2024 Byteroots.in
-->
<!DOCTYPE html>
<html lang="en">
 
            
            <form action="COUNT2.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
			
                              
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">Company Name</label>
                  <input type="text" name="cname" class="form-control" id="sslc" placeholder="">
                </div>								                                				
           <br>
              <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>     
          
          <footer class="text-right">
            
					<p>Copyright &copy; 2023 Vidhyanagri Institute Of Technology | Developed by
              <a href="https://byteroots.in" target="_parent">ByteRoots</a>
			
          </footer>      
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>