<div class="t"><?php echo $titulo; ?></div>
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
   <tr>
      <th>Agent</th>
      <th>Password</th>

    </tr>
    <?php foreach ($info as $data): ?>
    <tr>
        <td><?php echo $data->Agent;?></td>
      <td><?php echo $data->Password;?></td>
    </tr>
    <?php endforeach; ?>
 </table>
