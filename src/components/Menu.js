import { Options } from "./Options.js"
export const Menu = () => {
  return `
    <div class="container text-bg-dark mt-3 p-5">
      <div class="row d-flex justify-content-center" id="botonera">
        ${Options()}
      </div>
    </div>
  `
}