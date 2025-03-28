<div class="form-group">
    <label for="url" class="required">Url <span>(*)</span></label>
    <input type="text" class="form-control"  value="{{ old('nb_url', $navbar->nb_url ?? '') }}" name="nb_url" >
    @if($errors->first('nb_url'))
        <span class="text-danger">{{ $errors->first('nb_url') }}</span>
    @endif
</div>