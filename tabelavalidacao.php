<div style = "position: absolute; top: 55px; left: 138px;">
<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th width="30px">Status</th>
				<th width="30px">Hora</th>				
			</tr>
		</thead>
		<tbody>
		<tr>
			<?php while ($linhas = mysqli_fetch_array($conv)){?>			
			<td ><?php echo $linhas["nome_participante"]; ?></td>
			<td ><?php echo $linhas["status"]; ?></td>
			<td align="center"><?php echo date ("h:i:s", strtotime($linhas['datahora']));?></td>
		</tr>
		<?php } ?> 
	</tbody>
</table>
</div></div>