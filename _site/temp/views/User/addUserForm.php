<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>CleanEnergy | User</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/html" href="<?=URL?>public/css/bootstrap3-wysihtml5.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CleanEnergy</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession" >Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2  d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>user/">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>categories/">
                  <span data-feather="filter"></span>
                  Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">
                  <span data-feather="package"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Usuarios</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>user/" class="btn btn-sm btn-outline-info"><span data-feather="arrow-left"></span> Volver a Usuarios</a>
               
            </div>
          </div>
          <div class="album py-5 bg-light">
              <div class="container">
                  <div class="row">
                    <div class="col-6">
                      
                 
                           <form class="form-horizontal" id="addNewUserForm">
                                <div class="form-group hid den">
                                  <label for="inputTipo" class="col-sm-2 control-label">Type</label>
                                  <div class="col-sm-10">
                                    <select name="inputtype" class="form-control">
                                      <!-- <option value="3">Miembro</option>
                                      <option value="2">Socio</option> -->
                                      <option value="1">Admin</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputcorreo" class="col-3 control-label">Email</label>
                                    <div class="col-12">
                                         <input type="email" id="inputcorreo" name="inputcorreo" class="form-control" placeholder="Email@email.com" required autofocus="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
                                    <div class="col-12">
                                        <input type="password" id="password" name="inputcontrasena" autocomplete class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputConfContra" class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-12">
                                        <input type="password" id="inputConfContra"  autocomplete class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div> -->
                                
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputNombre" class="col-sm-3 control-label">Name</label>
                                    <div class="col-12">
                                         <input type="text" id="inputNombre" name="inputname" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputPhone" class="col-sm-3 control-label">Phone</label>
                                    <div class="col-12">
                                         <input type="text" id="inputPhone" name="inputphone" class="form-control" placeholder="Phone">
                                    </div>
                                </div> -->
                                <div id="statusUserForm"></div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-default" href="<?=URL?>user/"> Close</a>
                                    <button type="submit" class="btn btn-success" id="btnAddUser">Add User</button>
                                </div>
                           </form>
                        </div>
                  </div>
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

        </div>
    </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
   
    <!-- <script src="<?=URL?>public/resources/popper.min.js"></script> -->
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/js/jquery.validate-1.11.1.js"></script>
    
    <script>
      feather.replace()
    </script>
    <script>
    $(document).ready(function() {
        $("#addNewUserForm").validate({
          rules: {
            inputname: "required",
            inputcontrasena: {
                required: true,
                minlength: 6
            },
            inputcorreo: {
                required: true,
                email: true
            },
        },
        messages: {
            inputname: "<span class='text-danger'>Enter a Name</span>",
            inputcontrasena: {
                required: "<span class='text-danger'>Enter a Password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>"
            },
            inputConfPass: {
                required: "<span class='text-danger'>Enter a password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>",
                equalTo: "<span class='text-danger'>Passwords must be the same</span>",
            },
            inputcorreo: "<span class='text-danger'>Enter a valid email</span>",
        }, 
          submitHandler: function(){
            addingUser();
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
    function addingUser(){
       $.ajax({
          url: '<?=URL?>user/registeringUser',
          type: 'POST',
          data: $("#addNewUserForm").serialize(),
          beforeSend: function(){
            $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Account created</strong></div>');
          },
          success: function(msg){
            $('#statusUserForm').html(msg);
            location.reload();
          },
            error: function(){
              erroFindingURL();
            }
        });
}
</script>
  </body>
</html>



<!-- /******************************************************************************************************************/ -->

