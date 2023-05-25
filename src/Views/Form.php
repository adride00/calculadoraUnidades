<div class="container mt-3 p-5">
        <div class="card text-center">
            <div class="card-header" id="headerTipo">

            </div>
            <div class="card-body bg-dark bg-gradient">
                <form action="index.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label for="value" class="form-label text-light">Valor</label>
                                <input type="number" class="form-control" id="value" name="value" placeholder="Ingrese el valor a convertir">
                                <input type="hidden" name="tipoUnidades" id="tipoUnidades">
                            </div>
                            <div class="col">
                                <label for="fromUnit" class="form-label text-light">De</label>
                                <select class="form-select" id="fromUnit" name="fromUnit">
                                    
                                </select>
                            </div>
                            <div class="col">
                                <label for="toUnit" class="form-label text-light">A</label>
                                <select class="form-select" id="toUnit" name="toUnit">
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-center p-3 mx-auto">
                                <?php
                                echo '<input value="'.$convertedValue.'" type="text" class="form-control" placeholder="Resultado">';
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