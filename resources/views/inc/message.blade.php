<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $erro)
                    <div class="alert alert-warning mt-3">
                        {{$erro}}
                    </div>
                @endforeach
            @endif
            
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{session('success')}}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-warning">
                    {{session('error')}}
                </div>
            @endif
        </div>
    </div>
</div>