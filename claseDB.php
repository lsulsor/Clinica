<?php

class DB
{

    /**
     * Conexión con la base de datos mediante PDO
     * @return $con
     */
    public static function conectar()
    {
        $datos = '';
        $user = '';
        $contra = '';
        $ort = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        try {
            $con = new PDO($datos, $user, $contra, $ort);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $con;
    }
    /**
     * Muesra la tabla profesionales ordenados por el nombre
     * @return $result
     * 
     */

    public static function verProfesional()
    {
        try {
            $sql = "SELECT * FROM profesional order by nombre";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     * Muestra el listado de la tabla servicio
     * @return $result
     */
    public static function verServicios()
    {
        try {
            $sql = "SELECT * FROM servicio";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

     /**
     * Filtra los datos
     * @return $datos
     */

    function filtrado($datos)
    {
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    /**
     *  Función para insertar Profesionales
     * @return $count número de registros afectados
     */
    public static function anadirProfesional($dniP, $nombreP, $apellidoP, $numColegiadoP, $telefonoP, $calleP, $numeroP, $pisoP, $letraP, $cpP, $provinciaP, $usuarioP, $contraseniaP, $contraProfR, $fechaAltaP, $fechaBajaP, $estado)
    {


        if (preg_match('/[0-9]{7,8}[A-Z]/', $dniP)) {
        } else {

            $errores[] = "Escriba un DNI válido";
        }
        if (empty($nombreP)) {
            $errores[] = "Debe de escribir el nombre del profesional";
        }
        if (empty($apellidoP)) {
            $errores[] = "Debe de escribir el apellido del profesional";
        }
        if (empty($telefonoP) || !is_numeric($telefonoP)) {
            $errores[] = "Debe de escribir el teléfono del profesional, solo se admiten números";
        }
        if (empty($calleP)) {
            $errores[] = "Debe de escribir la calle del profesional";
        }
        if (empty($numeroP) && !is_numeric($numeroP)) {
            $errores[] = "Debe de escribir el número de la calle del profesional";
        }
        if (empty($cpP) && !is_numeric($cpP)) {
            $errores[] = "Debe de escribir el CP del profesional";
        }
        if (empty($provinciaP)) {
            $errores[] = "Debe de escribir laprovincia del profesional";
        }
        if (empty($usuarioP)) {
            $errores[] = "Debe de escribir el usuario del profesional";
        }
        if (strlen($contraseniaP) < 6) {
            $errores[] = "La clave debe tener al menos 6 caracteres";
        }
        if (strlen($contraseniaP) > 16) {
            $errores[] = "La clave no puede tener más de 16 caracteres";
        }
        if (!preg_match('`[a-z]`', $contraseniaP)) {
            $errores[] = "La clave debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`', $contraseniaP)) {
            $errores[] = "La clave debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`', $contraseniaP)) {
            $errores[] = "La clave debe tener al menos un caracter numérico";
        }

        if (empty($contraProfR)) {
            $errores[] = "Vuelva a escrbir la contraseña";
        }
        if ($contraseniaP == $contraProfR) {
        } else {
            $errores[] = "Las contraseñas no conciden";
        }

        if (empty($fechaAltaP)) {
            $errores[] = "Escrbia una fecha de alta";
        }


        if (isset($errores)) {
?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña
                $pass_cifrado = password_hash($contraseniaP, PASSWORD_DEFAULT, array("cost" => 12));
                $sql = "INSERT into profesional (dni, nombre, apellido, num_colegiado, telefono, calle, numero, piso, letra, cp, provincia, usuario, contrasenia, fecha_alta, fecha_baja, estado) VALUES (:dni, :nom, :ape, :col, :tel, :cal, :num, :piso, :let, :cp, :pro, :usu, :con, :alt, :baj, :est)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dni', $dniP);
                $consulta->bindParam(':nom', $nombreP);
                $consulta->bindParam(':ape', $apellidoP);
                $consulta->bindParam(':col', $numColegiadoP);
                $consulta->bindParam(':tel', $telefonoP);
                $consulta->bindParam(':cal', $calleP);
                $consulta->bindParam(':num', $numeroP);
                $consulta->bindParam(':piso', $pisoP);
                $consulta->bindParam(':let', $letraP);
                $consulta->bindParam(':cp', $cpP);
                $consulta->bindParam(':pro', $provinciaP);
                $consulta->bindParam(':usu', $usuarioP);
                $consulta->bindParam(':con', $pass_cifrado);
                $consulta->bindParam(':alt', $fechaAltaP);
                $consulta->bindParam(':baj', $fechaBajaP);
                $consulta->bindParam(':est', $estado);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

   /**
     *  Función para asignar profesional
     */

    public static function asignarProf($dniUsuAP, $sDniProfesionalAP, $sTipoAP)
    {

        if (empty($sDniProfesionalAP)) {
            $errores[] = "Seleccione un profesional";
        }

        if (empty($sTipoAP)) {
            $errores[] = "Selecciona una especialidad";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña

                $sql = "INSERT into profesionalfamilia (dni_profesional, dni_familia, especialidad) VALUES (:dniP, :dniF, :esp)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dniP', $sDniProfesionalAP);
                $consulta->bindParam(':dniF', $dniUsuAP);
                $consulta->bindParam(':esp', $sTipoAP);
                $consulta->execute();
                return true;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    /**
     * Obtiene un profesional de la base de datos según su dni
     * 
     * @return $result
     */
    public static function obtenerProfesional($dniP)
    {
        try {
            $sql = "SELECT * from profesional WHERE dni = :dniP";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniP', $dniP);
            $consulta->execute();

            $result = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //devolvemos el registro
        return $result;
    }
    /**
     * Actualiza el registro de un profesional
     * @return $count número de registros modificados
     */
    public static function actualizarProfesional($dniP, $nombreP, $apellidoP, $numColegiadoP, $telefonoP, $calleP, $numeroP, $pisoP, $letraP, $cpP, $provinciaP, $usuarioP, $fechaAltaP, $fechaBajaP, $estado)
    {



        if (empty($nombreP)) {
            $errores[] = "Debe de escribir el nombre del profesional";
        }
        if (empty($apellidoP)) {
            $errores[] = "Debe de escribir el apellido del profesional";
        }
        if (empty($telefonoP) && !is_numeric($telefonoP)) {
            $errores[] = "Debe de escribir el teléfono del profesional";
        }
        if (empty($calleP)) {
            $errores[] = "Debe de escribir la calle del profesional";
        }
        if (empty($numeroP) && !is_numeric($numeroP)) {
            $errores[] = "Debe de escribir el número de la calle del profesional";
        }
        if (empty($cpP) && !is_numeric($cpP)) {
            $errores[] = "Debe de escribir el CP del profesional";
        }
        if (empty($provinciaP)) {
            $errores[] = "Debe de escribir laprovincia del profesional";
        }
        if (empty($usuarioP)) {
            $errores[] = "Debe de escribir el usuario del profesional";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                

                $sql = "UPDATE profesional SET  nombre = :nom, apellido = :ape, num_colegiado = :col, telefono = :tel, calle = :cal, numero = :num,  piso = :piso,  letra = :let, cp = :cp, provincia = :prov, usuario = :usu, fecha_alta = :alt, fecha_baja = :baj, estado = :est WHERE dni = :dni ";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dni', $dniP);
                $consulta->bindParam(':nom', $nombreP);
                $consulta->bindParam(':ape', $apellidoP);
                $consulta->bindParam(':col', $numColegiadoP);
                $consulta->bindParam(':tel', $telefonoP);
                $consulta->bindParam(':cal', $calleP);
                $consulta->bindParam(':num', $numeroP);
                $consulta->bindParam(':piso', $pisoP);
                $consulta->bindParam(':let', $letraP);
                $consulta->bindParam(':cp', $cpP);
                $consulta->bindParam(':prov', $provinciaP);
                $consulta->bindParam(':usu', $usuarioP);
                $consulta->bindParam(':alt', $fechaAltaP);
                $consulta->bindParam(':baj', $fechaBajaP);
                $consulta->bindParam(':est', $estado);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    /**
     * Obtiene un registro de la base de datos según su dni
     * 
     *  @return $count número de registros modificados
     */
    public static function obtenerBorrarProfesional($dniP)
    {
        try {
            $sql = "SELECT * from profesional WHERE dni = :dniP";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniP', $dniP);
            $consulta->execute();

            $result = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //devolvemos el registro
        return $result;
    }
    /**
     * Borra un registro de la base de datos según su dni
     *  @return $count número de registros modificados
     */
    public static function borrarProfesional($dniP)
    {
        try {
            $sql = "DELETE FROM profesional WHERE dni = :dniP";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniP', $dniP);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    /**
     * Cambiar contraseña del profesional
     *  @return $count número de registros modificados
     */
    public static function cambiarContraProfesional($dniProf, $contraProf, $contraProfR)
    {



        if (!preg_match('`[a-z]`', $contraProf)) {
            $errores[] = "La clave debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`', $contraProf)) {
            $errores[] = "La clave debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`', $contraProf)) {
            $errores[] = "La clave debe tener al menos un caracter numérico";
        }

        if (empty($contraProfR)) {
            $errores[] = "Vuelva a escrbir la contraseña";
        }
        if ($contraProf == $contraProfR) {
        } else {
            $errores[] = "Las contraseñas no conciden";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
               
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña
                $pass_cifrado = password_hash($contraProf, PASSWORD_DEFAULT, array("cost" => 12));
                $sql = "UPDATE profesional SET  contrasenia = :con WHERE dni = :dni ";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dni', $dniProf);
                $consulta->bindParam(':con', $pass_cifrado);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
    /**
     * Busca resultados en la base de datos
     *
     * @return $result
     * 
     */
    public static function buscarUsuarios($search)
    {
        $vacio = "No hay resultados";

        if (!empty($search)) {
            try {
                $sql = "SELECT * FROM familia WHERE nombre LIKE '$search%'";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->execute();
                $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return $result;
        }
    }


    /**
     * 
     * Comprueba si existe el registro y en caso contrario lo añade
     *  @return $count número de registros modificados
     */
    public static function anadirEspecialidad($dniProfEsp, $esp, $sHab)
    {
        $contadorEsp = 0;
        try {
            //Se cifra la contraseña

            $sqlCons = "SELECT * FROM servicio_profesional";
            $consultaCons = DB::conectar()->prepare($sqlCons);
            $consultaCons->execute();
            while ($registro = $consultaCons->fetch(PDO::FETCH_ASSOC)) {

                //Como esta encriptado para saber si esta en la base de datos utilizo la funcion password_verify
                if ($dniProfEsp == $registro['dni_profesional'] and $esp == $registro['especialidad']) {
                    //Si son iguales quiero que me incremente la variable contador
                    $contadorEsp++;
                    //echo $contadorEsp;
                    //echo "Existe";
                } else {
                    //echo $contadorEsp;
                    //echo "No existe";
                }
            }
            // return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }



        if ($contadorEsp > 0) {

        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>No se ha añadido el regsitro</strong>
                <?php

                echo "<br><ul class='list-group list-group-flush'>";
                echo "<br><li class='list-group-item list-group-item-danger'>El profesional ya tiene asignada esa especialidad</li>";

                ?>
            </div>
        <?php
        } else {
            try {
               

                $sql = "INSERT into servicio_profesional (habilitacion, dni_profesional, especialidad) VALUES (:hab, :dniPEs, :esp)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':hab', $sHab);
                $consulta->bindParam(':dniPEs', $dniProfEsp);
                $consulta->bindParam(':esp', $esp);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    /**
     * Muestra las especialidades
     * @return $result
     */
    public static function verEspecialidad()
    {
        try {
            $sql = "SELECT * FROM servicio";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     * Inserta en tipo de espacialidad
     */

    public static function anadirTipoEspecialidad($tipoEsp)
    {

        try {


            $sql = "INSERT into servicio (especialidad) VALUES (:esp)";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':esp', $tipoEsp);
            $consulta->execute();
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**
     **Borar una especialidad de la base de datos segín su nombre
     * @param type $id nombre de la especialidad
     */
    public static function borrarEspecialidad($id)
    {
        try {
            $sql = "DELETE FROM servicio WHERE especialidad = :esp";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':esp', $id);
            $consulta->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    /**
     *Añade un usuario a la base de datos
     * @return $count número de registros modificados
     * 
     */

    public static function anadirUsuario($dniUsu, $nombreUsu, $apellidoUsu, $fechaNacUsu, $responsableUsu, $calleUsu, $numeroUsu, $pisoUsu, $letraUsu, $cpUsu, $provinciaUsu, $telefonoUsu, $correoUsu, $usuarioUsu, $contraUsu, $contraUsuR, $fechaAltaUsu, $fechaBajaUsu, $estadoUsu)
    {

        if (preg_match('/[0-9]{7,8}[A-Z]/', $dniUsu)) {
        } else {

            $errores[] = "Escriba un DNI válido";
        }
        if (empty($nombreUsu)) {
            $errores[] = "Debe de escribir el nombre del usuario";
        }
        if (empty($apellidoUsu)) {
            $errores[] = "Debe de escribir el apellido del usuario";
        }
        if (empty($fechaNacUsu)) {
            $errores[] = "Escrbia la fecha de nacimiento del usuario";
        }
        if (empty($calleUsu)) {
            $errores[] = "Debe de escribir la calle del usuario";
        }
        if (empty($numeroUsu) && !is_numeric($numeroUsu)) {
            $errores[] = "Debe de escribir el número de la calle del usuario";
        }
        if (empty($cpUsu) && !is_numeric($cpUsu)) {
            $errores[] = "Debe de escribir el CP del usuario";
        }
        if (empty($provinciaUsu)) {
            $errores[] = "Debe de escribir la provincia del usuario";
        }
        if (empty($telefonoUsu) && !is_numeric($telefonoUsu)) {
            $errores[] = "Debe de escribir el teléfono del usuario";
        }
        if (empty($correoUsu)) {
            $errores[] = "Escribe el correo electrónico del usuario";
        }
        if (!filter_var($correoUsu, FILTER_VALIDATE_EMAIL) || empty($correoUsu)) {
            $errores[] = "Debe de escribir un email con el siguiente formato: ejemplo@ejemplo.ejm";
        }

        if (empty($usuarioUsu)) {
            $errores[] = "Debe de escribir el usuario";
        }
        if (strlen($contraUsu) < 6) {
            $errores[] = "La clave debe tener al menos 6 caracteres";
        }
        if (strlen($contraUsu) > 16) {
            $errores[] = "La clave no puede tener más de 16 caracteres";
        }
        if (!preg_match('`[a-z]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos un caracter numérico";
        }

        if (empty($contraUsuR)) {
            $errores[] = "Vuelva a escrbir la contraseña";
        }
        if ($contraUsu == $contraUsuR) {
        } else {
            $errores[] = "Las contraseñas no conciden";
        }

        if (empty($fechaAltaUsu)) {
            $errores[] = "Escrbia una fecha de alta";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña
                $pass_cifrado = password_hash($contraUsu, PASSWORD_DEFAULT, array("cost" => 12));
                $sql = "INSERT into familia (dni, nombre, apellidos, fecha_nacimiento, responsable, calle, numero, piso, letra, cp, provincia, telefono, correo, usuario, contrasenia, fecha_alta, fecha_baja, estado) VALUES (:dni, :nom, :ape, :fec, :res, :calle, :num, :piso, :let, :cp, :pro, :tel, :cor, :usu, :con, :alt, :baj, :est)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dni', $dniUsu);
                $consulta->bindParam(':nom', $nombreUsu);
                $consulta->bindParam(':ape', $apellidoUsu);
                $consulta->bindParam(':fec', $fechaNacUsu);
                $consulta->bindParam(':res',  $responsableUsu);
                $consulta->bindParam(':calle', $calleUsu);
                $consulta->bindParam(':num', $numeroUsu);
                $consulta->bindParam(':piso', $pisoUsu);
                $consulta->bindParam(':let', $letraUsu);
                $consulta->bindParam(':cp', $cpUsu);
                $consulta->bindParam(':pro', $provinciaUsu);
                $consulta->bindParam(':tel', $telefonoUsu);
                $consulta->bindParam(':cor', $correoUsu);
                $consulta->bindParam(':usu', $usuarioUsu);
                $consulta->bindParam(':con', $pass_cifrado);
                $consulta->bindParam(':alt', $fechaAltaUsu);
                $consulta->bindParam(':baj', $fechaBajaUsu);
                $consulta->bindParam(':est', $estadoUsu);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    /**
     * Muestra todos los registro de los usuarios
     * @return $result
     */
    public static function verUsuario()
    {
        try {
            $sql = "SELECT * FROM familia order by nombre";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     **Obtiene los registros del usuario seleccionado
     * @param type $dni código usuario
     * @return $result
     */
    public static function obtenerUsuario($dniU)
    {
        try {
            $sql = "SELECT * from familia WHERE dni = :dniU";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniU', $dniU);
            $consulta->execute();

            $result = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //devolvemos el registro
        return $result;
    }


    /**
     * Actualiza el registro de un usuario
     * 
     * @return $count número de registros modificados
     */
    public static function actualizarUsuario($dniUsu, $nombreUsu, $apellidoUsu, $fechaNacUsu, $responsableUsu, $calleUsu, $numeroUsu, $pisoUsu, $letraUsu, $cpUsu, $provinciaUsu, $telefonoUsu, $correoUsu, $usuarioUsu, $fechaAltaUsu, $fechaBajaUsu, $estadoUsu)
    {


        if (empty($nombreUsu)) {
            $errores[] = "Debe de escribir el nombre del usuario";
        }
        if (empty($apellidoUsu)) {
            $errores[] = "Debe de escribir el apellido del usuario";
        }
        if (empty($fechaNacUsu)) {
            $errores[] = "Escrbia la fecha de nacimiento del usuario";
        }
        if (empty($calleUsu)) {
            $errores[] = "Debe de escribir la calle del usuario";
        }
        if (empty($numeroUsu) && !is_numeric($numeroUsu)) {
            $errores[] = "Debe de escribir el número de la calle del usuario";
        }
        if (empty($cpUsu) && !is_numeric($cpUsu)) {
            $errores[] = "Debe de escribir el CP del usuario";
        }
        if (empty($provinciaUsu)) {
            $errores[] = "Debe de escribir la provincia del usuario";
        }
        if (empty($telefonoUsu) && !is_numeric($telefonoUsu)) {
            $errores[] = "Debe de escribir el teléfono del usuario";
        }
        if (empty($correoUsu)) {
            $errores[] = "Escribe el correo electrónico del usuario";
        }
        if (!filter_var($correoUsu, FILTER_VALIDATE_EMAIL) || empty($correoUsu)) {
            $errores[] = "Debe de escribir un email con el siguiente formato: ejemplo@ejemplo.ejm";
        }

        if (empty($usuarioUsu)) {
            $errores[] = "Debe de escribir el usuario";
        }

        if (empty($fechaAltaUsu)) {
            $errores[] = "Escrbia una fecha de alta";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {


               
                $sqlUsu = "UPDATE familia SET nombre = :nom, apellidos = :ape, fecha_nacimiento = :fec, responsable = :res, calle = :cal , numero = :num,  piso = :piso,  letra = :let, cp = :cp, provincia = :prov, telefono = :tel, correo = :cor, usuario = :usu, fecha_alta = :alt, fecha_baja = :baj, estado = :est WHERE dni = :dni";
                $consulta = DB::conectar()->prepare($sqlUsu);
                $consulta->bindParam(':dni', $dniUsu);
                $consulta->bindParam(':nom', $nombreUsu);
                $consulta->bindParam(':ape', $apellidoUsu);
                $consulta->bindParam(':fec', $fechaNacUsu);
                $consulta->bindParam(':res',  $responsableUsu);
                $consulta->bindParam(':cal', $calleUsu);
                $consulta->bindParam(':num', $numeroUsu);
                $consulta->bindParam(':piso', $pisoUsu);
                $consulta->bindParam(':let', $letraUsu);
                $consulta->bindParam(':cp', $cpUsu);
                $consulta->bindParam(':prov', $provinciaUsu);
                $consulta->bindParam(':tel', $telefonoUsu);
                $consulta->bindParam(':cor', $correoUsu);
                $consulta->bindParam(':usu', $usuarioUsu);
                $consulta->bindParam(':alt', $fechaAltaUsu);
                $consulta->bindParam(':baj', $fechaBajaUsu);
                $consulta->bindParam(':est', $estadoUsu);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    /**
     * Muestra los datos de un usuario para borrar su registro
     * @param type $dniU dni del usuario
     * @return $result
     */
    public static function obtenerBorrarUsuario($dniU)
    {
        try {
            $sql = "SELECT * from familia WHERE dni = :dniU";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniU', $dniU);
            $consulta->execute();

            $result = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //devolvemos el registro
        return $result;
    }

    /**
     * Borrar el registro de un usuario
     * @param type $dniU dni del usuario
     * @return $count número de registros modificados
     */
    public static function borrarUsuario($dniU)
    {
        try {
            $sql = "DELETE FROM familia WHERE dni = :dniU";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniU', $dniU);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    /**
     * Cambiar contraseña del profesional
     *  @return $count número de registros modificados
     */
    public static function cambiarContraUsuario($dniUsu, $contraUsu, $contraUsuR)
    {



        if (!preg_match('`[a-z]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`', $contraUsu)) {
            $errores[] = "La clave debe tener al menos un caracter numérico";
        }

        if (empty($contraUsuR)) {
            $errores[] = "Vuelva a escrbir la contraseña";
        }
        if ($contraUsu == $contraUsuR) {
        } else {
            $errores[] = "Las contraseñas no conciden";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña
                $pass_cifrado = password_hash($contraUsu, PASSWORD_DEFAULT, array("cost" => 12));
                $sql = "UPDATE familia SET  contrasenia = :con WHERE dni = :dni ";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dni', $dniUsu);
                $consulta->bindParam(':con', $pass_cifrado);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

/**
 * Añade el horario a la base de datos
 *  @return $count número de registros modificados
 */
    public static function anadirHorario($horaProf, $horaFam, $horaDia, $horaH, $horaTipo)
    {
        try {


            $sql = "INSERT into horario (dni_familia, dni_profesional, dia, hora, tipo) VALUES (:dniF, :dniP, :dia, :hora, :tipo)";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniF', $horaFam);
            $consulta->bindParam(':dniP', $horaProf);
            $consulta->bindParam(':dia', $horaDia);
            $consulta->bindParam(':hora', $horaH);
            $consulta->bindParam(':tipo', $horaTipo);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
/**
 * Muestra los dato de la tabla horarios con el nombre y apeellidos de los usuarios y profesionales
 * @return $result
 */
    public static function verHorario()
    {
        try {
            $sql = "SELECT horario.id_horario AS idH, horario.dni_familia, horario.dia, horario.hora, horario.tipo, familia.nombre AS nombreF,familia.apellidos AS apellidosF ,familia.dni, profesional.nombre AS nombreP,profesional.apellido AS apellidoP, profesional.dni FROM horario INNER JOIN familia ON horario.dni_familia = familia.dni
            JOIN profesional ON horario.dni_profesional = profesional.dni order by horario.dia";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     *Borar horario de la base de datos según su id
     * @param type $id id del horario
     * @return $count número de registros modificados
     */
    public static function borrarHorario($id)
    {
        try {
            $sql = "DELETE FROM horario WHERE id_horario = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    /**
     * Añade un registro de materiales a la base de datos
     * @return $count número de registros modificados
     */
    public static function anadirMaterial($nombreMat, $descripcionMat, $fechaMat)
    {

        if (empty($nombreMat)) {
            $errores[] = "Debe de escribir el nombre del material";
        }
        if (empty($descripcionMat)) {
            $errores[] = "Debe de escribir una descripción del material";
        }
        if (empty($fechaMat)) {
            $errores[] = "Escrbia la fecha de compra";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
               

                $sql = "INSERT into material (nombre, descripcion, fecha) VALUES (:nom, :descr, :fec)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':nom', $nombreMat);
                $consulta->bindParam(':descr', $descripcionMat);
                $consulta->bindParam(':fec', $fechaMat);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
    /**
     * Muestrar los materiales
     * @return $result
     */

    public static function verMaterial()
    {
        try {
            $sql = "SELECT * FROM material order by fecha";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     **Borar material de la base de datos según su id
     * @param type $idMat id del horario
     * @return $count número de registros modificados
     */
    public static function borrarMaterial($idMat)
    {
        try {
            $sql = "DELETE FROM material WHERE id_material = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $idMat);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    /**
     * Añadir un nuevo pago
     * @return $count número de registros modificados
     * 
     */

    public static function anadirPago($pagoFamilia, $pagoTipo, $pagoCantidad, $pagoNum, $pagoMet, $pagoFecha)
    {

        if (empty($pagoCantidad) && !is_float($pagoCantidad)) {
            $errores[] = "Debe de escribir una cantidad";
        }
        if (empty($pagoNum) && !is_numeric($pagoNum)) {
            $errores[] = "Debe de escribir el número de sesiones";
        }
        if (empty($pagoFecha)) {
            $errores[] = "Escrbia la fecha del ingreso";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
               

                $sql = "INSERT into pago (dni_familia, concepto, cantidad, numero, metodo, fecha) VALUES (:dniF, :conc, :cant, :num, :met, :fec)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':dniF', $pagoFamilia);
                $consulta->bindParam(':conc', $pagoTipo);
                $consulta->bindParam(':cant', $pagoCantidad);
                $consulta->bindParam(':num', $pagoNum);
                $consulta->bindParam(':met', $pagoMet);
                $consulta->bindParam(':fec', $pagoFecha);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

/**
 * Muestra los registros de la tabla pagos según la fecha
 *  @return $result
 */
    public static function verPagos()
    {
        try {
            $sql = "SELECT pago.id_pago AS idP, pago.dni_familia, pago.concepto, pago.cantidad, pago.numero, pago.metodo, pago.fecha, familia.nombre AS nombreF, familia.apellidos AS apellidosF ,familia.dni FROM pago INNER JOIN familia ON pago.dni_familia = familia.dni
         order by pago.fecha";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }


    /**
     *Borrar pago de la base de datos según su id
     * @param type $id id del horario
     * @return $count número de registros modificados
     */
    public static function borrarPago($id)
    {
        try {
            $sql = "DELETE FROM pago WHERE id_pago = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    /**
     * Busca resultados en la base de datos
     * @param type $searchS palabla de búsqueda
     * @return $result
     * 
     */
    public static function buscarSesiones($searchS)
    {

        if (!empty($searchS)) {
            try {
                $sql = "SELECT registro.id_registro AS idS, registro.dni_profesional, registro.dni_familia, registro.fecha, registro.hora, familia.dni, familia.nombre AS nombreF, familia.apellidos AS apellidosF, profesional.nombre AS nombreP,profesional.apellido AS apellidoP, profesional.dni FROM registro INNER JOIN familia ON registro.dni_familia = familia.dni
                JOIN profesional ON registro.dni_profesional = profesional.dni WHERE profesional.nombre LIKE '$searchS%'";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->execute();
                $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return $result;
        }
    }

    /**
     * Mostrar el horario de cada profesional
     *  @return $result
     */
    public static function verHorarioProfesional($usuarioP)
    {
        
        try {
            $sql = "SELECT profesional.dni AS dniP, profesional.usuario AS usuP, horario.dni_familia AS dniF, horario.dni_profesional, horario.dia, horario.hora, horario.tipo, familia.dni AS dniFa, familia.nombre AS famN, familia.apellidos As famA  FROM profesional INNER JOIN horario ON profesional.dni = horario.dni_profesional
            JOIN familia ON horario.dni_familia = familia.dni WHERE profesional.usuario LIKE '$usuarioP%'";
            $consulta = DB::conectar()->prepare($sql);
            // $consulta->bindParam(':usu', $usuProfesional);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     * Añade un registr de sesión en la tabla registro
     * @return $count número de registros modificados
     */
    public static function anadirSesion($sesionUsuProf, $sesionDniFam, $sesionFec, $sesionHora)
    {


        try {


            $sql = "INSERT into registro (dni_profesional, dni_familia, fecha, hora) VALUES (:dniP, :dniF, :fech, :hora)";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniP', $sesionUsuProf);
            $consulta->bindParam(':dniF',  $sesionDniFam);
            $consulta->bindParam(':fech', $sesionFec);
            $consulta->bindParam(':hora', $sesionHora);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    /**
     * Mostrar el horario de cada profesional
     *  @return $result
     */
    public static function verDniProfesional($sesionUsuPD)
    {
        //$usuProfesional = $usuarioP;
        try {
            $sql = "SELECT profesional.dni AS dniP, profesional.usuario AS usuP, profesional.nombre AS nombreP, profesional.apellido AS apellidoP, horario.dni_familia AS dniF, horario.dni_profesional, familia.dni AS dniFa, familia.nombre AS famN, familia.apellidos As famA  FROM profesional INNER JOIN horario ON profesional.dni = horario.dni_profesional
        JOIN familia ON horario.dni_familia = familia.dni WHERE profesional.usuario LIKE '$sesionUsuPD%'";
            $consulta = DB::conectar()->prepare($sql);
           
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }
    /**
     * Muestra los registros de la sesiones según el ususario
     *  @return $result
     */

    public static function verSesiones($sesionUsuPD)
    {
        try {
            $sql = "SELECT profesional.dni, profesional.usuario, registro.id_registro AS idR, registro.dni_profesional AS dniP, registro.dni_familia AS dniF, registro.fecha, registro.hora, familia.nombre AS nombreF,familia.apellidos AS apellidosF ,familia.dni FROM registro INNER JOIN profesional ON registro.dni_profesional = profesional.dni
        JOIN familia ON registro.dni_familia = familia.dni WHERE profesional.usuario LIKE '$sesionUsuPD%'";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }


    /**
     *Borrar sesión de la base de datos según su id
     * @param type $id id de la sesión
     * @return $count número de registros modificados
     */
    public static function borrarSesion($id)
    {
        try {
            $sql = "DELETE FROM registro WHERE id_registro = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

/**
 * Añade un registro a la tabla observación
 * @return $count número de registros modificados
 */

    public static function anadirObservacion($ObservacionUsuProf, $ObservacionDniFam, $ObservacionFec, $ObservacionCom)
    {


        try {


            $sql = "INSERT into observacion (dni_profesional, dni_familia, fecha, comentario) VALUES (:dniP, :dniF, :fech, :com)";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':dniP', $ObservacionUsuProf);
            $consulta->bindParam(':dniF',  $ObservacionDniFam);
            $consulta->bindParam(':fech', $ObservacionFec);
            $consulta->bindParam(':com', $ObservacionCom);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
/**
 * Muesta los registro de la tabla observación y los datos de usuaios y profesionales
 *  @return $result
 */
    public static function verObservaciones($observacionUsuPD)
    {
        try {
            $sql = "SELECT profesional.dni, profesional.usuario, observacion.ID_observacion AS idO, observacion.dni_profesional AS dniP, observacion.dni_familia AS dniF, observacion.fecha, observacion.comentario, familia.nombre AS nombreF,familia.apellidos AS apellidosF ,familia.dni FROM observacion INNER JOIN profesional ON observacion.dni_profesional = profesional.dni
        JOIN familia ON observacion.dni_familia = familia.dni WHERE profesional.usuario LIKE '$observacionUsuPD%'";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }


    /**
     *Borrar sesión de la base de datos según su id
     * @param type $id id de la sesión
     * @return $count número de registros modificados
     */
    public static function borrarObservacion($id)
    {
        try {
            $sql = "DELETE FROM observacion WHERE ID_observacion = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

/**
 * Muestrta el horario de cada usuario
 *  @return $result
 */
    public static function verHorarioUsu($usuarioUsu)
    {
        try {
            $sql = "SELECT profesional.dni, profesional.nombre AS nombreP, profesional.apellido AS apellidoP, horario.id_horario AS idH, horario.dni_familia AS dniF, horario.dni_profesional AS dniP, horario.dia, horario.hora, horario.tipo, familia.nombre AS nombreF,familia.apellidos AS apellidosF ,familia.dni FROM horario INNER JOIN profesional ON horario.dni_profesional = profesional.dni
            JOIN familia ON horario.dni_familia = familia.dni WHERE familia.usuario LIKE '$usuarioUsu%'";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }
/**
 * Muestra las observaciones de cada usuario
 *  @return $result
 */
    public static function verObservacionesUsu($usuarioUsu)
    {
        try {
            $sql = "SELECT profesional.dni, profesional.nombre AS nombreP, profesional.apellido AS apellidoP, observacion.ID_observacion AS idO, observacion.dni_familia AS dniF, observacion.dni_profesional AS dniP, observacion.fecha, observacion.comentario, familia.nombre AS nombreF,familia.apellidos AS apellidosF ,familia.dni FROM observacion INNER JOIN profesional ON observacion.dni_profesional = profesional.dni
            JOIN familia ON observacion.dni_familia = familia.dni WHERE familia.usuario LIKE '$usuarioUsu%'";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

/**
 * Muestra los datos de la tabla familia
 *  @return $result
 */
    public static function verMiUsuario($usuarioUsu)
    {
        try {
            $sql = "SELECT * FROM familia WHERE usuario = '$usuarioUsu'";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }
/**
 * Actualiza los datos de la tabla familia
 * @return $count número de registros modificados
 */
    public static function actualizarUsuarioU($dniUsuU, $nombreUsuU, $apellidoUsuU, $fechaNacUsuU, $responsableUsuU, $calleUsuU, $numeroUsuU, $pisoUsuU, $letraUsuU, $cpUsuU, $provinciaUsuU, $telefonoUsuU, $correoUsuU)
    {


        if (empty($nombreUsuU)) {
            $errores[] = "Debe de escribir el nombre del usuario";
        }
        if (empty($apellidoUsuU)) {
            $errores[] = "Debe de escribir el apellido del usuario";
        }
        if (empty($fechaNacUsuU)) {
            $errores[] = "Escrbia la fecha de nacimiento del usuario";
        }
        if (empty($calleUsuU)) {
            $errores[] = "Debe de escribir la calle del usuario";
        }
        if (empty($numeroUsuU) && !is_numeric($numeroUsuU)) {
            $errores[] = "Debe de escribir el número de la calle del usuario";
        }
        if (empty($cpUsuU) && !is_numeric($cpUsuU)) {
            $errores[] = "Debe de escribir el CP del usuario";
        }
        if (empty($provinciaUsuU)) {
            $errores[] = "Debe de escribir la provincia del usuario";
        }
        if (empty($telefonoUsuU) && !is_numeric($telefonoUsuU)) {
            $errores[] = "Debe de escribir el teléfono del usuario";
        }
        if (empty($correoUsuU)) {
            $errores[] = "Escribe el correo electrónico del usuario";
        }
        if (!filter_var($correoUsuU, FILTER_VALIDATE_EMAIL) || empty($correoUsuU)) {
            $errores[] = "Debe de escribir un email con el siguiente formato: ejemplo@ejemplo.ejm";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {


                //$sqlUsu = "UPDATE familia SET nombre = '$nombreUsu' WHERE dni = '$dniUsu'";
                $sqlUsu = "UPDATE familia SET nombre = :nom, apellidos = :ape, fecha_nacimiento = :fec, responsable = :res, calle = :cal , numero = :num,  piso = :piso,  letra = :let, cp = :cp, provincia = :prov, telefono = :tel, correo = :cor WHERE dni = :dni";
                $consulta = DB::conectar()->prepare($sqlUsu);
                $consulta->bindParam(':dni', $dniUsuU);
                $consulta->bindParam(':nom', $nombreUsuU);
                $consulta->bindParam(':ape', $apellidoUsuU);
                $consulta->bindParam(':fec', $fechaNacUsuU);
                $consulta->bindParam(':res',  $responsableUsuU);
                $consulta->bindParam(':cal', $calleUsuU);
                $consulta->bindParam(':num', $numeroUsuU);
                $consulta->bindParam(':piso', $pisoUsuU);
                $consulta->bindParam(':let', $letraUsuU);
                $consulta->bindParam(':cp', $cpUsuU);
                $consulta->bindParam(':prov', $provinciaUsuU);
                $consulta->bindParam(':tel', $telefonoUsuU);
                $consulta->bindParam(':cor', $correoUsuU);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
/**
 * Muestra los datos de la tabla clinica
 * @return $result
 */
    public static function  obtenerDatosEmpresa()
    {
        try {
            $sql = "SELECT * FROM clinica";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

/**
 * Actualiza los datos de la tabla clinica
 *  @return $count número de registros modificados
 */

    public static function actualizarDatosEmpresa($cifE, $nombreE, $directorE)
    {


        if (empty($cifE)) {
            $errores[] = "Debe de escribir el CIF de la empresa";
        }
        if (empty($nombreE)) {
            $errores[] = "Debe de escribir el nombre de la empresa";
        }




        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {


                //$sqlUsu = "UPDATE familia SET nombre = '$nombreUsu' WHERE dni = '$dniUsu'";
                $sqlUsu = "UPDATE clinica SET CIF = :cif, nombre = :nom, director = :direc";
                $consulta = DB::conectar()->prepare($sqlUsu);
                $consulta->bindParam(':cif', $cifE);
                $consulta->bindParam(':nom', $nombreE);
                $consulta->bindParam(':direc', $directorE);

                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
/**
 * Obtiene los datos de la tabla director
 * @return $result
 */
    public static function  obtenerDatosDirector()
    {
        try {
            $sql = "SELECT * FROM director";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }
/**
 * Acutaliza los datos de la tabla director
 * @return $count número de registros modificados
 */
    public static function actualizarDatosDirector($nombreD, $apellidoD, $calleD, $numeroD, $pisoD, $letraD, $cpD, $provinciaD, $telefonoD, $usuarioD)
    {



        if (empty($apellidoD)) {
            $errores[] = "Debe de escribir sus apellidos";
        }
        if (empty($calleD)) {
            $errores[] = "Debe de escribir su calle";
        }
        if (empty($numeroD)) {
            $errores[] = "Debe de escribir su número";
        }
        if (empty($cpD)) {
            $errores[] = "Debe de escribir su CP";
        }
        if (empty($provinciaD)) {
            $errores[] = "Debe de escribir su Provincia";
        }
        if (empty($telefonoD)) {
            $errores[] = "Debe de escribir su teléfono";
        }
        if (empty($usuarioD)) {
            $errores[] = "Debe de escribir sus usuario";
        }




        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
              
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {



                $sqlUsu = "UPDATE director SET nombre = :nom, apellidos = :ape, calle = :cal, numero = :num, piso = :piso, letra = :let, cp = :cp, Provincia = :prov, telefono = :tel, usuario = :usu";
                $consulta = DB::conectar()->prepare($sqlUsu);
                $consulta->bindParam(':nom', $nombreD);
                $consulta->bindParam(':ape', $apellidoD);
                $consulta->bindParam(':cal', $calleD);
                $consulta->bindParam(':num', $numeroD);
                $consulta->bindParam(':piso', $pisoD);
                $consulta->bindParam(':let', $letraD);
                $consulta->bindParam(':cp', $cpD);
                $consulta->bindParam(':prov', $provinciaD);
                $consulta->bindParam(':tel', $telefonoD);
                $consulta->bindParam(':usu', $usuarioD);

                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
    /**
     * Cambiar contraseña del profesional
     * @return $count número de registros modificados
     */
    public static function cambiarContraDir($contraD, $contraDR)
    {



        if (!preg_match('`[a-z]`', $contraD)) {
            $errores[] = "La clave debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`', $contraD)) {
            $errores[] = "La clave debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`', $contraD)) {
            $errores[] = "La clave debe tener al menos un caracter numérico";
        }

        if (empty($contraDR)) {
            $errores[] = "Vuelva a escrbir la contraseña";
        }
        if ($contraD == $contraDR) {
        } else {
            $errores[] = "Las contraseñas no conciden";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
        <?php
        } else {
            try {
                //Se cifra la contraseña
                $pass_cifrado = password_hash($contraD, PASSWORD_DEFAULT, array("cost" => 12));
                $sql = "UPDATE director SET  contrasenia = :con";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':con', $pass_cifrado);
                $consulta->execute();
                $count = $consulta->rowCount();
                return $count;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

/**
 * Añade un registro a la tabla gasto
 * @return true
 */
    public static function anadirGasto($conceptoGast, $cantidadGast, $fechaGast, $cifGast)
    {

        if (empty($conceptoGast)) {
            $errores[] = "Debe de escribir el concepto del gasto";
        }
        if (empty($cantidadGast) && !is_float($cantidadGast)) {
            $errores[] = "Debe de escribir una cantidad";
        }
        if (empty($fechaGast)) {
            $errores[] = "Escrbia la fecha del gasto";
        }


        if (isset($errores)) {
        ?>
            <div class="alert alert-danger">
                <!-- &times; esto es una x -->
                <!-- close colocarlo en una esquina -->
                <!-- data-dismiss descaparece cuando le das -->
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Se han encontrado los siguientes errores:</strong>
                <?php
                foreach ($errores as $error) {
                    echo "<br><ul class='list-group list-group-flush'>";
                    echo "<br><li class='list-group-item list-group-item-danger'>$error</li>";
                }
                ?>
            </div>
<?php
        } else {
            try {
                //Se cifra la contraseña

                $sql = "INSERT into gasto (concepto, cantidad, fecha, cif_clinica) VALUES (:conc, :cant, :fech, :cif)";
                $consulta = DB::conectar()->prepare($sql);
                $consulta->bindParam(':conc', $conceptoGast);
                $consulta->bindParam(':cant', $cantidadGast);
                $consulta->bindParam(':fech', $fechaGast);
                $consulta->bindParam(':cif', $cifGast);
                $consulta->execute();
                return true;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
/**
 * Muestra los datos de la tabla gasto
 * @return $result
 */
    public static function verGastos()
    {
        try {
            $sql = "SELECT * FROM gasto";

            $consulta = DB::conectar()->prepare($sql);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    /**
     *Borrar gasto de la base de datos según su id
     * @param type $id id del horario
     * @return $count número de registros modificados
     */
    public static function borrarGasto($id)
    {
        try {
            $sql = "DELETE FROM gasto WHERE id_gasto = :id";
            $consulta = DB::conectar()->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $count = $consulta->rowCount();
            return $count;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    
}
