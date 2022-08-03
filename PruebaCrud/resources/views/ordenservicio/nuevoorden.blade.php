<style>
    * {
        margin: auto;
        padding: auto;
    }

    h1 {
        font-size: 20;
        text-align: center;
    }

    h6 {
        font-size: 14;
        text-align: center;
    }

    .row1 {
        height: 200px;
        width: 750.6px;
    }

    .row2 {
        display: flex;
        justify-content: center;
        border: 1px solid #010302;
        width: 90%;
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
        padding: 15px;
        height: 165px;
        width: 370px;
        border: 1px solid #010302;
        float: left;
    }

    .caja2 {
        padding: 15px;
        margin-left: 5px;
        height: 165px;
        width: 313.6px;
        border: 1px solid #010302;
        float: left;
    }

    .caja3 {
        border: 1px solid #010302;
        margin-top: 8px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .caja4 {
        border: 1px solid #010302;
        margin-top: 8px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .caja5 {
        margin-top: 8px;
        height: 300px;
        width: 750.6px;
    }

    .caja6 {
        margin-top: 8px;
        height: 300px;
        width: 750.6px;
    }

    .col1 {
        height: 270px;
        width: 240px;
        /* border: 1px solid #010302; */
        float: left;
    }

    .col2 {
        height: 270px;
        width: 240px;
        /* border: 1px solid #010302; */
        float: left;
    }

    .col3 {
        height: 270px;
        width: 260.6px;
        /* border: 1px solid #010302; */
        float: left;
    }

    .col4 {
        padding: 15px;
        height: 240px;
        width: 470px;
        border: 1px solid #010302;
        float: left;
    }

    .col5 {
        padding: 15px;
        margin-left: 5px;
        height: 240px;
        width: 216.6px;
        border: 1px solid #010302;
        float: left;
    }

    .col3 input,
    .caja1 input {
        width: 50%;
        border: none;
        border-bottom: 1px solid #010302;
    }

    .col3 label,
    .caja1 label {
        padding: 2px;
        display: inline-block;
        width: 90px;
    }
    .col1 label,
    .col2 label {
        display: inline-block;
        width: 90px;
    }

    .caja2 input {
        width: 40%;
        border: none;
        border-bottom: 1px solid #010302;
    }
    .caja2 label {        
        display: inline-block;
        width: 100px;
    }

    table {
        table-layout: fixed;
        width: 98%;
        border-collapse: collapse;
    }

    tr,
    td {
        padding: 20px;
    }

    hr {
        width: 99%;
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
        <hr><br>
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
        <hr><br>
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
<div class="caja3">
    <h6>DATOS DEL VEHICULO</h6>
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
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="caja4">
    <h6>DESCRIPCIÓN DE TRABAJO</h6>
    <table>
        <tbody>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="caja5">
    <div class="col1">
        <div>
            <label></label>
            <input>SI</input>
            <input>NO</input>
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
        <div>
            <label></label>
            <input>SI</input>
            <input>NO</input>
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
            <img src="img/auto4.jpg" class="img1">
        </div>
    </div>
</div>
<div class="caja6">
    <div class="col4">
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
    <div class="col5">
        <div>
            <h6>Acepto las condiciones expresamente indicadas en esta Orden de Servicio</h6>
        </div><br><br><br><br><br>
        <p style="text-align: center;">-------------------------------</p>
    </div>
</div>