import { INTEGRANTES } from "../../assets/constants/integrantes.js"
export const ListaIntegrantes = () => {

  return `
  
  <ul class="content-members">
    ${INTEGRANTES.map(integrante => `
    <li class="nav-item">
    <a
      href="${integrante.github}"
      class="nav-link px-2 text-body-secondary"
      ><img class="img" src="${integrante.img}"/>
      <p>
        ${integrante.name}
      </p>
    </a>
  </li>`).join('')}
  </ul>
  
  `
}