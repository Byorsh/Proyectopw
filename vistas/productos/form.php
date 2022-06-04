<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Productos</h1>
            <p>Ingresar los datos para <?=$titulo?> un producto</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Productos</li>
              <li><a href="#"><?=$titulo?> Producto</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=producto&a=Guardar">
                      <fieldset>
                        <legend><?=$titulo?> Videojuego</legend>
                        <input class="form-control" name="ID" type="hidden" value="<?=$p->getVideojuego_id()?>">
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Nombre" type="text" value="<?=$p->getNombre_juego()?>" placeholder="Nombre del juego">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Desarrolladora">Desarrolladora</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Desarrolladora" type="text" value="<?=$p->getDesarrolladora()?>" placeholder="Desarrolladora del juego">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Clasificacion">Clasificacion</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Clasificacion" type="text" value="<?=$p->getClasificacion()?>" placeholder="Clasificacion del juego">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Precio">Precio</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Precio" type="number" value="<?=$p->getPrecio()?>" placeholder="Precio del juego">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Cantidad">Cantidad</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Cantidad" type="number" value="<?=$p->getCantidad()?>" placeholder="Cantidad">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>