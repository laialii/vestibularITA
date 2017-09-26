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
                  <th>Nome</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#nomedoaluno</td>
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
