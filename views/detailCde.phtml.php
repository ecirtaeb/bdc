<?php include 'head.phtml.php'; ?>
	<main class="container">
		<?php 
			$customer=getCustomerById($idCli);
		?> 

			<section id="infoClient" class="flexInfoClient">
				<h2 class="adrClient"><?=$customer['customerName']?></h2>
				<h3 class="adrClient"><?=$customer['contactFirstName']?> <?=$customer['contactLastName']?></h2>
				<p class="adrClient"><?=$customer['addressLine1']?></p>
				<p class="adrClient"><?=$customer['city']?></p>
			</section>

		<section>
			<table id="bdc">		
			<caption>Bon de commande n°<?=$idCde?></caption>
			<thead>
				<th>Produit</th>
				<th>Prix unitaire</th>
				<th>Quantité</th>
				<th>Prix total</th>
			</thead>
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
					<td><?=$line['priceEach']?></td>
					<td><?=$line['quantityOrdered']?></td>
					<td><?=$line['quantityOrdered']*$line['priceEach']?></td>
				</tr>				
			<?php endforeach; ?> 
			<?php
			$totalTVA = $totalHT/5;
			$totalTTC = $totalHT + $totalTVA;	
			?>
			<tfoot>
				<tr>
					<td colspan=3>Montant Total HT</td>
					<td><?=$totalHT?></td>
				</tr>
				<tr>
					<td colspan=3>TVA (20%)</td>
					<td><?=$totalTVA?></td>
				</tr>
				<tr>
					<td colspan=3>Montant Total TTC</td>
					<td><?=$totalTTC?></td>
				</tr>
			</tfoot>
		</section>
				
	</main>
</body>
<?php include 'footer.phtml.php';?>
