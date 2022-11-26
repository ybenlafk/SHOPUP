<?php include 'include/sess.php'; ?>
<?php include 'include/connexion.php' ?>
<?php 
if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$tele = $_POST['tele'];
	$image = basename($_FILES['ig']['name']);
  $path = 'img/'.$image;
  $file = $_FILES['ig']['tmp_name'];
  move_uploaded_file($file,$path);
	$ville = $_POST['ville'];
	$req = $bd->prepare("insert into users(user,pass,email,role,nom,prenom,tele,image,ville_id) values(?,?,?,?,?,?,?,?,?)");
	$req->execute([$user,$pass,$email,"utilisateur",$nom,$prenom,$tele,$image,$ville]);
	// header('location: /PFF/admin/login.php');
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
			
			<form method="post" enctype="multipart/form-data">
				   
			<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						<input required type="text" class="form-control" name="nom" id="nom" placeholder="nom" autocomplete="off" />
					</div>
					
				</div>
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom" autocomplete="off" />
					</div>
					
				</div>

				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-phone"></i>
						</div>
						
						<input type="number" class="form-control" name="tele" id="tele"  placeholder="phone number" autocomplete="off" />
					</div>
					
				</div>
       
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-list"></i>
						</div>
						<select name="ville" id="ville" class="form-control" placeholder="" aria-describedby="ville">
                <?php $qer=$bd->query("select * from ville");
                      while($dt = $qer->fetch()):
                ?>
                <option value="<?= $dt['id']?>"><?= $dt['nomv']?></option>
                <?php endwhile;?>
              </select>
					</div>
					
				</div>
			<!--  -->
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
							<i class="entypo-gplus-circled"></i>
						</div>
						
						<input type="email" class="form-control" name="email" id="email" placeholder="email" autocomplete="off" />
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
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-picture"></i>
						</div>
						<input type="file" class="form-control" name="ig" id="ig" placeholder="ig" autocomplete="off" />
					</div>
				
				</div>
				<div  class="form-group">
					<button name="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						 <a  href="login.php">sign up</a>
					</button>
				</div>
				<div class="form-group">
					<em>-</em>
				</div>
				<div class="form-group">
					<a href="login.php">LOGIN</a>
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