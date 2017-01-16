
 <?php
 $email ="";
 $pseudo ="";
 $name ="";
 $first_name="";
 
 if(isset($_SESSION["id_err_sup"])){
 	$name =$_SESSION["name"];
 	$first_name= $_SESSION["first_name"];
 	if($_SESSION["id_err_sup"]==1){
 	//$email = $_SESSION["email_er"];
 	//$pseudo = $_SESSION["pseudo_er"];
 	
 	?>
 	
 	<div class="alert alert-danger">
		 L' adrèsse email <strong><?php echo $_SESSION["email_er"];?> </strong>et le pseudo
		 <strong><?php echo $_SESSION["pseudo_er"];?></strong> sont déjà utilisé, veuillez choisir un autre. 
	</div>
 	<?php
 	}
 	if($_SESSION["id_err_sup"]==2){
 	//$email = $_SESSION["email_er"];
 	$pseudo = $_SESSION["pseudo_er"];
 	?>
 	<div class="alert alert-danger">
		 L' adrèsse email <strong><?php echo $_SESSION["email_er"];?> est déjà utilisé, veuillez choisir un autre.
	</div>
 	<?php
 	}
 	if($_SESSION["id_err_sup"]==3){
 	$email = $_SESSION["email_er"];
 	//$pseudo = $_SESSION["pseudo_er"];
 	?>
 	<div class="alert alert-danger">
		Le pseudo
		 <strong><?php echo $_SESSION["pseudo_er"];?></strong> est déjà utilisé, veuillez choisir un autre.
								</div>
 	<?php
 	}
 
 }
 
  ?>


<form action ="process.php" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email address:</label>
                            <input type="text" class="form-control" placeholder="Email address:" value="<?php echo $email;?>" id="email" name="email" required data-validation-required-message="Entrer un mail valide.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Pseudo:</label>
                            <input type="text" class="form-control" placeholder="Pseudo:" value="<?php echo $pseudo;?>" id="pseudo" name="pseudo" required data-validation-required-message="Choisisez un pseudo">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mot de passe:</label>
                            <input type="password" class="form-control" placeholder="Mot de passe:"  id="password" name="password" required data-validation-required-message="Mot de passe obligatoire.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Confirmation mot de pass:</label>
                            <input type="password" class="form-control" placeholder="Confirmation mot de pass:" id="password2" name="password2" required data-validation-required-message="retapez votre mot de passe.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
		    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nom:</label>
                            <input type="text" class="form-control" placeholder="Nom:" value="<?php echo $name;?>" id="name" name="name" required data-validation-required-message="Entrez votre nom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
		    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Prenom:</label>
                            <input type="text" class="form-control" placeholder="Prenom:" value="<?php echo $first_name;?>" id="prenom" name="first_name" required data-validation-required-message="Entrez votre prenom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
		    <input type="hidden" name="action_id" value="0"/>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
</form>



<?php

session_unset ();
?>
