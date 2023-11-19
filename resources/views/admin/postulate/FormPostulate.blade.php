@csrf



<div>
    <label class="form-label">Desea postularse:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="queryPostulate" id="yes" value="Si"
            @checked(old('queryPostulate', $postulate) == 'Si') checked>
        <label class="form-check-label" for="yes">Si</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="queryPostulate" id="Not" value="No "
            @checked(old('queryPostulate', $postulate) == 'No')>
        <label class="form-check-label" for="Not">No </label>
    </div>

    @error('queryPostulate')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

