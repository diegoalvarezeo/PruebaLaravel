<div>
    {{-- The whole world belongs to you. --}}
<div class="form-group">
    <div>
    <select class="form-select" aria-label="Default select example" wire:model='selectedPais'>
        <option value="" selected>Selecciona el pais</option>
        @foreach ($paises as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    </div>


    <br><br>
    <div>
    @if (!is_null($selectedPais))
        <select class="form-select" aria-label="Default select example" wire:model='selectedRegion'>
            <option value="" selected>Selecciona el pais</option>
            @foreach ($regiones as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    @endif
    </div>
    <br>
    <div>
    @if (!is_null($selectedRegion))
        <select class="form-select" aria-label="Default select example" wire:model='selectedCiudad'>
            <option value="" selected>Selecciona la ciudad</option>
            @foreach ($ciudades as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    @endif
    </div>
</div>
</div>
