$(document).ready(function(){
    $('#register').click(function(){
        var nombreUsuario = $('#nombreUsuario').val();
        var apellidoUsuario  = $('#apellidoUsuario').val();
        var cedulaUsuario = $('#cedulaUsuario').val();
        var telefonoUsuario = $('#telefonoUsuario').val();
        var emailUsuario = $('#emailUsuario').val();
        var usuario = $('#usuario').val();
        var passwordUsuario = $('#passwordUsuario').val();
        var rolUsuario = $('#rolUsuario').val();

        var route = "nombreUsuario="+nombreUsuario+"&apellidoUsuario="+apellidoUsuario+"&cedulaUsuario="+cedulaUsuario+"&telefonoUsuario="+telefonoUsuario+"&emailUsuario="+emailUsuario+"&usuario="+usuario+"&passwordUsuario="+passwordUsuario+"&rolUsuario="+rolUsuario;
        
        $.ajax({
            url:"Controller/test.php",
            type:"POST",
            data:route
        })
        .done(function(data){

            alert(data);
            console.log("Registrado");
        })
        .fail(function(){
            console.log("Ha fallado la solicitud");
        });
    });
});