<div class="container scroll" style="top: 20px;">
  <table class="table isSearch" cellspacing="0">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data Inicio</th>
        <th>Data Fim</th>
        <th align="center" title="Detalhes do evento">Detalhes</th>
      </tr>
    </thead>
    <tbody>      
      <?php while ($linhas = mysqli_fetch_array($con)){?>      
      <tr>
        <td class="body-item mbr-fonts-style display-7"><?php echo $linhas['nome'];?></td>
        <td class="body-item mbr-fonts-style display-7"><?php echo date ("d/m/Y", strtotime($linhas['data_ini']));?></td>
        <td class="body-item mbr-fonts-style display-7"><?php echo date ("d/m/Y", strtotime($linhas['data_fim']));?></td>
        <td><a href="evento.php?id_evento=<?php echo $linhas[0];?>"><i class="mbri-pages" title="Detalhes do evento"></i></a></i></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>