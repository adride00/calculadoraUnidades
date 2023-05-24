import {MENUITEMS} from '../../assets/constants/menu.js';
export const Options = () => {
  return `
    ${MENUITEMS.map((item) => `
      <div class="col-1">
        <button type="button" class="btn btn-outline-light"><img src="./assets/icons/${item.icono}" width="40px"/>${item.nombre}</button>
      </div>
    `).join('')}
  
  `
}