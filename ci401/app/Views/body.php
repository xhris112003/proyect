<body>
<div class="container">
    <div class="row">
        <a href="<?php echo base_url(); ?>nuevo" class="btn btn-info" role="button" >Nuevo</a>
    </div>
    <div class="row">

    
        <table  class="table">
        <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">deleted</th>
        <th scope="col">acciones</th>
        </tr>
        <?php
        ?>
        <? if($users): ?>
            <?php foreach ($users as $user): ?>
            <?= "<tr  scope='row' >";?>
            <?= "<td>".$user['id']."</td>";?>
            <?= "<td>".$user['name']."</td>";?>
            <?= "<td>".$user['email']."</td>";?>
            <?= "<td>".$user['deleted']."</td>";?>
            <td>
            
            </td>
            <?php endforeach; ?>
        <? endif; ?>
        </table>
        <?php echo $paginador->links(); ?>
    </div>
</div>
</body>
</html>