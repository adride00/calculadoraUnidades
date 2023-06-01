<div class="container mt-3 p-5">
    <div class="card text-center">
        <div class="card-header" id="headerTipo">
            Unidades tipo Peso
        </div>
        <div class="card-body bg-dark bg-gradient">
            <form action="index.php" method="post" id="formUnidades">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="value" class="form-label text-light">Valor</label>
                            <input  type="number" class="form-control" id="value" name="value" placeholder="Ingrese el valor a convertir">
                            <?php
                            if (isset($resultadoValidacion) && $resultadoValidacion['status'] == 'error') {

                                echo '<span id="msjValueError"><p style="color: red">' . $resultadoValidacion['msj'] . '</p></span>';
                            }
                            ?>
                            <input type="hidden" name="tipoUnidades" id="tipoUnidades">
                        </div>
                        <div class="col-md-4">
                            <label for="fromUnit" class="form-label text-light">De</label>
                            <select class="form-select" id="fromUnit" name="fromUnit">
                                <option value="Gramos">Gramos</option>
                                <option value="Kilogramos">Kilogramos</option>
                                <option value="Libras">Libras</option>
                                <option value="Onzas">Onzas</option>
                                <option value="Arrobas">Arrobas</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="toUnit" class="form-label text-light">A</label>
                            <select class="form-select" id="toUnit" name="toUnit">
                                <option value="Gramos">Gramos</option>
                                <option value="Kilogramos">Kilogramos</option>
                                <option value="Libras">Libras</option>
                                <option value="Onzas">Onzas</option>
                                <option value="Arrobas">Arrobas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-center p-3 mx-auto">
                            <?php
                            if (isset($convertedValue)) {

                                echo '<input value="' . $convertedValue . '" type="text" class="form-control" placeholder="Resultado" readonly>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-light mt-3">Convertir</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            Ultimas conversiones
        </div>
    </div>
</div>

<script>
    const msjError = document.getElementById("msjValueError")
    document.getElementById("value").addEventListener("keypress", function(e) {
        if (e.target.value != '') {
            if(msjError){

                document.getElementById("msjValueError").style.display = "none";
            }
        }
    })
    // dar click por default en el primer boton
    // document.getElementById("Longitud").click();

    // document.getElementById("formUnidades").addEventListener("submit", (e) => {
    //     e.preventDefault();
    // })
</script>