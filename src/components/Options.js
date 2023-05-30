import {MENUITEMS} from '../../assets/constants/menu.js';
export const Options = () => {
  
  return `
     
    ${MENUITEMS.map((item) => `
      <div class="col-md-1">
        <button id="${item.nombre}" type="button" class="btn btn-outline-light buttonType active" style="background-color: #007bff; color: #fff;"><img src="./assets/icons/${item.icono}" width="40px"/>${item.nombre}</button>
      </div>
    `).join('')}
  
  `
}