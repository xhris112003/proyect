<div class="container">

<h2>Login</h2>
<?php
echo form_open('/loginController/loginUser');
if(isset($users)){
    $username=$user[0]['username'];
    $password=$users[0]['password'];
}
else{
    $password="";
    $username="";     
}
?>
<div class="form-group">
<?php
echo form_label('Username','username');
echo form_input(array('name'=>'username','placeholder'=>'Username','class'=>'form-control','value'=>$username));
echo "<br>";
echo form_label('Password','password');
echo form_input(array('type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-control','value'=>$password));
echo "<br>";
echo form_submit('loginUser','Login','class="btn btn-primary"');
?>
<br><br>
<p>NOTA: si aún no tienes cuenta registrate, cualquier problema ponte en contacto con el Soporte Tecnico. </p>
<a href="http://localhost:8000/registrar" class="btn btn-warning" role="button">Registrarse</a>
<?php
if(isset($users)){
    echo form_hidden('id',$users[0]['id']);
}

?>
</div>
<?php

echo form_close();
?>
</div>


