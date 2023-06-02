
export const Item = (item) => {
  return `
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold d-flex flex-content-center">Tipo: ${item.tipoUnidades}</div>
      Se convirtio ${item.value} ${item.fromUnit} a ${item.toUnit} = ${item.response}
    </div>
    <span class=""><img src="assets/icons/trash-svgrepo-com.svg" width="25px" /></span>
  </li>
  `
}