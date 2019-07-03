<table class="table table-responsive" id="orders-table">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Solicitante</th>
            <th>Despachante</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{!! $order->products->name !!}</td>
            <td>{!! $order->client->name !!}</td>
            <td>{!! $order->products->value !!}</td>
            <td>{!! $order->quantity !!}</td>
            <td>{!! $order->solicitante !!}</td>
            <td>{!! $order->despachante !!}</td>
            <td>
                {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
{{--                    <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>