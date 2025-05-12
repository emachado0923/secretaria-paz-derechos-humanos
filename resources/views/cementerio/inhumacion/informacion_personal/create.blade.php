<form class="form-group was-validated" id="form2"> <!-- NO SE TOCA -->
    <div class="shadow p-3 mb-5 bg-white rounded"> <!-- NO SE TOCA -->
        <div class="row"><!-- NO SE TOCA -->
            <div class="col-sm">
                <div class="alert alert-dark" role="alert">
                    <span class="badge badge-dark">CAPITULO IV. SALUD MENTAL</span> <!-- EL TITULO -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                Durante los últimos 6 meses ha presentado:
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm">
                    <label for="tipo_inhumacion">Tipo de Inhumación:</label>
                    <select class="form-control form-control-sm" id="tipo_inhumacion" required>
                        <?= $t1_tipo_novedad_inhumacion ?>
                    </select>
            </div>
            <div class="form-group col-sm">
                    <label for="tipo_cuerpo">Tipo de Cuerpo:</label>
                    <select class="form-control form-control-sm" id="tipo_cuerpo" onchange="manejarTipoCuerpo()" required>
                        <?= $t1_tipo_cuerpo ?>
                    </select>
            </div>
            
                
            
            <div class="form-group col-sm">
                <label for="contrato">Contrato:</label>
                <input type="text" class="form-control form-control-sm" id="contrato" style="text-transform: uppercase;" required value="<?= $contrato ?>">
            </div>
            <div class="form-group col-sm">
                <label for="cementerio">Cementerio:</label>
                <input type="text" class="form-control form-control-sm" id="cementerio" style="text-transform: uppercase;" required value="<?= $cementerio ?>">
            </div>

        </div>
        
        
        
        
        
        <div class="row">
            
            <div class="form-group col-sm">
                <label for="certificado_defucion">Certificado de Defución:</label>
                <input type="text" class="form-control form-control-sm" id="certificado_defucion" style="text-transform: uppercase;" required value="<?= $certificado_defucion ?>">
            </div>
            <div class="form-group col-sm">
                <label for="tipo_documento">Tipo de Documento:</label>
                <select class="form-control form-control-sm" id="tipo_documento" required>
                    <?= $t1_tipodedocumento ?>
                </select>
            </div>
            <div class="form-group col-sm">
                <label for="numero_documento">Número de Documento:</label>
                <input type="text" class="form-control form-control-sm" id="numero_documento" style="text-transform: uppercase;" required value="<?= $numero_documento ?>">
            </div>
        </div>

        
        
        <div class="row">
                <div class="form-group col-sm">
                    <label for="primer_nombre">Primer Nombre:</label>
                    <input type="text" class="form-control form-control-sm" id="primer_nombre" style="text-transform: uppercase;" required value="<?= $primer_nombre ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="segundo_nombre">Segundo Nombre:</label>
                    <input type="text" class="form-control form-control-sm" id="segundo_nombre" style="text-transform: uppercase;"  value="<?= $segundo_nombre ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="primer_apellido">Primer Apellido:</label>
                    <input type="text" class="form-control form-control-sm" id="primer_apellido" style="text-transform: uppercase;" required value="<?= $primer_apellido ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="segundo_apellido">Segundo Apellido:</label>
                    <input type="text" class="form-control form-control-sm" id="segundo_apellido" style="text-transform: uppercase;"  value="<?= $segundo_apellido ?>">
                </div>         

            
           




        </div>
        

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control form-control-sm" id="fecha_nacimiento" max="<?= date('Y-m-d') ?>" style="text-transform: uppercase;" value="<?= $fecha_nacimiento ?>"  required>
            </div>

            <div class="form-group col-sm">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control form-control-sm" id="edad" style="text-transform: uppercase;" max="3" required value="<?= $edad ?>">
            </div>
            <div class="form-group col-sm">
                <label for="estado_civil">Estado Civil :</label>
                <select class="form-control form-control-sm" id="estado_civil" required>
                    <?= $t1_estadocivil ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm">
                <label for="genero">Genero :</label>
                <select class="form-control form-control-sm" id="genero" required>
                    <?= $t1_identidaddegenero ?>
                </select>
            </div>
            <div class="form-group col-sm">
                <label for="sexo">Sexo :</label>
                <select class="form-control form-control-sm" id="sexo" required>
                    <?= $t1_sexo ?>
                </select>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-sm">
                <label for="nombre_padre">Nombre Completo del Padre:</label>
                <input type="text" class="form-control form-control-sm" id="nombre_padre" style="text-transform: uppercase;" required value="<?= $nombre_padre ?>">
            </div>
            <div class="form-group col-sm">
                <label for="nombre_madre">Nombre Completo de la Madre :</label>
                <input type="text" class="form-control form-control-sm" id="nombre_madre" style="text-transform: uppercase;" required value="<?= $nombre_madre ?>">
            </div>
        </div>
    
    </div>

    <!-- NO SE TOCA -->
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <button type="button" id="anterior" class="btn btn-dark" onclick="btnsiguiente('discapacidad_capitulo_3','<?= $id_usuario ?>')">Anterior</button>
        <button type="submit" class="btn btn-dark">Guardar</button>
        <button type="button" id="siguiente" class="btn btn-dark" onclick="<?= $btnsiguiente ?>" <?= $siguiente ?>>Siguiente</button>
    </div>



    <input type="text" style='display:none' class="form-control form-control-sm" id="usuario" style="text-transform: uppercase;" placeholder="" value="<?= $usuario ?>">
    <input type="text" style='display:none' class="form-control form-control-sm" id="estado" style="text-transform: uppercase;" placeholder="" value="<?= $estado ?>">
    <input type="text" style='display:none' class="form-control form-control-sm" id="fecharegistro" style="text-transform: uppercase;" placeholder="" value="<?= $fecharegistro ?>">
    <input type="text" style='display:none' class="form-control form-control-sm" id="tabla" style="text-transform: uppercase;" placeholder="" value="<?= $tabla ?>">
    <input type="text" style='display:none' class="form-control form-control-sm" id="id_usuario" style="text-transform: uppercase;" placeholder="" value="<?= $id_usuario ?>">
</form>