<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Datos generales del inventario</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Cantidad de Productos</h3>
              <p><?php $p = $this->modelo->Cantidad()?></p>
              <?=$p->Cantidad?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Valor total de la mercancia</h3>
              <p><?php $p = $this->modelo->Total()?></p> $
              <?=$p->Total?>
            </div>
          </div>
        </div>
      </div>
    </div>