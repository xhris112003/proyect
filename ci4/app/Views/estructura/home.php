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

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <!-- <img src="/ci4/public/img/1.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            ChrisES
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('/') ?>">Home <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-center" href="">Login</a>
                        <a class="dropdown-item text-center" href="">Register</a>
                    </div>
                    
                </li> -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    Login
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
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
                                </div>
                                <a class="link-primary" href="<?php echo base_url('/registrar') ?>">No tienes cuenta?
                                    Registrate.</a>
                            </div>
                        </div>
                    </div>
            </ul>
    </nav>
</header>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.postimg.cc/28YncdW7/wallhaven-e7jj6r-2560x1080.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.postimg.cc/4xNVZJBK/wallhaven-j3m8y5-2560x1080.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.postimg.cc/PrMYBLzs/wallhaven-zyxvqy-2560x1080.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php
if(isset($users)){
    echo form_hidden('id',$users[0]['id']);
}
echo form_close();
?>
</body>