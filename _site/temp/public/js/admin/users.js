function adduserform(){
    $.ajax({        
        url: variables.controller+variables.view,
        beforeSend:function(){
            $('#addUserModal').html('<p class="text-info">processing...</p>');
        },
        success: function(msg){
            $('#addUserModal').html(msg);
                         
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function addingUser(e){
    $.ajax({        
        url: variables.controller+e,
        type: 'POST',
        data: $("#addNewUserForm").serialize(),
        beforeSend:function(){
            //$('#addUserModal').html('<p class="text-info">processing...</p>');
            $('button').addClass('disabled').prop('disabled', true);
        },
        success: function(msg){
            $('button').removeProp('disabled').removeClass('disabled');
            if ($.isNumeric(msg)){
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Account created</strong></div>');
                $('#btnAddUser').hide();
                setTimeout(function() {location.reload();}, 300);
            }else{
                $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Error: </strong>'+msg+'</div>');
            }                      
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function editUser(id){
    var email = $('#'+id).parent().parent().find('.email').text();
    $.ajax({        
        url: variables.controller+'editUser',
        type: 'POST',
        data: {email: email},
        beforeSend:function(){
            $('#editUserModal').html('<p class="text-info">processing...</p>');
        },
        success: function(msg){
            $('#editUserModal').html(msg);
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function updatingUser(e){
    $.ajax({        
        url: variables.controller+e,
        type: 'POST',
        data: $("#editUserForm").serialize(),
        beforeSend:function(){
            //$('#addUserModal').html('<p class="text-info">processing...</p>');
            $('button').addClass('disabled').prop('disabled', true);
        },
        success: function(msg){
            $('button').removeProp('disabled').removeClass('disabled');
            alert(msg);
           /* $('button').removeProp('disabled').removeClass('disabled');
            if ($.isNumeric(msg)){
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Account created</strong></div>');
                $('#btnEditUser').hide();
                setTimeout(function() {location.reload();}, 300);
            }else{
                $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Error: </strong>'+msg+'</div>');
            }  */                    
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function confirmdelete(id){
    var deleterow = id;
    $('#username').html($('#'+id).parent().parent().find('.name').text());
    $('#valitem').val(id);
}
function adelete(){
    $.ajax({        
        url: variables.controller+'deleteUser',
        type: 'POST',
        data: {id: $('#valitem').attr('value')},
        beforeSend:function(){
            $('button').addClass('disabled').prop('disabled', true);
            $('#btn-delete').html('Deleting...');
        },
        success: function(msg){
            $('#btn-delete').html('Deleted');
            setTimeout(function() {location.reload();}, 300);                     
        },
        error: function(){
          erroFindingURL();
        }
    });
}

/*therapists*/
function addTherapistform(){
    $.ajax({        
        url: variables.controller+variables.view,
        beforeSend:function(){
            $('#addtherapistModal').html('<p class="text-info">processing...</p>');
        },
        success: function(msg){
            $('#addtherapistModal').html(msg);
                         
        },
        error: function(){
          erroFindingURL();
        }
    });
}

// $('#users').ready(function() {
//      usersTable();
// } );
/*function usersTable(){
$.ajax({
    url: '../users/tableUsers.php',
    beforeSend: function(){
        $('.cont-users').html('<p>Loading <img src="../lib/loader.gif" class="img-responsive" alt="Loading..."></p>');
    },
    success: function(msg){
        $('.cont-users').html(msg);
        //$('#userTable').dataTable();
        
    },
    error:function(){
        erroFindingURL();
    }
});
}

function addingUser(){
    $.ajax({
        url: '../users/addUser.php',
        type: 'POST',
        data: $("#addNewUserForm").serialize(),
        beforeSend:function(){
            $('#statusUserForm').html('Processing...');
        },
        success: function(msg){
            if (msg=='true') {
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>The user has been successfully registered....</strong></div>');
            }          
            else  $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               location.reload();
            });
        },
        error: function(){
          erroFindingURL();
        }
    });
}

function confirmdelete(id){
    var deleterow = id;
    $('#valitem').val(id);
}
function adelete(){
var id = $('#valitem').attr('value');

$.ajax({
    url: '../users/deluser.php',
    type: 'POST',
    data: {id: id},
    beforeSend: function(){
        
    },
    success: function(msg){
         $( "#btn-no" ).click();
         location.reload();
    },
    error:function(){
        erroFindingURL();
    }
});
}

// ****************************************************************************************

function edit(id){
    $.ajax({
        url: '../lib/users.php',
        type: 'POST',
        data: {toDo: 2, id:id},
        beforeSend: function(){
            $('#user-title').html('Editar Cliente/Usuario');
            $('#user-body').html('Cargando...');
            $('.btnUser').html('Guardar Cambios');
            $('.btnUser').attr('id', 'btnEditUser');
        },
        success: function(msg){
            $('#user-body').html(msg);
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function updatingUser(){
    $.ajax({
        url: '../lib/updateUser.php',
        type: 'POST',
        data: $("#editUserForm").serialize(),
        beforeSend:function(){
            $('#statusUserForm').html('validación en progreso...');
        },
        success: function(msg){
            if ($.isNumeric(msg)) {
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Esta cuenta ha sido actualizada exitosamente....</strong></div>');
            }          
            else  $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               location.reload();
            });
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function changePass(id, name){
    $.ajax({
        url: '../lib/users.php',
        type: 'POST',
        data: {toDo: 3, id:id},
        beforeSend: function(){
            $('#user-title').html('Cambiar contraseña <small>a '+name+'</small>');
            $('#user-body').html('Cargando..');
            $('.btnUser').html('Guardar Cambios');
            $('.btnUser').attr('id', 'btnChangePass');
        },
        success: function(msg){
            $('#user-body').html(msg);
        },
        error: function(){
          erroFindingURL();
        }
    });
}
function chanchingPass(){
    $.ajax({
        url: '../lib/updatePUser.php',
        type: 'POST',
        data: $("#changePassForm").serialize(),
        beforeSend:function(){
            $('#statusUserForm').html('validación en progreso...');
        },
        success: function(msg){
            if ($.isNumeric(msg)) {
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La contraseña ha sido actualizada exitosamente....</strong></div>');
            }          
            else  $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               location.reload();
            });
        },
        error: function(){
         erroFindingURL();
        }
    });
}
function erroFindingURL(){
    alert("vaya!!!, parece que hubo un error, si el error persiste pongase en contacto con info@gixcode.com");
}*/