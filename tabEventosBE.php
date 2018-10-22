<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Data Inicio</th>
				<th>Data Fim</th>
				<th>Ver Detalhes</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<?php while ($linhas = mysqli_fetch_array($con)){?>
			
			<td ><?php echo $linhas["nome"]; ?></td>
			<td ><?php echo $linhas["data_ini"]; ?></td>
			<td ><?php echo"$ ";?><?php echo $linhas["data_fim"]; ?></td>
			<td  align="center">  <a class="fa fa-search" href="detalhesevento.php?cod=<?php echo $dado["cod"]; ?>"></a> </td>
			<td align="center"><a class="fa fa-edit" href="editarevento.php?cod=<?php echo $dado["cod"]; ?>"></a></td>
			<td class="body-item mbr-fonts-style display-7"><a class="fa fa-trash" href="excluir.php?cod=<?php echo $dado["cod"]; ?>"></a></td>
		</tr>
	</tbody>
</table>
</div>
<hr>
<nav align="center">
	<ul class="pagination pagination-lg">
		<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
	</ul>
</nav>
</hr>