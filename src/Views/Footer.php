
<footer class="footer">
      <ul class="content-members">
        
      </ul>
      <p class="text-center text-body-secondary">© 2023</p>
    </footer>

    <script type="module">
      import { ListaIntegrantes } from "../calculadora/src/components/listaIntegrantes.js"
      const $listaIntegrantes = document.querySelector(".content-members")
      $listaIntegrantes.innerHTML = ListaIntegrantes()
    </script>
 
