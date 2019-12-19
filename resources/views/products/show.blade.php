<div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:3%">#</th>
                    <th style="width:24%">Nombre</th>
                    <th style="width:24%">Descripcion</th>
                    <th style="width:15%">Categoria</th>
                    <th style="width:8%">Stock</th>
                    <th style="width:10%">Precio</th>
            </thead>
        <tbody>
            <tr>
                <td data-th="Users">
                        @foreach ($products as $product)
                        <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->stock_id}}</td>
                        <td>$ {{$product->price}}</td>
                        <td><a href="{{url('products/'.$product->id.'/update')}}" class="btn btn-primary icono align-middle"><i class="fas fa-edit icono"></i></a>
						<td>
                            <form id='{{$product->id}}' class='form-delete' action="{{url('products/'.$product->id)}}" method="post">
							@method('DELETE')
							@csrf
                            <button type="submit" class="btn btn-danger"value=""><i class="fas fa-trash-alt icono align-middle"></i></button>
						</form></td> 
                        </tr> 
                        @endforeach
        </tbody>
        </table>
    </div>