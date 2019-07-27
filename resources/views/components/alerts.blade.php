{{-- mensagem para tratamento do retorno--}}
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <h4>{{ $error }}</h4>
            </div>
        @endforeach
    </div>
@endif
@if (session('status'))
    <div class="alert alert-primary">
        <h4>{{ session('status') }}</h4>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <h4>{{ session('success') }}</h4>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <h4>{{ session('error') }}</h4>
    </div>
@endif
