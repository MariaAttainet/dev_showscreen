<div class="modal-header">
    <h5 class="modal-title" id="elegirProveedorModalLabel">Añadir producto</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form action="<?= base_url('proveedores/asociarProveedor') ?>" method="post" id="formElegirProveedor">
        <input type="hidden" name="id_producto" value="<?= esc($id_producto) ?>">

        <div class="form-group mb-3">
            <label for="proveedor">Proveedor</label>
            <select name="id_proveedor" id="proveedor" class="form-control" required>
                <option value="" disabled selected>Selecciona un proveedor</option>
                <?php foreach ($proveedores as $proveedor): ?>
                    <option value="<?= esc($proveedor['id_proveedor']) ?>"><?= esc($proveedor['nombre_proveedor']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="ref_producto">Referencia del Proveedor</label>
            <input type="text" name="ref_producto" id="ref_producto" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="precio">Precio</label>
            <!-- Deja el campo de precio vacío para que el usuario pueda dejarlo vacío -->
            <input type="text" name="precio" id="precio" class="form-control">
        </div>
        
        <div style="text-align: right;">
            <button type="submit" class="boton btnGuardar">
                Asociar Proveedor
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 27" fill="none">
                    <path d="M7.11751 6.91875C6.86324 6.91875 6.61937 7.01976 6.43957 7.19956C6.25977 7.37936 6.15876 7.62322 6.15876 7.8775V19.3825C6.15876 19.6368 6.25977 19.8806 6.43957 20.0604C6.61937 20.2402 6.86324 20.3413 7.11751 20.3413H18.6225C18.8768 20.3413 19.1207 20.2402 19.3005 20.0604C19.4803 19.8806 19.5813 19.6368 19.5813 19.3825V7.8775C19.5813 7.62322 19.4803 7.37936 19.3005 7.19956C19.1207 7.01976 18.8768 6.91875 18.6225 6.91875H14.3081C14.0539 6.91875 13.81 7.01976 13.6302 7.19956C13.4504 7.37936 13.3494 7.62322 13.3494 7.8775V14.8697L15.8862 12.3319C15.9763 12.2418 16.0983 12.1913 16.2256 12.1913C16.3529 12.1913 16.475 12.2418 16.565 12.3319C16.655 12.4219 16.7056 12.544 16.7056 12.6712C16.7056 12.7985 16.655 12.9206 16.565 13.0106L13.2094 16.3663C13.1649 16.4109 13.112 16.4463 13.0537 16.4705C12.9955 16.4947 12.9331 16.5071 12.87 16.5071C12.807 16.5071 12.7445 16.4947 12.6863 16.4705C12.628 16.4463 12.5751 16.4109 12.5306 16.3663L9.17499 13.0106C9.13042 12.9661 9.09506 12.9132 9.07094 12.8549C9.04682 12.7967 9.03441 12.7343 9.03441 12.6712C9.03441 12.6082 9.04682 12.5458 9.07094 12.4876C9.09506 12.4293 9.13042 12.3764 9.17499 12.3319C9.21956 12.2873 9.27247 12.2519 9.33071 12.2278C9.38894 12.2037 9.45136 12.1913 9.51439 12.1913C9.57742 12.1913 9.63983 12.2037 9.69807 12.2278C9.7563 12.2519 9.80921 12.2873 9.85379 12.3319L12.3906 14.8697V7.8775C12.3906 7.36895 12.5927 6.88122 12.9523 6.52162C13.3119 6.16202 13.7996 5.96 14.3081 5.96H18.6225C19.1311 5.96 19.6188 6.16202 19.9784 6.52162C20.338 6.88122 20.54 7.36895 20.54 7.8775V19.3825C20.54 19.8911 20.338 20.3788 19.9784 20.7384C19.6188 21.098 19.1311 21.3 18.6225 21.3H7.11751C6.60896 21.3 6.12124 21.098 5.76164 20.7384C5.40203 20.3788 5.20001 19.8911 5.20001 19.3825V7.8775C5.20001 7.36895 5.40203 6.88122 5.76164 6.52162C6.12124 6.16202 6.60896 5.96 7.11751 5.96H9.51439C9.64153 5.96 9.76346 6.0105 9.85336 6.1004C9.94326 6.19031 9.99376 6.31224 9.99376 6.43937C9.99376 6.56651 9.94326 6.68844 9.85336 6.77834C9.76346 6.86824 9.64153 6.91875 9.51439 6.91875H7.11751Z" fill="white" />
                </svg>
            </button>
        </div>
    </form>
</div>

<script>
    // Asegura que el valor de precio sea un número, y si está vacío, se coloca '0'.
    document.getElementById('formElegirProveedor').addEventListener('submit', function(event) {
        var precioInput = document.getElementById('precio');
        if (precioInput.value.trim() === '') {
            precioInput.value = '0';
        }
        // Reemplaza las comas por puntos en el campo de precio
        precioInput.value = precioInput.value.replace(',', '.');
    });

    // Reemplaza las comas con puntos mientras el usuario escribe
    document.getElementById('precio').addEventListener('input', function (event) {
        this.value = this.value.replace(',', '.');
    });
</script>
