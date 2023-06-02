import { Item } from "./Item.js"
export const ListItem = (data) => {
  return `
  <ol class="list-group list-group-numbered">
    ${data.map((item) => {
      return Item(item)
    }).join('')
    }
  </ol>
  `
}