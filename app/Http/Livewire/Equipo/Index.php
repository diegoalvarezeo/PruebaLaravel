<?php

namespace App\Exports;

namespace App\Http\Livewire\Equipo;

use App\Models\EquiposModel;
use Livewire\Component;
use Livewire\WithPagination;







class Index  extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nombre, $descripcion, $precio, $equipoID;
    public $search = '';





    protected function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            /* 'email' => ['required', 'email', 'not_in:' . auth()->user()->email], */
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function  guardarEquipo()
    {
        $validatedData = $this->validate();
        session()->flash("message", "Equipo guardado!");
        EquiposModel::create($validatedData);
        $this->dispatchBrowserEvent("close-model");
        $this->dispatchBrowserEvent('alert', ['message' => 'equipo guardado!']);
        $this->resetInput();
    }
    public function actualizarEquipo()
    {
        $validatedData = $this->validate();

        EquiposModel::where("id", $this->equipoID)->update([
            'nombre' => $validatedData["nombre"],
            'descripcion' => $validatedData["descripcion"],
            'precio' => $validatedData["precio"],

        ]);

        /* session()->flash("message", "Equipo actualizado exitosamente"); */
        $this->resetInput();
        $this->dispatchBrowserEvent('alert', ['message' => 'equipo actualizado exitosamente!']);
        $this->dispatchBrowserEvent("close-model");
    }


    public function editarEquipo($equipoID)
    {
        $equipo = EquiposModel::find($equipoID);
        if ($equipo) {
            $this->equipoID = $equipo->id;
            $this->nombre = $equipo->nombre;
            $this->descripcion = $equipo->descripcion;
            $this->precio = $equipo->precio;
        } else {
            return redirect()->to("/ejemplo");
        }
    }

    public function eliminarEquipo($equipoID)
    {
        $this->equipoID = $equipoID;
    }
    public function destruirEquipo()
    {
        EquiposModel::find($this->equipoID)->delete();

        $this->dispatchBrowserEvent('alert', ['message' => 'equipo eliminado exitosamente!']);
        $this->dispatchBrowserEvent("close-model");
    }

    public function closeModal()
    {
        $this->resetInput();
    }
    public function resetInput()
    {
        $this->nombre = '';
        $this->descripcion = '';
        $this->precio = '';
    }

    /* Exportar */
    public function export()
    {
        dd("export");
    }
    public function render()
    {
        $search = $this->search ?: '';
        $equipos = EquiposModel::where('nombre', 'like', '%' . $search . '%')->paginate(5);


        return view('livewire.equipo.index', ["equipos" => $equipos]);
    }
}
