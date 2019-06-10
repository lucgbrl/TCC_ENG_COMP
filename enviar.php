<?php
    error_reporting(E_ALL & ~E_NOTICE);

    if(isset($_POST['submit']))
    {
        #code...
        #informações sobre o arquivo
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt)); #png or PNG
        
        $allowed = array('jpg', 'jpeg', 'png', 'gif', 'pdf');

        if(in_array($fileActualExt, $allowed))
        {
           #code ... 
           echo '';
           if($fileError === 0)
           {
               #code ... Caso haja realmente um erro no arquivo
                if($fileSize < 3072000)
                {
                    #code...
                    $fileNameNew = uniqid('', true).'.'.$fileActualExt; #...Não sobreescreve imagens já existentes com o mesmo nome no servidor
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header('Location: moto.html?upload_success');
                } else {
                    #code ...
                    echo 'Imagem muito grande!';
                }
           } else {
            echo 'Erro ao enviar a imagem para o servidor!';   
           }

        } else {
            #code
            echo 'Você não pode enviar imagens deste tipo!';
        }
    }   

?>