@extends('sidebar')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"></a> </div>
    <h1>Locais de prova <br>
    <small>Confira as cidades onde serão aplicadas as provas</small></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td>Belém</td>
                  <td>PA</td>
                  <td>Natal</td>
                  <td>RN</td>
                </tr>
                <tr>
                  <td>Belo Horizonte</td>
                  <td>MG</td>
                  <td>Porto Alegre</td>
                  <td>RS</td>
                </tr>
                <tr>
                  <td>Campinas</td>
                  <td>SP</td>
                  <td>Recife</td>
                  <td>PE</td>
                </tr>
                <tr>
                  <td>Campo Grande</td>
                  <td>MS</td>
                  <td>Ribeirão Preto</td>
                  <td>SP</td>
                </tr>
                <tr>
                  <td>Cuiabá</td>
                  <td>MT</td>
                  <td>Rio de Janeiro</td>
                  <td>RJ</td>
                </tr>
                <tr>
                  <td>Curitiba</td>
                  <td>PR</td>
                  <td>São José dos Campos</td>
                  <td>SP</td>
                </tr>
                <tr>
                  <td>Fortaleza</td>
                  <td>CE</td>
                  <td>São José do Rio Preto</td>
                  <td>SP</td>
                </tr>
                <tr>
                  <td>Goiânia</td>
                  <td>GO</td>
                  <td>Salvador</td>
                  <td>BH</td>
                </tr>
                <tr>
                  <td>Juiz de Fora</td>
                  <td>MG</td>
                  <td>São Luís</td>
                  <td>MA</td>
                </tr>
                <tr>
                  <td>Londrina</td>
                  <td>PR</td>
                  <td>São Paulo</td>
                  <td>SP</td>
                </tr>
                <tr>
                  <td>Manaus</td>
                  <td>AM</td>
                  <td>Vitória</td>
                  <td>ES</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->
@endsection
