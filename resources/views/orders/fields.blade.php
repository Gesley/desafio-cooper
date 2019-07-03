<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Selecione o Produto:') !!}
    {!! Form::select('product_id', $products, null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Selecione o Cliente:') !!}
    {!! Form::select('client_id', $clients, null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantidade:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'id' => 'quantity', 'required' => 'required']) !!}
</div>

<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', 'Solicitante:') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Despachante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('despachante', 'Despachante:') !!}
    {!! Form::text('despachante', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orders.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>

    document.getElementById("money").onblur =function (){
        this.value = formatReal( this.value );
        document.getElementById("display").value = this.value

    }

    function formatReal( int )
    {
        var tmp = int+'';
        tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
        if( tmp.length > 6 )
            tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");

        return tmp;
    }

</script>