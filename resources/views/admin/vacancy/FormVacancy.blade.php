@csrf

<div>
    <label class="form-label" for="charge">Cargo:</label>
    <input class="form-control" type="text" name="charge" id="charge" placeholder="Ingrese el cargo"
        value="{{ old('charge', $vacancy) }}">

    @error('charge')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label class="form-label" for="city">Ciudad:</label>
    <input class="form-control" type="text" name="city" id="city" placeholder="Ingrese la ciudad"
        value="{{ old('city', $vacancy) }}">
</div>

<div>
    <label class="form-label" for="company">Empresa:</label>
    <input class="form-control" type="text" name="company" id="company" placeholder="Ingrese la empresa"
        value="{{ old('company', $vacancy) }}">
</div>

<div>
    <label class="form-label" for="salary">Salario:</label>
    <input class="form-control" type="number" name="salary" id="salary" placeholder="Ingrese el salario"
        value="{{ old('salary', $vacancy) }}">
</div>

<div>
    <label class="form-label">Tipo de contrato:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="typeContract" id="undefined" value="Indefinido"
            @checked(old('typeContract', $vacancy) == 'Indefinido') checked>
        <label class="form-check-label" for="undefined">Indefinido</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="typeContract" id="fixed_term" value="Término Fijo"
            @checked(old('typeContract', $vacancy) == 'Término Fijo')>
        <label class="form-check-label" for="fixed_term">Término Fijo</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="typeContract" id="provision_service"
            value="Prestación de servicios" @checked(old('typeContract', $vacancy) == 'Prestación de servicios')>
        <label class="form-check-label" for="provision_service">Prestación de servicios</label>
    </div>
    @error('typeContract')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label class="form-label" for="title">Titulo:</label>
    <textarea class="form-control" name="title" id="title" rows="3"
        placeholder="Ingrese el título profesional requerido para la oferta">{{ old('title', $vacancy) }}</textarea>
    @error('title')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label class="form-label" for="requeriments">Requerimientos:</label>
    <textarea class="form-control" name="requeriments" id="requeriments" rows="3"
        placeholder="Ingrese los requisitos para la oferta">{{ old('requeriments', $vacancy) }}</textarea>
    @error('requeriments')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label class="form-label">Estado:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="state" id="earring" value="Pendiente"
            @checked(old('state', $vacancy) == 'Pendiente') checked>
        <label class="form-check-label" for="earring">Pendiente</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="state" id="defined" value="Definida"
            @checked(old('state', $vacancy) == 'Definida')>
        <label class="form-check-label" for="defined">Definida</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="state" id="cancelled" value="Cancelada"
            @checked(old('state', $vacancy) == 'Cancelada')>
        <label class="form-check-label" for="cancelled">Cancelada</label>
    </div>
    @error('state')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label class="form-label">Visibilidad:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visibility" id="post" value="1"
            @checked(old('visibility', $vacancy) == '1') checked>
        <label class="form-check-label" for="post">Publicar</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visibility" id="no-post" value="0"
            @checked(old('visibility', $vacancy) == '0')>
        <label class="form-check-label" for="no-post">No publicar</label>
    </div>
</div>
@error('visibility')
    <div class="text-small text-danger">{{ $message }}</div>
@enderror
</div>
