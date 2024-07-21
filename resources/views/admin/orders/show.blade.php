<table class="table">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->products as $product)
        <tr>
            <td><img src="{{ asset('/images/' . $product->image) }}" alt="Imagen" style="width: 30px;" /></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->pivot->quantity }}</td>
            <td>{{ $product->pivot->total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Información de la orden</p>

<p>Nombre: {{ $order->full_name }}</p>
<p>Contacto: {{ $order->contact }}</p>
<p>Teléfono: {{ $order->phone }}</p>
<p>Email: {{ $order->email }}</p>