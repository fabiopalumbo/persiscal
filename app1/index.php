
 <?php   
     require_once "UsuariosModelo.php"; 

    $usuarioModel = new usuariosModelo(); 
    $a_users = $usuarioModel->get_users(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    Apellido 
                </td>
                <td> 
                    Email 
                </td> 
                <td> 
                    Descripcion 
                </td> 
                <td> 
                    TimeModified 
                </td> 
            </tr>

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['apellido']; ?></td>
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['description']; ?></td> 
		<td><?php echo $row['timemodified']; ?></td> 
            </tr>
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 