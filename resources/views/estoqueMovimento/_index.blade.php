<div class="card son-form">
    <div class="card-body">
        <div class="row">
            <table class="table table-sm  table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Estoque</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movements as $movement)
                <tr>
                    <td>{{$movement->id}}</td>
                    <td>{{$movement->product->name}}</td>
                    <td>{{$movement->quantidade}}</td>
                    <td>{{$movement->product->estoque}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
