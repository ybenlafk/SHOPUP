<?php include 'include/sess.php'; ?>
<?php include 'include/connexion.php' ?>
<?php 
if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$req = $bd->query("SELECT COUNT(*) FROM users WHERE USER='$user' AND pass='$pass'");
	$res = $req->fetchColumn();
	$rq = $bd->query("SELECT * FROM users WHERE USER='$user' AND pass='$pass'");
	if($res == '1'){
		$res1 = $rq->fetch();
	$_SESSION['role']=$res1['role'];
  }
	if($res == '1' && $_SESSION['role']== 'admin'){
		$_SESSION['user'] = $res1['user'];
		header('location: /PFF/admin/index.php');
	}else if($res == '1' && $_SESSION['role'] == 'utilisateur'){
		$_SESSION['id'] = $res1['id'];
		header('location: /PFF/BackOffic/');
	}
}
?>
<?php include 'include/header2.php'; ?>
<style>
	.ic{
		font-size: 2.3em; 
		color:#fff; 
		margin:20px;
		position: absolute;
    top: 0px;
    z-index: 1000;
    right: 0px;
	}
</style>
<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>
<div class="login-container">
         <a class="ic" href="/PFF/">
          <i class="entypo-cancel"></i>
         </a>

	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="" class="logo">
				<img src="img/logo.svg" width="150" alt="" />
			</a>
			
			<p class="description">Dear user, log in to access the admin area!</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			
			<form method="post" role="form">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="user" id="user" placeholder="user" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="pass" id="pass" placeholder="pass" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button  name="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
				<div class="form-group">
					<em>-</em>
				</div>
				<div class="form-group">
					<a href="signup.php">SIGNUP</a>
				</div>
				<!-- Implemented in v1.1.4 -->
				<div class="form-group">
					<em>- or -</em>
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
						Login with Facebook
						<i class="entypo-facebook"></i>
					</button>
					
				</div>
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
						Login with Twitter
						<i class="entypo-twitter"></i>
					</button>
					
				</div>
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
						Login with Google+
						<i class="entypo-gplus"></i>
					</button>
					
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php include 'include/footer2.php'; ?>