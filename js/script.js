import { Menu } from "../src/components/Menu.js";
import { MENUITEMS } from "../assets/constants/menu.js";
import { UNIDADES } from "../assets/constants/unidades.js";

function setEvents() {
  MENUITEMS.map((item) => {
    let button = document.getElementById(item.nombre);
    button.addEventListener("click", function (e) {
      document.getElementById(
        "headerTipo"
      ).innerHTML = `Unidades tipo ${e.target.id}`;
      let unidades = UNIDADES.filter((unidad) => unidad[e.target.id]);
      let fromUnit = document.getElementById("fromUnit");
      let toUnit = document.getElementById("toUnit");
      fromUnit.innerHTML = "";
      toUnit.innerHTML = "";
      unidades[0][e.target.id].map((unidad) => {
        fromUnit.innerHTML += `<option value="${unidad}">${unidad}</option>`;
        toUnit.innerHTML += `<option value="${unidad}">${unidad}</option>`;
      });
      document.getElementById("tipoUnidades").value = e.target.id;
    });
  });
}
const root = document.getElementById("root");
root.innerHTML = Menu();

setEvents();
