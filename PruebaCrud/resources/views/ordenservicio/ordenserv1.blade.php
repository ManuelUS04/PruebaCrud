<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="text-center">Orden de Servicio</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-body p-0">
                        <main class="container p-2">
                            <div class="row">
                                <div class="col-12 col-lg-7 p-1">
                                    <article class="h-100 border border-secondary p-2">
                                        <h6 class="text-center">DATOS DEL CLIENTE</h6>
                                        <hr>
                                        <div class="input-group p-1">
                                            <label for="nombre" class="col-sm-3 col-form-label">NOMBRE:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="direccion" class="col-sm-3 col-form-label">DIRECCIÓN:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="telefono" class="col-sm-3 col-form-label">TELÉFONO:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="email" class="col-sm-3 col-form-label">EMAIL:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-lg-5 p-1">
                                    <article class="h-100 border border-secondary p-2">
                                        <h6 class="text-center">DATOS DEL ORDEN DE SERVICIO</h6>
                                        <hr>
                                        <div class="input-group p-1">
                                            <label for="orden" class="col-sm-4 col-form-label">N°. ORDEN:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="ingreso" class="col-sm-4 col-form-label">FECHA DE INGRESO:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="entrega" class="col-sm-4 col-form-label">FECHA DE ENTREGA:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </main>
                        <main class="container p-2">
                            <div class="row">
                                <article class="h-100 border border-secondary p-2">
                                    <h6 class="text-center">DATOS DEL VEHICULO</h6>
                                    <hr>
                                    <div class="panel-body">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                                <thead style="background-color:#A9D0F5">
                                                    <th>MARCA</th>
                                                    <th>MODELO</th>
                                                    <th>AÑO</th>
                                                    <th>COLOR</th>
                                                    <th>PLACAS</th>
                                                    <th>VIN</th>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </main>
                        <main class="container p-2">
                            <h6 class="text-center">DESCRIPCIÓN DE TRABAJO</h6>
                            <hr>
                            <div class="row">
                                <textarea name="" id="" cols="50" rows="10" placeholder="Ingresa texto"></textarea>
                            </div>
                        </main>
                        <main class="container p-1">
                            <article class="h-100 border border-secondary">
                                <div class="row justify-content-between m-3">
                                    <div class="col-md-4 mb-4">
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <label for="">SI</label>
                                                <label for="">NO</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Espejo Izquierdo</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Espejo Derecho</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Vidrios</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Radio</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Pantalla</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Encendedor</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Antena</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Cont. de puertas</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Cargador Cel.</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Triangulos</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <label for="">SI</label>
                                                <label for="">NO</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Cubresol</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Herramientas</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Gato</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Llanta de Refacción</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Faros/Luna</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Tapa de Gasolina</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Placas</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Tapetes</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Extintor</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="" class="col-sm-4 col-form-label">Llave de Tuercas</label>
                                            <div class="col-sm-8">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="input-group p-1">
                                            <label for="" class="col-sm-4 col-form-label">Kilometraje</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group p-1">
                                            <label for="" class="col-sm-4 col-form-label">Gasolina</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main>
                        <main class="container p-1">
                            <article class="h-100 border border-secondary">
                                <div class="row justify-content-between m-2">
                                    <div class="col-xs-12 col-md-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">Solicito presupuesto previo antes de autorizar el trabajo.</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck1">Autorizo realizar preparación sin presupuesto previo.</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                            <label class="form-check-label" for="defaultCheck1">Autorizo para conducir mi vehiculo para pruebas</label>
                                        </div><br>
                                        <div class="input-group">
                                            <h6>El taller y sus empleados no se responsabilizan por objetos dejados dentro del vehiculo y que no hayan
                                                sido inventariados y entregados al recepcionista
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <div class="input-group">
                                            <h6>Acepto las condiciones expresamente indicadas en esta Orden de Servicio</h6>
                                        </div><br><br>
                                        <h6 class="text-center">---------------------------------------</h6>
                                    </div>
                                </div>
                            </article>
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>