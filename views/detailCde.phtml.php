<?php include 'head.phtml.php'; ?>
	<main class="container">
		<?php 
			$customer=getCustomerById($idCli);
		?> 

		<ul id="infoClient" class="flex">
			<li><?=$customer['customerName']?></h2></li>
			<li><?=$customer['contactFirstName']?> <?=$customer['contactLastName']?></h2>
			<li><?=$customer['addressLine1']?></li>
			<li class="upper"><?=$customer['city']?></li>
		</ul>

		<section>
			<table id="bdc">		
			<caption>Bon de commande n°<?=$idCde?></caption>
			<thead>
				<th>Produit</th>
				<th>Prix unitaire</th>
				<th>Quantité</th>
				<th>Prix total</th>
			</thead>
			<tbody id="detail">
				<?php 
					$totalHT = 0;
					$totalTVA = 0;
					$totalTTC = 0;
				?>
				<?php foreach ($linesOrder as $line) : ?>
					<tr>
						<?php
						$totalHT += $line['quantityOrdered']*$line['priceEach'];
						$productName=getProductById($line['productCode']);
						?>	
						<td><?=$line['productName']?></td>
						<td><?=formatNb($line['priceEach'])?></td>
						<td><?=$line['quantityOrdered']?></td>
						<td><?=formatNb($line['quantityOrdered']*$line['priceEach'])?></td>
					</tr>				
				<?php endforeach; ?> 
				<?php
				$totalTVA = $totalHT/5;
				$totalTTC = $totalHT + $totalTVA;	
				?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan=3>Montant Total HT : </td>
					<td><?=formatNb($totalHT)?></td>
				</tr>
				<tr>
					<td colspan=3>TVA (20%) : </td>
					<td><?=formatNb($totalTVA)?></td>
				</tr>
				<tr>
					<td colspan=3>Montant Total TTC : </td>
					<td><?=$totalTTC?></td>
				</tr>
			</tfoot>
		</section>
				
	</main>
</body>
<?php include 'footer.phtml.php';?>
