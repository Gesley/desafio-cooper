<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

    {!! Form::label('value', 'Valor:') !!}
    {!! Form::text('value', null, ['class' => 'form-control', 'id' => 'money']) !!}

    {!! Form::label('quantity', 'Quantidade:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">

</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
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