<!-- <html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="help.css">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 

</head> -->


<?php $__env->startSection('content'); ?>
<div class="container">

<div class="header">
  <h1>About Us</h1>
 </div>
<div class="card text-dark">
<div class="column">

<div class= "row1">

					 <caption> <h2 align ="center">Who are we???</h2></caption>
					 <h5><center>We are Student of Department of Computer Engineering,Faculity of Engineering,University of Peradeniya.
                     As third year students we was assigning to complete group project.For that we planned to develop a website which provide the bordim house details which are available in the Peradeniya area.</center></h5>
					 
					 </div>
<div class="row2">

					 <caption> <h2 align ="center">Our Vision</h2></caption>
					 <h5><center>As a student of University of Peradeniya we are facing lot of diffuculties when we are going to find bording house.So our vision is reducing those difficulties and provide correct boarding information to the student</center></h5>
					 </div>	
                          </div>						 
					 </div>

                     <br>
                        
                        
<div class="column">
            
		<div class="row">
                    <div class="col-md-4 center offset-1">
					<table>
					<tr>
					<td>
                        <div class="profile-img">
						<figure>
                           <div class = "image">
						   <img src="../assets/images/1.jpeg" alt="User Avatar" class="rounded-circle user-avatar-xxl" style="border: 2px solid black; float:center;  margin-right:25px;">
						  </div>
                            
							<figcaption><h5>Aruna Nuwantha</h5></figcaption>
							<figcaption><h5>E16261</h5></figcaption
						</figure>
                        </div>
					</td>
						<td>
						 <div class="profile-img">
						<figure>
                           <div class = "image">
						   <img src="../assets/images/2.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl" style="border: 2px solid black; float:center;  margin-right:25px;">
						  </div>
                            
							<figcaption><h5>Isuru Lakshan</h5></figcaption>
							<figcaption><h5>E16203</h5></figcaption
							</figure>
                        </div
						
						</td>
						
					
						
						<td>
						 <div class="profile-img">
						<figure>
                           <div class = "image">
						   <img src="../assets/images/3.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl" style="border: 2px solid black; float:center;  margin-right:25px;">
						  </div>
                            
							<figcaption><h5>Chandula JPDM</h5></figcaption>
							<figcaption><h5>E16061</h5></figcaption>
							</figure>
                        </div
						
						</td>
					
						
						
                    </div>
                    
						</tr>
						
						
						
						</table>
                    

                    
        </div>
		</div>
		</div>
		
	</body>
	</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>