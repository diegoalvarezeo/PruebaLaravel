<?php

namespace App\Http\Livewire\Dropdown;

use Illuminate\Support\Collection;
use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\Region;


use Livewire\Component;

class DropdownPanel extends Component
{
    public $selectedPais = null;

    public $selectedRegion = null;
    public $selectedCiudad = null;


    /* NEW */
    public $paises;
    public $regiones;
    public $ciudades;
    public function mount()
    {
        $this->paises = Pais::all();

        $this->regiones = collect();

        $this->ciudades = collect();
    }
    public function render()
    {
        return view('livewire.dropdown.dropdown-panel', ['pais' => Pais::all()]);
    }
    public function updatedSelectedPais($pais_id)
    {
        $this->regiones = Region::where('pais_id', $pais_id)->get();
        $this->selectedRegion = NULL;
    }
    public function updatedSelectedRegion($region_id)
    {
        if (!is_null($region_id)) {
            $this->ciudades = Ciudad::where('region_id', $region_id)->get();
        }
        $this->selectedCiudad = null;
    }
}
