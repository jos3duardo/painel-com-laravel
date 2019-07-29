<div class="card-body">
    <div class="son-form-body form-group">
        <label for="quantity">Quantidade</label>
        <input type="number" class="son-form-field form-control" name="quantity" id="quantity">
    </div>
    <div class="son-form-body form-group">
        <label for="product_id">Produto</label>
        <select name="product_id" id="product_id" class="son-form-field form-control">
            @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="card-footer">
    <div class="son-form-body form-group">
        <button class="btn btn-dark">Criar</button>
    </div>
</div>

