<div class="box-body">
    {!! Form::normalInput('name','Name', $errors, $product) !!}

    {!! Form::normalInput('price','Price', $errors, $product) !!}

    {!! Form::normalTextarea('description','Description', $errors, $product) !!}

    {!! Form::normalInput('picture','Picture', $errors, $product) !!}
</div>
