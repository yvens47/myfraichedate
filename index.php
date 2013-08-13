 <?php $title = "Get Ready to mingle with Fraiche Date";?>
 
 <?php require 'header.php';?>
 
 
 <div class="starter-template pull-left">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>
  <div class='span5 pull-right mg'>
  <h1>Become A Member</h1>
  <form action="Register.php" method='post' class='form-horzontal'>
  <div class='fr'>
  		<label>Email</label>
  		<input type='text' placeholder="enter email" name='email'/>
  	
  	</div>
  	<div class='fr'>
  		<label>Username</label>
  		<input type='text' placeholder="pick a username" name='username'/>
  	
  	</div>
  	<div class='fr'>
  		<label>Password</label>
  		<input type='password' placeholder="password" name='pep' />
  	
  	</div>
  	<div class='fr'>
  		<label></label>
  		<input type='submit' class='btn btn-success' value='Register' name='register'/>
  	
  	</div>
  
  </form>
  
  </div>
       <?php require 'footer.php';?>