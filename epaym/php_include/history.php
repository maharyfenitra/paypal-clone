<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Mes transaction
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
 <table class="table table-hover">
 <tr><th colspan = "4">Relevé</th></tr>
 <tr><th>Date</th><th>Nature</th><th>Operateur</th><th>Somme</th></tr>

<?php 
	foreach($hs as $h){

		?>

<tr><td><?php echo $h["date"];?></td><td><?php  if($h["nature"]==1){echo "reçue";}else{echo "envoyé";};?></td><td><?php echo Customer::getCustomerById($h["customer_id_1"])->getPseudo();?></td>
<td align="right"><?php echo $h["amount"];?></td></tr>
		<?php
	} 
?>
</table>
Page 
<?php 

	for($i=0;$i<$nb;$i++){
	?>
	<a href="account.php?view=history&page=<?php echo $i;?>" class="btn btn-default btn-sm"><?php echo $i;?></a>
	<?php
	}
?>

