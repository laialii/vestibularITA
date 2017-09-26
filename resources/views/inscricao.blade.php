@extends('sidebar')
@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Inscrição</a> </div>
  <h1>Faça sua inscrição <br>
  <small>Preencha o formulário abaixo</small></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Dados pessoais</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nome :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nome" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sobrenome :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Sobrenome" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">CPF</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="11 dígitos"  />
              </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Data de nascimento :</label>
              <div class="controls">
                <input type="text" id="mask-date" class="span8 mask text"></div>
            </div>
            <div class="control-group">
              <label class="control-label">Endereço :</label>
              <div class="controls">
                <input type="text" class="span11"/>
              </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Telefone:</label>
              <div class="controls">
                <input type="text" id="mask-phone" class="span8 mask text"></div>
            </div>
            <div class="control-group">
              <label class="control-label">Local de prova:</label>
              <div class="controls">
                <input type="text" class="span11" /></div>
            </div>
            <div class="control-group">
              <label class="control-label">Alguma deficiencia?</label>
              <div class="controls">
                <input type="text" class="span11" /></div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>

<!--end-main-container-part-->
@endsection
