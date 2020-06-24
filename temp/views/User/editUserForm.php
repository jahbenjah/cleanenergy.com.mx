<?php
    $user=$this->edituser;
?>
<div class="row">
   <form class="form-horizontal" id="editUserForm">
        <div class="form-group" class="d-none">
            <label for="inputId" class="col-sm-3 control-label">id</label>
            <div class="col-sm-4">
                 <input type="number" id="inputId" name="inputId" class="form-control" placeholder="<?=$user['id']?>" value="<?=$user['id']?>" required readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-4">
                 <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="<?=$user['email']?>" value="<?=$user['email']?>" required autofocus="">
            </div>
        </div>
        <div class="form-group">
            <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-4">
                <input type="password" id="password" name="inputPassword" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputConfContra" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" id="inputConfContra" name="inputConfPass" class="form-control" placeholder="Confirm Password">
            </div>
        </div>
        <br>
        <hr>
        <div class="form-group">
            <label for="inputNombre" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                 <input type="text" id="inputNombre" name="inputName" class="form-control" placeholder="<?=$user['name']?>" value="<?=$user['name']?>">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="inputPhone" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-6">
                 <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="<?=$user['phone']?>" value="<?=$user['phone']?>">
            </div>
        </div> -->
        <div id="statusUserForm"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="btnEditUser">Save changes</button>
        </div>
   </form>
</div>
<script>
    $(document).ready(function() {
        $("#editUserForm").validate({
          rules: {
            inputName: "required",
            inputPassword: {
                minlength: 6
            },
            inputConfPass: {
                minlength: 6,
                equalTo: "#password"
            },
            inputEmail: {
                required: true,
                email: true
            },
            inputTipoUsuario: "required"
        },
        messages: {
            inputName: "<span class='text-danger'>Enter a Name</span>",
            inputPassword: {
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>"
            },
            inputConfPass: {
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>",
                equalTo: "<span class='text-danger'>Passwords must be the same</span>"
            },
            inputEmail: "<span class='text-danger'>Enter a valid email</span>",
            inputTipoUsuario: "<span class='text-danger'>Por favor selecciona el tipo de usuario</span>"
        }, 
          submitHandler: function(){
            updatingUser('updatingUser');
          },
          highlight: function(element) {
              var id_attr = "#" + $( element ).attr("id") + "1";
              $(element).closest('.form-group')./*removeClass('has-success').*/addClass('has-error');        
          },
          unhighlight: function(element) {
              var id_attr = "#" + $( element ).attr("id") + "1";
              $(element).closest('.form-group').removeClass('has-error')/*.addClass('has-success')*/;       
          },
          errorElement: 'span',
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
    });
</script>