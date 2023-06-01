<div class="container mt-3 p-5">
    <div class="card text-center">
        <div class="card-header" id="headerTipo">
            Unidades tipo Peso
        </div>
        <div class="card-body bg-dark bg-gradient">
            <form id="formUnidades">
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
                          
                            

                            '<input id="response" type="text" class="form-control" placeholder="Resultado" readonly disabled>';
                            
                            
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-light mt-3" id="buttonConvertir">Convertir</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            Ultimas conversiones
            <div id="history">
                
            </div>
        </div>
    </div>
</div>

<script type="module">
    import { ListItem } from '../calculadora/src/components/ListItem.js';
    const msjError = document.getElementById("msjValueError")
    document.getElementById("value").addEventListener("keypress", function(e) {
        if (e.target.value != '') {
            if(msjError){

                document.getElementById("msjValueError").style.display = "none";
            }
        }
    })
    
    let table = document.getElementById("history")

    table.innerHTML = ListItem()
    const response = document.getElementById("response")
    const formUnidades = document.getElementById("formUnidades")
    // enviar por ajax el formulario
    formUnidades.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(formUnidades)
        fetch("./src/Classes/Main.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data)
            response.value = data
            // guardar en local storage
            const datos = {
                value: document.getElementById("value").value,
                fromUnit: document.getElementById("fromUnit").value,
                toUnit: document.getElementById("toUnit").value,
                response: data
            }
            localStorage.setItem("datos", JSON.stringify(datos))
        })
    })
</script>