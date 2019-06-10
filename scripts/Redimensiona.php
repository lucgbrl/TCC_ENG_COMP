<?php
ini_set("memory_limit", "32M");
class Redimensiona{
	
	public function Redimensionar($imagem, $largura, $pasta){
		
		$name = md5(uniqid(rand(),true));
		
		if ($imagem['type']=="image/jpeg"){
			$img = imagecreatefromjpeg($imagem['tmp_name']);
		}else if ($imagem['type']=="image/gif"){
			$img = imagecreatefromgif($imagem['tmp_name']);
		}else if ($imagem['type']=="image/png"){
			$img = imagecreatefrompng($imagem['tmp_name']);
		}else if ($imagem['type']=="image/jpg"){
			$img = imagecreatefromjpg($imagem['tmp_name']);
		}
		$x   = imagesx($img);
		$y   = imagesy($img);
		$altura_da_imagem = ($largura * $y)/$x;
		
		$nova = imagecreatetruecolor($largura, $altura_da_imagem);
		imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura_da_imagem, $x, $y);
		
		if ($imagem['type']=="image/jpeg")
		{
			$local="$pasta/$name".".jpg";
			imagejpeg($nova, $local);
		} else if ($imagem['type']=="image/gif")
		{
			$local="$pasta/$name".".gif";
			imagejpeg($nova, $local);
		} else if ($imagem['type']=="image/png")
		{
			$local="$pasta/$name".".png";
			imagejpeg($nova, $local);
		}else if ($imagem['type']=="image/jpg")
		{
			$local="$pasta/$name".".jpg";
			imagejpeg($nova, $local);
		}
		imagedestroy($img);
		imagedestroy($nova);	
		
		return $local;
	}
}
?>