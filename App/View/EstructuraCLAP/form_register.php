<!-- Boton para el modal de registrar nuevo usuario -->
<a href="#modal1" class="btn green darken-2 modal-trigger col s12">
    <i class="icon-add left"></i>Registrar Nuevo Integrante<i class="icon-person_add right"></i>
</a>
<!-- Modal con formulario de registro -->
<div class="modal modal-fixed-footer" id="modal1">
    <form action="" method="post">
        <div class="modal-content">
            <div class="row">
                <h4 class="center-align yellow-text text-darken-2 ">Registrar Integrante</h4>
            </div>
            <div class="row">
                <div class="col s12 m6 input-field">
                    <i class="icon-map prefix grey-text"></i>
                    <select name="parroquia">
                        <option disabled selected>Elige una opición</option>
                        <option>Buena Vista</option>
                        <option>Catedral</option>
                        <option>Concepción</option>
                        <option>Felipe Alvarado</option>
                        <option>Juan de Villegas</option>
                        <option>Juarez</option>
                        <option>Santa Rosa</option>
                        <option>Tamaca</option>
                        <option>Unión</option>
                    </select>
                    <label>Parroquia</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-streetview prefix grey-text"></i>
                    <select name="clap">
                        <option disabled selected>Seleccione CLAP</option>
                        <option>Clap Nueva Esperanza</option>
                        <option>Clap Viva Bolivar</option>
                        <option>Clap Zamora</option>
                    </select>
                    <label>CLAP</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-contact_mail prefix grey-text"></i>
                    <input type="text" id="ciUsuario"  name="ciUsuario"  class="validate">
                    <label for="ciUsuario">Cedula</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-person_pin prefix grey-text"></i>
                    <input type="text" id="nameUsuario"  name="nameUsuario"  class="validate">
                    <label for="nameUsuario">Nombre</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-person_pin prefix grey-text"></i>
                    <input type="text" id="lastnameUsuario"  name="lastnameUsuario"  class="validate">
                    <label for="lastnameUsuario">Apellido</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-phone_android prefix grey-text"></i>
                    <input id="telfUsuario" type="text" name="telfUsuario"  class="validate">
                    <label for="telfUsuario">Teléfono</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-markunread prefix grey-text"></i>
                    <input type="email" name="emailUsuario" id="emailUsuario" class="validate">
                    <label for="emailUsuario">E-mail</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-transfer_within_a_station prefix grey-text"></i>
                    <select name="rolUsuario">
                        <option disabled selected>Elige una opición</option>
                        <option value="">Lider Comunidad</option>
                        <option value="">UBCH</option>
                        <option value="">UNAMUJER</option>
                        <option value="">FFM</option>
                        <option value="">Consejo Comunal</option>
                        <option value="">CLP</option>
                        <option value="">Milicia</option>
                        <option value="">Productivo</option>
                        <option value="">Comunicador</option>
                    </select>
                    <label>Rol Organización</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="UsuarioView.php" class="modal-action modal-close waves-effect btn green"><i class="icon-check right"></i>Registrar</a>
            <a href="" class="modal-action modal-close waves-effect btn red"><i class="icon-close right"></i>Eliminar</a>
        </div>
    </form>
</div>