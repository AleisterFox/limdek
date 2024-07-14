<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="price" class="form-label" required>Precio</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="stock" class="form-label" required>Stock</label>
            <input type="number" class="form-control" id="in_stock" name="in_stock">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="installation_video" class="form-label">Video instalación</label>
            <input type="text" class="form-control" id="installation_video" name="installation_video">
        </div>
    </div>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="size" class="form-label" required>Tamaño Panel</label>
                    <input class="form-control" id="size" name="size"></input>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="large" class="form-label" required>Largo de Panel</label>
                    <input class="form-control" id="large" name="large"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="meters" class="form-label" required>m² por panel</label>
                    <input class="form-control" id="meters" name="meters"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="presentation" class="form-label" required>Presentación</label>
                    <input class="form-control" id="presentation" name="presentation"></input>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="area" class="form-label" required>Área total caja</label>
                    <input class="form-control" id="area" name="area"></input>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="square_meters" class="form-label" required>m² por caja</label>
                    <input class="form-control" id="square_meters" name="square_meters"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="applications" class="form-label" required>Aplicaciones</label>
                    <input class="form-control" id="applications" name="applications"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="recycling" class="form-label" required>Reciclaje</label>
                    <input class="form-control" id="recycling" name="recycling"></input>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="life" class="form-label" required>Tiempo de vida</label>
                    <input class="form-control" id="life" name="life"></input>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="maintenance" class="form-label" required>Mantenimiento</label>
                    <input class="form-control" id="maintenance" name="maintenance"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="weight" class="form-label" required>Peso Caja</label>
                    <input class="form-control" id="weight" name="weight"></input>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="box_size" class="form-label" required>Tamaño Caja</label>
                    <input class="form-control" id="box_size" name="box_size"></input>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="mb-3">
            <label for="description" class="form-label" required>Descripción</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
    </div>
</div>