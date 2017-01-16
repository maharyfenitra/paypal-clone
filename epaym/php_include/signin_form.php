<?php 
if(isset($_GET["id_err"])){
?>
<div class="alert alert-danger">
		<strong>Erreur!</strong> Verifiez que votre pseudo et mot de passe soit bien correcte
								</div>
<?php
}
?>

<p>Veillez vous authentifiez pour accéder à vos donnée!!</p>
<form  method="POST" action="process.php">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Pseudo :</label>
                            <input type="text" class="form-control" placeholder="Pseudo :" id="pseudo" required data-validation-required-message="Entrer votre pseudo." name="pseudo">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mot de passe :</label>
                            <input type="password" class="form-control" placeholder="Mot de passe :" id="passeword" required data-validation-required-message="Entrer votre mot de passe." name="password">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <input type="hidden" name="action_id" value="1"/>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
				<input type="submit" value="ok" class="btn btn-default">
                            
                        </div>
                    </div>
		    
                </form>

