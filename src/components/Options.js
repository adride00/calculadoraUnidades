import {MENUITEMS} from '../../assets/constants/menu.js';
export const Options = () => {
  
  return `
     
    ${MENUITEMS.map((item) => `
    <div class="col-md-2 row row-cols-1">
    <button id="${item.nombre}" type="button" class="btn btn-outline-light d-flex flex-column align-items-center mx-2 buttonType">
      
        <img src="./assets/icons/${item.icono}" width="40px" />
        ${item.nombre}

    </button>
  </div>
    `).join('')}
  
  `
}