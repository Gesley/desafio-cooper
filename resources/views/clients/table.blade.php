<table class="table table-responsive" id="clients-table">
    <thead>
        <tr>
            <th>Cliente</th>
        <th>Endereço</th>
        <th>Cep</th>
        <th>Uf</th>
        <th>Municipio</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{!! $client->name !!}</td>
            <td>{!! $client->adress !!}</td>
            <td>{!! $client->cep !!}</td>
            <td>{!! $client->uf !!}</td>
            <td>{!! $client->municipio !!}</td>
            <td>{!! $client->bairro !!}</td>
            <td>{!! $client->rua !!}</td>
            <td>
                @if($client->status == 1)
                    Ativo
                @else
                    Inativo
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clients.edit', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>