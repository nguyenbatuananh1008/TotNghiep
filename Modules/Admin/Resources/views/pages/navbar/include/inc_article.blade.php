<div class="form-group">
    <label for="exampleInputEmail1"> Menu <span>(*)</span></label>
    <select name="nb_id" class="form-control js-select2" tabindex="-1">
        @foreach($articles as $item)
            <option value="{{ $item->id }}">{{ $item->a_name }}</option>
        @endforeach
    </select>
</div>