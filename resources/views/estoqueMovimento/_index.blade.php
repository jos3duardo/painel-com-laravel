<div class="card son-form">
    <div class="card-body">
        <div class="row">
            <table class="table table-sm  table-bordered">
                <thead>
                <tr>
                    <th width="3%" class="text-center">#</th>
                    <th width="50%">Produto</th>
                    <th width="5%" class="text-center">Quant</th>
                    <th width="5%" class="text-center">Estoque</th>
                    <th width="10%" class="text-right">Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movements as $movement)
                <tr>
                    <td class="text-center">{{$movement->id}}</td>
                    <td>{{$movement->product->name}}</td>
                    <td class="text-center">{{$movement->quantidade}}</td>
                    <td class="text-center">{{$movement->product->estoque}}</td>
                    <td class="text-right">R$ {{number_format($movement->product->valor, 2, ',','.') }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
