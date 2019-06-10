<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set("memory_limit", "32M");
include_once ("scripts/Redimensiona.php");

if (isset($_POST['acao']) && $_POST['acao']=="cadastrar"){

	$foto = $_FILES['foto'];
	$redim = new Redimensiona();
	$src=$redim->Redimensionar($foto, 350, "static");

}

include('head.php');
include('nav.php');

?>
<style>
h2{
    font-size:100px !important;
}
</style>
<section class = "index">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<h2 class = "text-white">Galeria de imagens</h2>
				<p class = "text-white">Produzida utilizando a linguagem PHP 7 e o Servidor Apache 2.4. Clique no botão abaixo para acessar a galeria.</p>
				<a class = "btn btn-warning">Acessar galeria de imagens<a>
			</div>
		</div>
	</div>
</section>
<div class = "container">
	<div class = "row">
		<div class = "col-md-6">
			<h1 class = "heading-1">Upload de imagem</h1>

			<p>Utilize o campo abaixo para selecionar a imagem para envio. Ela será redimensionada e enviada para o servidor. Após selecionar clique em enviar.</p>
			<form method="post" action="" enctype="multipart/form-data">

			<div class = "custom-file mb-3">
				<input type="file" name="foto" value = "Enviar imagem" class = "custom-file-input" />
				<label class="custom-file-label" for="customFile"><i class = "fa fa-camera-retro"></i> Escolher arquivo</label>
			</div>

			<button class = "btn btn-outline-primary" type="submit"><i class = "fa fa-camera"></i> Enviar</button>
			<button class = "btn btn-outline-danger" type="submit"><i class = "fa fa-trash"></i> Cancelar</button>
			<input class = "btn btn-success" type="hidden" name="acao" value="cadastrar" />
			</form>
			<?php
			if (isset($_POST['acao']) && $_POST['acao']=="cadastrar"){
				echo "<img src=\"$src\">";
			}
			?>
		</div>
	</div>
</div>
<div class = "container">
	<div class = "row">
	<div class = "col-md-6 p-5">
			<h2>Features</h2>
		</div>
		<div class = "col-md-6 p-5">
			<div class = "twitter">
				<h3>Website construído utilizando PHP</h3>
				<i class = "fab fa-2x fa-html5"></i>
				<i class = "fab fa-2x fa-css3-alt"></i>
				<i class = "fab fa-2x fa-php"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
			<br><br>
			<div class = "twitter">
				<h3>Aplicativo construído com Java & Kotlin</h3>
				<i class = "fab fa-2x fa-android"></i>
				<i class = "fab fa-2x fa-java"></i>
				<i class = "fab fa-2x fa-github"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
			<br><br>
			<div class = "twitter">
				<h3>Android OS</h3>
				<i class = "fab fa-2x fa-github"></i>
				<i class = "fab fa-2x fa-twitter"></i>
				<i class = "fab fa-2x fa-facebook"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
		</div>
	</div>
</div>

<section class = "container ">
        <div class ="row">
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-instagram"></i></li>
                    <li><h3>Social</h3></li>
                    <li>Manuais</li>
                    <li>Cursos</li>
                    <li>Tutoriais</li>
                </ul>
            </div>
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-whatsapp"></i></li>
                    <li><h3> Canais</h3></li>
                    <li>Updates & Newsletter</li>
                    <li>Anúncios de vagas</li>

                </ul>
            </div>
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-vuejs"></i></li>
                    <li><h3>Notícias</h3></li>
                    <li>Assinar Newsletter</li>
                    <li>Trabalhe conosco</li>
                    <li>Estágio</li>
                    <li>Pesquisa & Extensão</li>
                </ul>
            </div>
        </div>
      </section>

    <?php include 'pages/foo.php'; ?>
