<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Status</th>
				<th>Data / Hora</th>				
			</tr>
		</thead>
		<tbody>
		<tr>
			<?php while ($linhas = mysqli_fetch_array($conv)){?>			
			<td ><?php echo $linhas["nome_participante"]; ?></td>
			<td ><?php echo $linhas["status"]; ?></td>
			<td align="center"><?php echo date ("d/m/y - h:m:s", strtotime($linhas['datahora']));?></td>
			</a> </td>
		</tr>
		<?php } ?> 
	</tbody>
</table>
</div>