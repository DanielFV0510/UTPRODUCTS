const tbProductos = document.getElementById("tb_productos");
const btnModificar = document.getElementById("modificar");

CargarEventListener();

function CargarEventListener() {
    if (tbProductos) {
        tbProductos.addEventListener("click", showModalProducto);
    }
    if (btnModificar) {
        btnModificar.addEventListener("click", ModificarProducto);
    }
}

function ModificarProducto() {

    const formulario = document.getElementById('formActualizarProduct');
    const url = 'includes/api-productos.php';
    // Enviando datos post & Envio los datos del formulario 
    const data = new FormData(formulario);
    console.log(data.get('categ2'));
    // codprod estado categ2 categ1 descripcion Precio nombprod
    data.append('jsaccion', 'ModificarProducto');
    const miInit = {
        method: 'POST',
        body: data
    };
    return fetch(url, miInit)
        .then(function(response) { // Primer THEN CONEXION CON EL ARCHIVO
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada Ajax";
            }
        }).then(function(response) { // SE TIENE LOS DATOS, SE PUEDE IMPRIMIR
            // if (response = 1) {
            console.log(response);
            if (response === "actualizado") {
                location.reload();

            }
        });
    // const response = fetch(url, miInit);
    // if (response.ok) {
    //     // console.log(response.text());
    //     return response.json();
    // } else {
    //     throw "Error en la llamada Ajax";
    // }
    // console.log(data.get("nombprod"));
    // console.log(data.get("estado"));
    // console.log(data.get("Precio"));
    // console.log(data.get("codprod"));


}

function showModalProducto(e) {
    input = e.target; // Boton que fue clickeado
    //Buscar si el boton tiene la clase button1
    if (input.classList.contains("button1")) {
        e.preventDefault();
        const contenedorProduct = input.parentElement.parentNode.getElementsByTagName("td");
        const nombreProducto = contenedorProduct[2].textContent.trim(),
            precio = contenedorProduct[3].textContent.trim(),
            descripcion = contenedorProduct[4].textContent.trim(),
            categoria = contenedorProduct[5].textContent.trim(),
            condicion = contenedorProduct[6].textContent.trim(),
            codProducto = contenedorProduct[7].textContent.trim();
        $('#exampleModal').on('show.bs.modal', function(event) {
            const modalp = document.getElementById("exampleModal");
            if (modalp.classList.contains("modal", "fade", "show")) {
                const inputNombProducto = document.getElementById("nombprod");
                const inputid = document.getElementById("idproduct");
                const inputPrecio = document.getElementById("Precio");
                const inputDescripcion = document.getElementById("descripcion");
                const inputCodigoProducto = document.getElementById("codprod");
                const inputSelectEstado = document.getElementById("estado");

                inputSelectEstado.value = condicion;
                inputid.value = input.dataset.id;
                inputNombProducto.value = nombreProducto;
                inputPrecio.value = precio.slice(3);
                inputDescripcion.value = descripcion;
                inputCodigoProducto.value = codProducto;
            }
        });

        // const nuevoCodigoHtml =
        //     `<td></td><td></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="nombreProducto" id="nombreProducto" value="${nombreProducto}" ></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="precio" id="precio" value="${precio}" ></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="descripcion" id="descripcion" value="${descripcion}" ></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="categoria" id="categoria" value="${categoria}" ></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="condicion" id="condicion" value="${condicion}" ></td>
        // <td class="column-1"><input class="p-0 border border-primary rounded" type="text" name="codProducto" id="codProducto" value="${codProducto}" ></td>
        // <td class="column-1">En edición</td>`;
        // contenedorProduct[0].parentElement.innerHTML = nuevoCodigoHtml;

    }
}