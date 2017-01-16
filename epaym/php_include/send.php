<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Formulaire d'envoi :
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class=" col-lg-4">
<form action ="process.php" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Pseudo du destinataire:</label>
                            <input type="text" class="form-control" placeholder="Pseudo du destinataire:" id="pseudo_destinataire" name="pseudo_destinataire" required data-validation-required-message="Veuillez spécifier le destinataire.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Montant:</label>
                            <input type="text" class="form-control" placeholder="Montant" id="amount" name="amount" required data-validation-required-message="Specifié le montant que vous voulez envoyer.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Votre mot de passe :</label>
                            <input type="password" class="form-control" placeholder="Votre mot de passe :" id="password" name="password" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <input type="hidden" name="action_id" value="3"/>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
</form>
</div>
