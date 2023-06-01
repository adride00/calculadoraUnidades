import { Item } from "./Item.js"
export const ListItem = () => {
  const data = JSON.parse(localStorage.getItem('history'))
  return `
  <ol class="list-group list-group-numbered">
    ${Item()}
  </ol>
  `
}