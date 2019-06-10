<?php

    $dir = 'uploads';
    $allowed = array('jpg', 'jpeg', 'png', 'gif', 'pdf');

    if(id_dir($dir))
    {
        $files = scandir($dir)
        
        for($i  = 0; $i< count($files); $i++)
        {
            if($files[$i] != '.' && $files[$i] != '..')
            {
                echo 'File Name ->'.$files[$i].'<br>';
                $file = pathinfo($files[$i]);
                $extension = $file['allowed'];

                echo 'file extension'.$extension;
                echo '<img src = '.$dir$files[$i].' style = "width=150px"><br>';
            }
        }
    }
?>