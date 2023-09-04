<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>COBRA SIM</title>
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
</head>
<body class="hold-transition register-page" style="background-color:gray">
<div class="register-box">
  <div class="register-box-body"><center>
  <img src="images/logo-lado.png" width="220px" alt=""/>
    <p class="login-box-msg">Cadastrar cliente</p></center>

    <form id="form">
      <input type="hidden" name="plano" value="<?php echo $_GET['plano']; ?>"/>
      <label>Nome e Sobrenome</label>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nome sobrenome" name="nome" required/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <label>E-mail</label>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <label>Contato</label>
      <div class="form-group has-feedback">
        <input type="text" class="form-control celular" placeholder="Contato" name="contato" minlength="11" maxlength="14" required/>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <label>CPF ou CNPJ (será seu login)</label>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apenas números" name="acesso" minlength="11" maxlength="14" required/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <label>Senha</label>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Senha" name="senha" required/>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" id="aguarde">Cadastrar</button>
        </div>
        <!-- /.col -->
      </div>
      </form>
      <br />
      <div class="row">
        <div class="col-xs-12" id="retorno"></div>
        <!-- /.col -->
      </div>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="acesso/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="acesso/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="acesso/dist/js/jquery.mask.js"></script>
<script src="acesso/dist/js/jquery.maskMoney.js"></script>
<script src="acesso/dist/js/meusscripts.js"></script>
<script>
        $('#form').submit(function() {
            $('#aguarde').show().attr('disabled', true).text('Aguarde, Processando...');
            $.ajax({
                type: 'POST',
                url: 'insert.php',
                data: $('#form').serialize(),
                success: function(data) {
                    $('#retorno').show().html(data);
                    $('#aguarde').show().attr('disabled', false).text('Cadastrar');
                }
            });
            return false;
        });
        document.onmousedown = disableclick;

        function disableclick(event) {
            if (event.button == 2) {
                return false;
            }
        }
    </script>
</body>
</html>
