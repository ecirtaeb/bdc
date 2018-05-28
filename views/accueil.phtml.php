<?php include 'head.phtml.php'; ?>
	<main class="container">
		<table id="bdc">		
			<caption>Liste des commandes</caption>
			<thead>
				<th>Commande</th>
				<th>Date de la commande</th>
				<th>Date de livraison</th>
				<th>Statut</th>
			</thead>
			<body>
				<?php foreach ($listeCde as $cde) : ?>
					<tr>
						<td><a href="detailCde.php?idCde=<?=$cde['orderNumber'] ?>&idCli=<?=$cde['customerNumber'] ?>"><?=$cde['orderNumber'] ?></a></td>
						<td><?=$cde['orderDate'] ?></td>
						<td><?=$cde['shippedDate'] ?></td>
						<td><?=$cde['status'] ?></td>
					</tr>				
				<?php endforeach; ?> 
			</body>
		</table>	
	</main>
</body>
<?php include 'footer.phtml.php';?>
