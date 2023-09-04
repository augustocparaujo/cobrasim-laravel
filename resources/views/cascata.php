<?php
include('acesso/conexao.php');
include('acesso/funcoes.php');
$id = limpa($_GET['id']);
$query = mysqli_query($conexao,"SELECT id,valor,descricao,vencimento,link FROM cobranca WHERE id='$id'");
if(mysqli_num_rows($query) > 0){
  $r = mysqli_fetch_array($query);
  $valor = $r['valor'];
  $vencimento = $r['vencimento'];
  $descricao = AspasForm($r['descricao']);
  $link = $r['link'];
}else{
  echo '<script>location.href="/";</script>';
}

echo'
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cobra SIM v1.0.0</title>
    <link rel="shortcut icon" href="images/logo.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="acesso/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="acesso/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="acesso/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="acesso/dist/css/AdminLTE.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .login-page,
    .register-page {
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100vh;
        -ms-flex-pack: center;
        justify-content: center;
        background: url(acesso/dist/img/fundo.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        overflow: hidden;
    }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
  <img src="images/logo-lado.png" width="220px" alt=""/></center>
  </div>
      <center><h4 class="text-red">ESSE CÓDIGO SÓ TEM VÁLIDADE PARA DATA DE HOJE</h4></center>
      <div class="form-group has-feedback">
      <label>Valor</label>
        <input type="text" class="form-control rela" value="R$ '.Real(@$valor).'" required disabled/>
        <span class="fa fa-dollar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Vencimento</label>
        <input type="date" class="form-control" value="'.@$vencimento.'" required disabled/>
        <span class="fa fa-calendar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label>Descrição</label>
        <textarea rows="3" class="form-control" required disabled>'.@$descricao.'</textarea>
      </div>
      <form id="form">
      <input type="hidden" name="id" value="'.$id.'"/>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn bg-navy btn-block btn-lg" id="aguarde">GERAR CÓDIGO PIX</button>
        </div>
        <!-- /.col -->
      </div>
      </form>';

      if($link != ''){ echo' <br />
      <div class="row">
        <div class="col-xs-12">
          <a href="'.@$link.'">
          <button class="btn btn-block btn-lg" style="background:#D8CB0B"><img src="images/icon-pix.png" width="10%"/> CLIQUE AQUI PARA PAGAR</button></a>
          <center><p class="text-danger">Após o pagamento a baixa será realizada automaticamente</p></center>
        </div>
        <!-- /.col -->
      </div>
      ';}echo'
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="acesso/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="acesso/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="acesso/dist/js/jquery.mask.js"></script>
<script src="acesso/dist/js/jquery.maskMoney.js"></script>
<script src="acesso/dist/js/meusscripts.js"></script>

</body>
</html>';
?>
<script>
    $('#form').submit(function(){
      $('#aguarde').show().attr('disabled',true).text('Aguarde, gerando código...');
      $.ajax({
        type:'post',
        url:'acesso/cobranca-gerar-pix.php',
        data:$('#form').serialize(),
        success:function(data){
        $('#aguarde').hide().removeAttr('disabled',true);
        history.go();
        }
      });
      return false;
    });
       
</script>

