<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Mon profile
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
 <table class="table table-hover">
   
   <tr>
   <th>Pseudo</th><td><?php echo $customer->getPseudo();?></td></tr>
   <tr><th>Mail</th><td><?php echo $customer->getMail();?></td></tr>
   <tr><th>Nom</th><td><?php echo $customer->getLast_name();?></td></tr>
   <tr><th>Prenom</th><td><?php echo $customer->getFirst_name();?></td></tr>
   <tr><th>Solde</th><td><?php echo $customer->getAmount();?></td></tr>
   
   <tr> <td colspan="2">
        <a href="account.php?view=send" class="btn btn-default">Envoyé un montant à une personne</a></td>
        
   </tr>
 </table>

