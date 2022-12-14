<body>
<div class="container">
    <div id="caja01" class="row">
        <a id="btn01" href="<?php echo base_url('/exportData') ?>" class="btn btn-secondary" role="button btn-secondary">Export</a>
        <a id="btn01" href="<?php echo base_url('/logout') ?>"  class="btn btn-danger" role="button">Logout</a>
        
    </div>
    <?php if($users != null && !empty($users)){?>
        <div class="row">

            <table  class="table">
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">username</th>
            <th scope="col">passwords</th>
            <th scope="col"></th>
            </tr>
            <?php
            ?>
            <? if($users): ?>
                
                <?php foreach ($users as $user): ?>
                <?= "<tr  scope='row' >";?>
                <?= "<td>".$user['id']."</td>";?>
                <?= "<td>".$user['name']."</td>";?>
                <?= "<td>".$user['email']."</td>";?>
                <?= "<td>".$user['username']."</td>";?>
                <?= "<td>".$user['password']."</td>";?>

                <td>
                <a href="<?php echo base_url('/editar?id='.$user['id']); ?><?php echo $user['id']; ?>" class="btn btn-warning" role="button" ><i class="fa fa-pencil-square-o"></i></a>
                <a href="<?php echo base_url('/borrado?id='.$user['id']); ?>" class="btn btn-danger" role="button" ><i class="fa fa-trash"></i></a>
                </td>
                <?php endforeach; ?>
            <? endif; ?>
            </table>
        </div>
    <?}?>
</div>
</body>
</html>
