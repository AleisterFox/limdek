@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Productos</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Agregar producto</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Precio venta</th>
                <th>Inventario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('/images/'. $product->image) }}" alt="{{ $product->name }}" style="width: 60px;">
                    @endif
                </td>
                <td>
                    <div style="width: 350px;">
                        {{ $product->description }}
                    </div>
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->in_stock }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-warning updateCategories" 
                            data-id="{{ $product->id }}">
                            <i class="fa-4 bi-tags"></i>
                        </button>
                        
                        <button class="btn btn-success updateProductImages" 
                            data-id="{{ $product->id }}"
                            data-image2="{{ asset('/images/'. $product->image2) }}"
                            data-image3="{{ asset('/images/'. $product->image3) }}"
                            data-image4="{{ asset('/images/'. $product->image4) }}"
                            data-image5="{{ asset('/images/'. $product->image5) }}"
                            >
                            <i class="bi bi-card-image"></i>
                        </button>
                        <button class="btn btn-info updateProduct" 
                            id="updateProduct-{{ $product->id }}" 
                            data-id="{{ $product->id }}" 
                            data-name="{{ $product->name }}" 
                            data-description="{{ $product->description }}" 
                            data-price="{{ $product->price }}" 
                            data-in_stock="{{ $product->in_stock }}" 
                            data-category_id="{{ $product->category_id }}"
                            data-size="{{ $product->size }}"
                            data-large="{{ $product->large }}"
                            data-meters="{{ $product->meters }}"
                            data-presentation="{{ $product->presentation }}"
                            data-area="{{ $product->area }}"
                            data-square_meters="{{ $product->square_meters }}"
                            data-applications="{{ $product->applications }}"
                            data-recycling="{{ $product->recycling }}"
                            data-life="{{ $product->life }}"
                            data-maintenance="{{ $product->maintenance }}"
                            data-weight="{{ $product->weight }}"
                            data-box_size="{{ $product->box_size }}"
                            data-installation_video="{{ $product->installation_video }}"
                            >
                            <i class="fs-4 bi-grid"></i>
                        </button>
                        <button data-id="{{ $product->id }}" type="submit" class="deleteProduct btn btn-danger">
                            <i class="fs-4 bi-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Agregar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="post">
                    @csrf
                    <input type="hidden" id="productId">
                    <div class="update-categories"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateCategoriesButton" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="productId">
                    @include('admin.products._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="addProductForm" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateProductModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProductModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
                    @csrf
                    @include('admin.products._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateProductButton" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateImagesProductModal" tabindex="-1" aria-labelledby="updateImagesProductModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateImagesProductModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
                    @csrf
                    <input type="hidden" id="productId">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Imagen1</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                                <img id="img-image2" class="img-fluid" width="100px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image2" class="form-label">Imagen2</label>
                                <input type="file" class="form-control" id="image2" name="image2" required>
                                <img id="img-image3" class="img-fluid" width="100px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image3" class="form-label">Imagen3</label>
                                <input type="file" class="form-control" id="image3" name="image3" required>
                                <img id="img-image4" class="img-fluid" width="100px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image4" class="form-label">Imagen4</label>
                                <input type="file" class="form-control" id="image4" name="image4" required>
                                <img src="" id="img-image5" class="img-fluid" width="100px">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateImagesProductModalButton" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example', {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
        }
    });

    $(".updateCategories").on('click', function() {
        var id = $(this).data('id');

        $("#productId").val(id);

        $.ajax({
            url: '/admin/productos/' + id + '/categorias',
            type: 'GET',
            success: function(response) {
                $("#addCategoryModal").modal('show');
                $("#addCategoryModal .update-categories").html(response);
            }
        });
    });

    $(".updateProductImages").on('click', function() {
        var id = $(this).data('id');
        var image2 = $(this).data('image2');
        var image3 = $(this).data('image3');
        var image4 = $(this).data('image4');
        var image5 = $(this).data('image5');

        $("#productId").val(id);
        $("#updateImagesProductModal #img-image2").attr('src', image2);
        $("#updateImagesProductModal #img-image3").attr('src', image3);
        $("#updateImagesProductModal #img-image4").attr('src', image4);
        $("#updateImagesProductModal #img-image5").attr('src', image5);

        $("#updateImagesProductModal").modal('show');
    });

    $("#updateCategoriesButton").on('click', function() {
        var id = $("#productId").val();
        var categories = [];

        $("#addCategoryModal input[type=checkbox]:checked").each(function() {
            categories.push($(this).data('id'));
        });

        $.ajax({
            url: '/admin/productos/' + id + '/categorias',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                '_method': 'PUT',
                categories: categories
            },
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });

    $(".updateProduct").on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var description = $(this).data('description');
        var price = $(this).data('price');
        var in_stock = $(this).data('in_stock');
        var size = $(this).data('size');
        var large = $(this).data('large');
        var meters = $(this).data('meters');
        var category_id = $(this).data('category_id');
        var presentation = $(this).data('presentation');
        var area = $(this).data('area');
        var square_meters = $(this).data('square_meters');
        var applications = $(this).data('applications');
        var recycling = $(this).data('recycling');
        var life = $(this).data('life');
        var maintenance = $(this).data('maintenance');
        var weight = $(this).data('weight');
        var box_size = $(this).data('box_size');
        var installation_video = $(this).data('installation_video');

        $("#productId").val(id);

        $("#updateProductModal #name").val(name);
        $("#updateProductModal #description").val(description);
        $("#updateProductModal #price").val(price);
        $("#updateProductModal #in_stock").val(in_stock);
        $("#updateProductModal #size").val(size);
        $("#updateProductModal #category_id").val(category_id);
        $("#updateProductModal #large").val(large);
        $("#updateProductModal #meters").val(meters);
        $("#updateProductModal #presentation").val(presentation);
        $("#updateProductModal #area").val(area);
        $("#updateProductModal #square_meters").val(square_meters);
        $("#updateProductModal #applications").val(applications);
        $("#updateProductModal #recycling").val(recycling);
        $("#updateProductModal #life").val(life);
        $("#updateProductModal #maintenance").val(maintenance);
        $("#updateProductModal #weight").val(weight);
        $("#updateProductModal #box_size").val(box_size);
        $("#updateProductModal #installation_video").val(installation_video);

        $("#updateProductModal").modal('show');
    });

    $("#updateImagesProductModalButton").on('click', function() {
        var id = $("#productId").val();
        var formData = new FormData();

        if ($("#updateImagesProductModal #image")[0].files.length > 0) {
            formData.append('image2', $("#updateImagesProductModal #image")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image2")[0].files.length > 0) {
            formData.append('image3', $("#updateImagesProductModal #image2")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image3")[0].files.length > 0) {
            formData.append('image4', $("#updateImagesProductModal #image3")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image4")[0].files.length > 0) {
            formData.append('image5', $("#updateImagesProductModal #image4")[0].files[0]);
        }

        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');

        $.ajax({
            url: '/admin/productos/' + id + '/imagenes',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });

    $("#updateProductButton").on('click', function() {
        var id = $("#productId").val();
        var name = $("#updateProductModal #name").val();
        var description = $("#updateProductModal #description").val();
        var price = $("#updateProductModal #price").val();
        var in_stock = $("#updateProductModal #in_stock").val();
        var image = $("#updateProductModal #image").val();
        var category_id = $("#updateProductModal #category_id").val();
        var size = $("#updateProductModal #size").val();
        var large = $("#updateProductModal #large").val();
        var meters = $("#updateProductModal #meters").val();
        var presentation = $("#updateProductModal #presentation").val();
        var area = $("#updateProductModal #area").val();
        var square_meters = $("#updateProductModal #square_meters").val();
        var applications = $("#updateProductModal #applications").val();
        var recycling = $("#updateProductModal #recycling").val();
        var life = $("#updateProductModal #life").val();
        var maintenance = $("#updateProductModal #maintenance").val();
        var weight = $("#updateProductModal #weight").val();
        var box_size = $("#updateProductModal #box_size").val();
        var installation_video = $("#updateProductModal #installation_video").val();

        var formData = new FormData();

        if (image) {
            formData.append('image', $("#updateProductModal #image")[0].files[0]);
        }

        formData.append('name', name);
        formData.append('description', description);
        formData.append('price', price);
        formData.append('in_stock', in_stock);
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');
        formData.append('category_id', category_id);
        formData.append('size', size);
        formData.append('large', large);
        formData.append('meters', meters);
        formData.append('presentation', presentation);
        formData.append('area', area);
        formData.append('square_meters', square_meters);
        formData.append('applications', applications);
        formData.append('recycling', recycling);
        formData.append('life', life);
        formData.append('maintenance', maintenance);
        formData.append('weight', weight);
        formData.append('box_size', box_size);
        formData.append('installation_video', installation_video);

        $.ajax({
            url: '/admin/productos/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });

    $(".deleteProduct").on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            text: 'Desea eliminar este registro?',
            icon: 'error',
            confirmButtonText: 'Confirmar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then(function(result) {
            if (result.isConfirmed) {
                console.log('/admin/productos/' + id)
                $.ajax({
                    url: '/admin/productos/' + id,
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        _method: "DELETE"
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Eliminado!',
                            text: 'El registro ha sido eliminado',
                            icon: 'success',
                            confirmButtonText: 'Aceptar'
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            }
        });
    });
</script>
@endpush