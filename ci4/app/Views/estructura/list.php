<!DOCTYPE html>
<html lang="en">
<head>
<title>Users list!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>
<body>
<div class="container"><br/><br/>
    <div class="row">
        <div class="col-lg-10">
            <h2>Users list!</h2>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Add New Admin
            </button>
            
        </div>
        <div class="d-grid gap-2 d-md-block">
            <a href="<?php echo base_url('/home') ?>"  class="btn btn-dark col-sg-2" role="button">Return</a>
            <a href="<?php echo base_url('/logout') ?>"  class="btn btn-danger" role="button">Logout</a>
            <a href="<?php echo base_url('/exportData') ?>" class="btn btn-secondary" role="button btn-secondary">Export</a>
        </div>
        
    </div>
    <br>
    <table class="table" id="tableUser">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th width="280px">Action</th>
            </tr>
        </thead>  
        <tbody>
       <?php
        foreach($users as $row){
        ?>
        <tr id="<?php echo $row['id']; ?>">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
            <a data-id="<?php echo $row['id']; ?>" class="btn btn-warning btnEdit"><i class="fa fa-pencil-square-o"></i></a>
            <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addUser" name="addStudent" action="<?php echo site_url('UserAjax/register');?>" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="txtName">Name:</label>
                        <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email:</label>
                        <input type="text" class="form-control" id="txtEmail" placeholder="Enter Email" name="txtEmail">
                    </div>
                    <div class="form-group">
                        <label for="txtUsername">Username:</label>
                        <input type="text" class="form-control" id="txtUsername" placeholder="Enter Username" name="txtUsername">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password:</label>
                        <input type="password" class="form-control" id="txtPassword" placeholder="Enter Password" name="txtPassword">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Update User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="upadteUser" name="upadteUser" action="<?php echo site_url('UserAjax/update');?>" method="post">
            <div class="modal-body">
                <input type="hidden" name="hdnUserId" id="hdnUserId"/>
                <div class="form-group">
                    <label for="txtName">Name:</label>
                    <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email:</label>
                    <input type="text" class="form-control" id="txtEmail" placeholder="Enter Email" name="txtEmail">
                </div>
                <div class="form-group">
                    <label for="txtUsername">Username:</label>
                    <input type="text" class="form-control" id="txtUsername" placeholder="Enter Username" name="txtUsername">
                </div>
                <div class="form-group">
                    <label for="txtPassword">Password:</label>
                    <input type="password" class="form-control" id="txtPassword" placeholder="Enter Password" name="txtPassword">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#tableUser').DataTable();
        $("#addUser").validate({
        rules: {
            txtName: "required",
            txtEmail: "required",
            txtPassword: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#addUser").attr("action");
            $.ajax({
                data: $('#addUser').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var user = '<tr id="'+res.data.id+'">';
                    user += '<td>' + res.data.id + '</td>';
                    user += '<td>' + res.data.name + '</td>';
                    user += '<td>' + res.data.email + '</td>';
                    user += '<td>' + res.data.username + '</td>';
                    user += '<td>' + res.data.password + '</td>';
                    user += '<td><a data-id="' + res.data.id + '" class="btn btn-warning btnEdit"><i class="fa fa-pencil-square-o"></i></a>  <a data-id="' + res.data.id + '" class="btn btn-danger btnDelete"><i class="fa fa-trash"></i></a></td>';
                    user += '</tr>';            
                    $('#tableUser tbody').prepend(user);
                    $('#addUser')[0].reset();
                    $('#addModal').modal('hide');
                },
                    error: function (data) {
                }
            });
            }
         });
         $('body').on('click', '.btnEdit', function () {
            var userId = $(this).attr('data-id');
            $.ajax({
                url: '/editarUser/edit/'+userId,
                type: "GET",
                dataType: 'json',
                success: function (res) {
                    $('#updateModal').modal('show');
                    $('#upadteUser #hdnUserId').val(res.data.id); 
                    $('#upadteUser #txtName').val(res.data.name);
                    $('#upadteUser #txtEmail').val(res.data.email);
                    $('#upadteUser #txtUsername').val(res.data.username);
                    $('#upadteUser #txtPassword').val(res.data.password);
                },
                    error: function (data) {
                }
            });

        $("#upadteUser").validate({
        rules: {
            txtName: "required",
            txtEmail: "required",
            txtPassword: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#upadteUser").attr("action");
            $.ajax({
                data: $('#upadteUser').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var user = '<tr id="'+res.data.id+'">';
                    user += '<td>' + res.data.id + '</td>';
                    user += '<td>' + res.data.name + '</td>';
                    user += '<td>' + res.data.email + '</td>';
                    user += '<td>' + res.data.username + '</td>';
                    user += '<td>' + res.data.password + '</td>';
                    user += '<td><a data-id="' + res.data.id + '" class="btn btn-warning btnEdit"><i class="fa fa-pencil-square-o"></i></a>  <a data-id="' + res.data.id + '" class="btn btn-danger btnDelete"><i class="fa fa-trash"></i></a></td>';
                    user += '</tr>';            
                    $('#tableUser tbody').prepend(user);
                    $('#upadteUser')[0].reset();
                    $('#updateModal').modal('hide');
                },
                    error: function (data) {
                }
            });
            }
         });
         
        

    });
    $('body').on('click', '.btnDelete', function () {
        var userDelete = $(this).attr('data-id');
        $.get('/editarUser/delete/'+userDelete, function (data) {
            $('#tableUser tbody #'+ userDelete).remove();
        })
    });

         
    });
</script>