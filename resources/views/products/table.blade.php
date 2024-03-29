<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Situação</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->name !!}</td>
            <td>R$ {!! number_format($product->value, 2, ',', '.') !!}</td>
            <td>{!! $product->quantity !!}</td>
            <td>
                @if($product->quantity >= 1)
                    Disponível
                @else
                    Indisponível
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>