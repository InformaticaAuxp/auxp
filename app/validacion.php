<?php 
if (!empty($_POST)) {/*#1*/
              
    require('db/conexion.php');
     
    

     $us=$_POST["user"];                   
     $password=$_POST["pass"]; 

      
            $records = mysqli_query($connect, "select  U.IDUSUARIO AS IDUSUARIO, U.NOMBRE AS NOMBRE, AES_DECRYPT(U.CORREO, '123asd4') AS CORREO, AES_DECRYPT(U.PASSWORD, '1234') AS PASSWORD, T.IDTIPOUSUARIO AS IDTIPOUSUARIO, T.NOMBRE AS TIPOUSERNAME, U.FECHAALTA AS FECHAALTA, U.IDESTADO AS IDESTADO from usuario U INNER JOIN tipo_usuario T ON U.IDTIPOUSUARIO = T.IDTIPOUSUARIO where IDUSUARIO = '$us'");
            mysqli_data_seek($records,0); 
            $reg = mysqli_fetch_array($records);
            $user_=$reg['IDUSUARIO'];
            $nombre=$reg['NOMBRE'];
            $correo=$reg['CORREO'];
            $tipousuario=$reg['IDTIPOUSUARIO'];
            $tipousuarionom=$reg['TIPOUSERNAME'];
            $fechainicio=$reg['FECHAALTA'];
            $estadousuario=$reg['IDESTADO'];
            

                 
            
             if($reg<>null){/*#2*/
                if ($reg['PASSWORD']<>$password) {/*#3*/
                    header('location:'.$url2);
         /*#3*/ }else{ /*#3*/
                    if ($estadousuario=='I') {/*#4*/
                        header('location:'.$url3);
                /*#4*/ } elseif ($estadousuario=='S') {/*#5*/
                        header('location:'.$url4);
                /*#5*/ }elseif ($estadousuario=='A') {/*#6*/ 
                
                session_start();

                $_SESSION['GNOMBRE'] = $nombre;
                $_SESSION['GUSER'] = $user_;
                $_SESSION['GTUSUARIO'] = $tipousuario;
                $_SESSION['GTUSUARIONAME'] = $tipousuarionom;
                $_SESSION['GFECHA'] = $fechainicio;
                 $_SESSION['GMAIL'] = $correo;
                $_SESSION['TEMP'] = time();                
                             
 				header('location:'.$url0.'dashboard.php');
                /*#6*/}
             /*#3*/ }
        /*#2*/}else {/*#2*/
                header('location:'.$url1);
        /*#2*/}


    /*#1*/}else{/*#1*/
               header('location:'.$url0.'index.php');
    /*#1*/}       




?>