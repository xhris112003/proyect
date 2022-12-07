<div class="container">
<?php
echo form_open('/Micontrolador/guarda');
if(isset($users)){
    $id=$users[0]['id'];
    $name=$users[0]['name'];
    $email=$users[0]['email'];
    $password=$users[0]['password'];
    $username=$users[0]['username'];
}
else{
    $id="";
    $name="";
    $email="";
    $password="";
    $username="";    
}
?>
<div class="form-group">
<?php
echo form_label('Id','id');
echo form_input(array('name'=>'id','placeholder'=>'Id','class'=>'form-control','value'=>$id));
echo "<br>";
echo form_label('Nombre','name');
echo form_input(array('name'=>'name','placeholder'=>'Nombre','class'=>'form-control','value'=>$name));
echo "<br>";
echo form_label('Email','email');
echo form_input(array('name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>$email));
echo "<br>";
echo form_label('Password','password');
echo form_input(array('name'=>'password','placeholder'=>'Password','class'=>'form-control','value'=>$password));
echo "<br>";
echo form_label('Username','username');
echo form_input(array('name'=>'username','placeholder'=>'Username','class'=>'form-control','value'=>$username));
echo "<br>";
echo form_submit('guarda','Guardar','class="btn btn-primary"');
?>
<a href="http://localhost:8000/" class="btn btn-warning" role="button">Cancelar</a>
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