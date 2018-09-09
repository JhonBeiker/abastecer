<!-- modal-1 -->
<div id="modal-1" class="modal modal-update">
    <form action="" method="post">
        <div class="modal-content">
            <div class="row">
                <h4 class="center-align yellow-text text-darken-2">Actualizar Integrante</h4>
            </div>
            <div class="row">
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-person_pin prefix grey-text"></i>
                    <input type="text" id="namesIntegrante" name="namesIntegrante" class="validate" value="Eddy Luz">
                    <label for="namesIntegrante">Nombres</label>
                </div>
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-person_pin prefix grey-text"></i>
                    <input type="text" id="lastnamesIntegrante" name="lastnamesIntegrante" class="validate" value="Jiménez Torres">
                    <label for="lastnamesIntegrante">Apellidos</label>
                </div>
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-chrome_reader_mode prefix grey-text grey-text"></i>
                    <input type="text" id="ciIntegrante" name="ciIntegrante" class="validate" value=12708170>
                    <label for="ciIntegrante">Cedula</label>
                </div>
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-date_range prefix grey-text"></i>
                    <input type="text" id="birthDate" name="birthDate" class="datepicker" value="08/02/1975">
                    <label for="birthDate">Nacimiento</label>
                </div>
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-contact_phone prefix grey-text"></i>
                    <input type="tel" id="telfIntegrante" name="telfIntegrante" class="validate" value=04245199337>
                    <label for="telfIntegrante">Teléfono</label>
                </div>
                <div class="col s12 m6 xl4 input-field">
                    <i class="icon-contact_mail prefix grey-text"></i>
                    <input type="email" id="emailIntegrante" class="emailIntegrante" class="validate" value="eddyluzjimenez@gmail.com">
                    <label for="emailIntegrante">E-mail</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-wc prefix grey-text"></i>
                    <select id="genderIntegrante" name="genderIntegrante">
                        <option disabled >Seleccione</option>
                        <option selected>Femenino</option>
                        <option>Masculino</option>
                    </select>
                    <label for="genderIntegrante">Sexo</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-face prefix grey-text"></i>
                    <select id="rolIntegrante" name="rolIntegrante">
                        <option disabled>Seleccione</option>
                        <option selected>Jefe Hogar</option>
                        <option>Integrante</option>
                    </select>
                    <label for="rolIntegrante">Rol</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-card_membership prefix grey-text"></i>
                    <input type="text" id="codcarnet" name="codCarnet" class="validate" value="0000708165">
                    <label for="codcarnet">Código Carnet de la Patria</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="icon-card_membership prefix grey-text"></i>
                    <input type="text" id="serialcarnet" name="serialcarnet" class="validate" value="0000234554">
                    <label for="serialcarnet">Serial Carnet de la Patria</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="DetalllesFamiliaView.php" class="modal-action modal-close waves-effect btn blue-45deg-gradient-1"><i class="icon-check right"></i>Actualizar</a>
            <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>Cancelar</a>
        </div>
    </form>
</div>