<section class = "container-fluid text-secondary p-5 mb-3" >
  <div class ="row">
      <div class = "col-md-3">
          <ul>
              <li><img  src = "img/brasao.png" width="100%"></li>
          </ul>
      </div>
      <div class = "col-md-2">
          <ul>
              <li><h3><b>Produtos</b></h3></li>
              <li>Manuais</li>
              <li>Guias de uso</li>
              <li>Tutoriais</li>
          </ul>
      </div>
      <div class = "col-md-2">
          <ul>
              <li><h3><b>Recursos</b></h3></li>
              <li>Updates & Newsletter</li>
              <li>Anúncios de vagas</li>
              <li>Updates & Newsletter</li>
              <li>Anúncios de vagas</li>
              <li>Updates & Newsletter</li>
              <li>Manuais</li>
              <li>Cursos</li>
              <li>Tutoriais</li>
          </ul>
      </div>
      <div class = "col-md-2">
          <ul>
              <li><h3><b>Notícias</b></h3></li>
              <li>Assinar Newsletter</li>
              <li>Trabalhe conosco</li>
              <li>Pesquisa & Extensão</li>
          </ul>
      </div>
      <div class = "col-md-2">
          <ul>
              <li><h3><b>Santos & Workers</b></h3></li>
              <li>Computação em Nuven</li>
              <li>Tecnologias Web</li>
              <li>Assistentes de Voz</li>
              <li>Realidade Aumentada</li>
              <li>Realidade Virtual</li>
              <li>Android OS</li>
              <li>Apple iOS </li>
              <li>E-commerces</li>
              <li>Portfólio</li>
          </ul>
      </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    //$('.tap-target').tapTarget();
    $("#pre").delay(2000).fadeOut(500);
    $("#circle").hide();
    //$("#circle").delay(2000).hide(750).fadeIn(500);
    $("#alertA").fadeOut(3000);
    $("#vote").on('click', function(){
        $("#alertA").toggle();
    });
  });
</script>


<!--div class = "circle" id = "circle"-->
</div>
<section>
<div class = "float" align = "">
<div class = "card shadow-lg">
  <div class = "card-header">#orgulhoUFC</div>
  <div class = "card-body" id = "alertA">
    <h5>Autor</h5>
    <p>
      Lucas Gabriel Guilherme dos Santos, 356726<br>
      Engenharia da Computação,<br>
      Universidade Federal do Ceará - Campus Sobral<br>
    </p>
  </div>
</div>
<br>
<div align ="right">
  <button id = "vote" class = "shadow-sm btn text-white btn-lg bg-primary btn-round"><i class = "fab fa-twitter"></i></button>
</div>
</div>
</section>
<style>
.card{ border: none; }
.float{ position: fixed; bottom: 50px; right: 23px;}
.col-md-6{ margin-bottom: 50px; margin-top: 50px;}
.btn-round{ width: 64px; height: 64px; border-radius: 50%;}
.circle{
  position: fixed;
  bottom: 0px;
  right: 0px;
  width: 500px;
  height: 500px;
  background: orange;
  border-radius: 500px 0 0 0;
  -moz-border-radius: 500px 0 0 0;
  -webkit-border-radius: 500px 0 0 0;
 }
 .circle h1 p{ position: relative; bottom: 200px; }
 li:hover.list-group-item{ border-left: 6px orange solid; cursor: pointer;}
 ul li{ list-style: none; }
</style>
<script src ="js/materialize.js"></script>

<div class = "container text-muted">
 <div class = "row mb-3">
  <div class = "col-md-1">pt-BR</div>
  <div class = "col-md-3">Política de privacidade</div>
  <div class = "col-md-1">Termos</div>
  <div class = "col-md-4">Gabriel Santos/Engenharia da Computação 2019.1. Todos os direitos reservados.</div>
 </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
