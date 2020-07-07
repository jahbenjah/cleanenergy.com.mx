<div class="row">

   <form class="form-horizontal" id="addNewUserForm">
        <div class="form-group">
            <label for="inputEmail" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-4">
                 <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="myEmail@email.com" required autofocus="">
            </div>
        </div>
        <div class="form-group">
            <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-4">
                <input type="password" id="password" name="inputPassword" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputConfContra" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" id="inputConfContra" name="inputConfPass" class="form-control" placeholder="Confirm Password" required>
            </div>
        </div>
        <br>
        <hr>
        <div class="form-group">
            <label for="inputNombre" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                 <input type="text" id="inputNombre" name="inputName" class="form-control" placeholder="Name">
            </div>
        </div>
         <div class="form-group">
            <label for="inputGender" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                 <select name="inputGender" class="form-control" required>
                   <option value="">choose a gender</option>
                   <option value="F">Female</option>
                   <option value="M">Male</option>
                 </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-6">
                 <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div id="statusUserForm"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="btnAddUser">Add User</button>
        </div>
   </form>
</div>
<script>
    $(document).ready(function() {
        $("#addNewUserForm").validate({
          rules: {
            inputName: "required",
            inputPassword: {
                required: true,
                minlength: 6
            },
            inputConfPass: {
                required: true,
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
            inputGender: "<span class='text-danger'>Select a gender</span>",
            inputPassword: {
                required: "<span class='text-danger'>Enter a Password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>"
            },
            inputConfPass: {
                required: "<span class='text-danger'>Enter a password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>",
                equalTo: "<span class='text-danger'>Passwords must be the same</span>"
            },
            inputEmail: "<span class='text-danger'>Enter a valid email</span>",
            inputTipoUsuario: "<span class='text-danger'>Por favor selecciona el tipo de usuario</span>"
        }, 
          submitHandler: function(){
            addingUser('addingTherapist');
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