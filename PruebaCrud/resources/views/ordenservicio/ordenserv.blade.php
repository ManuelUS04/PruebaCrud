<style>
    * {
        margin: auto;
        padding: auto;
    }

    .container {
        margin: 10px;
    }

    h1 {
        font-size: 20;
        text-align: center;
    }

    h6 {
        font-size: 14;
        text-align: center;
    }

    .row1,
    .row2 {
        display: flex;
        justify-content: center;
        border: 1px solid #010302;
        width: 78%;
        margin-top: 0.3rem;
    }

    .row3 {
        padding: 1rem;
        margin-top: 0.3rem;
        display: flex;
        justify-content: center;
        border: 1px solid #010302;
        width: 75.8%;
    }

    .caja1 {
        padding: 0 1rem;
        margin: 1rem;
        border: 1px solid #010302;
        width: 50%;
    }

    .caja2 {
        padding: 0 1rem;
        margin: 1rem;
        border: 1px solid #010302;
    }

    .col3 input,
    .caja2 input,
    .caja1 input {
        border: none;
        border-bottom: 1px solid #010302;
        background: transparent;
        outline: none;
        height: 40px;
        color: #010302;
        font-size: 16px;
    }

    table {
        table-layout: fixed;
        width: 78%;
        border-collapse: collapse;
        border: 1px solid #010302;
    }

    tr,
    td {
        padding: 20px;
    }

    hr {
        width: 78%;
    }

    .img1 {
        padding: 10px;
        margin: 10px;
        float: right;
        width: 200px;
        height: 160px;
    }
</style>

<h1>Orden de Servicio</h1>
<div class="row1">
    <div class="caja1">
        <h6>DATOS DEL CLIENTE</h6>
        <hr>
        <div>
            <label>NOMBRE:</label>
            <input>
        </div>
        <div>
            <label>DIRECCIÓN:</label>
            <input>
        </div>
        <div>
            <label>TELÉFONO:</label>
            <input>

        </div>
        <div>
            <label>EMAIL:</label>
            <input>
        </div><br>
    </div>
    <div class="caja2">
        <h6>DATOS DEL ORDEN DE SERVICIO</h6>
        <hr>
        <div>
            <label>N°. ORDEN:</label>
            <input>
        </div>
        <div>
            <label>FECHA DE INGRESO:</label>
            <input>
        </div>
        <div>
            <label>FECHA DE ENTREGA:</label>
            <input>
        </div>
    </div>
</div>
<h6>DATOS DEL VEHICULO</h6>
<div>
    <table>
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
<h6>DESCRIPCIÓN DE TRABAJO</h6>
<div>
    <table>
        <tbody>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row2">
    <div class="col1">
        <div align="right">
            <label></label>
            <label>SI</label>
            <label>NO</label>
        </div>
        <div>
            <label>Espejo Izquierdo</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Espejo Derecho</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Vidrios</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Radio</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Pantalla</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Encendedor</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Antena</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Cont. de puertas</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Cargador Cel.</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Triangulos</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
    </div>
    <div class="col2">
        <div align="right">
            <label></label>
            <label>SI</label>
            <label>NO</label>
        </div>
        <div>
            <label>Cubresol</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Herramientas</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Gato</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Llanta de Refacción</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Faros/Luna</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Tapa de Gasolina</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Placas</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Tapetes</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Extintor</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
        <div>
            <label>Llave de Tuercas</label>
            <input type="checkbox">
            <input type="checkbox">
        </div>
    </div>
    <div class="col3">
        <div>
            <label>Kilometraje</label>
            <input>
        </div>
        <div>
            <label>Gasolina</label>
            <input>
        </div>
        <div>
            <img src="/img/auto4.jpg" class="img1">
        </div>
    </div>
</div>
<div class="row3">
    <div>
        <div>
            <input type="checkbox">
            <label>Solicito presupuesto previo antes de autorizar el trabajo.</label>
        </div>
        <div>
            <input type="checkbox">
            <label>Autorizo realizar preparación sin presupuesto previo.</label>
        </div>
        <div>
            <input type="checkbox">
            <label>Autorizo para conducir mi vehiculo para pruebas</label>
        </div><br>
        <div>
            <h5>El taller y sus empleados no se responsabilizan por objetos dejados dentro del vehiculo y que no hayan
                sido inventariados y entregados al recepcionista
            </h5>
        </div>
    </div>
    <div>
        <div>
            <h6>Acepto las condiciones expresamente indicadas en esta Orden de Servicio</h6>
        </div><br><br>
        <h6>---------------------------------------</h6>
    </div>
</div>