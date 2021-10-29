<form id="alta-contacto" name="alta_frm" action="php/agrega-contacto.php" method="post" enctype="multipart/form-data">

    <fieldset>
        <legend>Alta de Contacto</legend>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu EMAIL"
                title="Tu email" required>
        </div>
        <div>
            <label for="nomre">Nombre:</label>
            <input type="text" id="nombred" class="cambio" name="noombre_txt" placeholder="Escribe tu nombre"
                title="Tu nombre" require>
        </div>
        <div>
            <label for="m">Sexo:</label>
            <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" required>
            <label for="m">Masculino</label>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" required>
            <label for="f">Femenino</label>
        </div>
        <div>
            <label for="nacimiento">Fecha de Nacimiento: </label>
            <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="tu cumple" require>
        </div>
        <div>
            <label for="telefono">Telefono: </label>
            <input type="number" id="telefono " class="cambio" name="telefono_txt" placeholder="Escribe tu telefono"
                required>
            <title>tu telefono</title>
        </div>
        <div>
            <label for="pais">Pais: </label>
            <select name="pais_slc" id="pais" class="cambio" required>
                <option value="">---</option>
                <?php include("select-pais.php"); ?>
            </select>
        </div>
        <div>
            <label for="foto">FOTO: </label>
            <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
        </div>
        <div>
            <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar">
        </div>
        <?php include("php/mensajes.php"); ?>
    </fieldset>

</form>