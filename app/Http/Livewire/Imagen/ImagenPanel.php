<?php

namespace App\Http\Livewire\Imagen;

use Livewire\WithFileUploads;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class ImagenPanel extends Component
{
    use WithFileUploads;
    public $imagen, $titulo, $identificador, $imagenID;
    public $imageToDelete;
    public $rutaImagen;





    public function mount()
    {
        $this->identificador = rand();
    }
    protected function rules()
    {
        return [
            'imagen' => 'nullable|required|image|max:1024', // 1MB Max
            'titulo' => 'required'

        ];
    }
    public function crearImage()
    {
        $this->validate([
            'imagen' => 'required|image|max:1024', // 1MB Max
            'titulo' => 'required'
        ]);
        $imagen = $this->imagen->store('imagenes', 'public');
        Image::create([
            'titulo' => $this->titulo,
            'imagen' => $imagen,
        ]);
        $this->resetInput();
        $this->dispatchBrowserEvent('alert', ['message' => 'imagen creada exitosamente!']);
        $this->identificador = rand();
    }
    public function closeModal()
    {
        $this->resetInput();
    }
    public function resetInput()
    {
        $this->titulo = '';
        $this->imagen = '';
    }


    public function actualizarImagen()
    {
        $validatedData = $this->validate();
        $imagenN = $this->imagen->store('imagenes', 'public');

        $imagendata = Image::find($this->imagenID);
        if ($imagenN) {
            $this->removeImage($imagendata->imagen);
            Image::where("id", $this->imagenID)->update([
                'imagen' => $imagenN,
                'titulo' => $validatedData["titulo"],
            ]);
        }
        Image::where("id", $this->imagenID)->update([

            'titulo' => $validatedData["titulo"],
        ]);






        $this->identificador = rand();

        /* session()->flash("message","Equipo actualizado exitosamente"); Hacerlo mejor con noticaciones dinamicas, sweet o toast*/

        $this->resetInput();
        $this->dispatchBrowserEvent("close-model");
        $this->dispatchBrowserEvent('alert', ['message' => 'equipo actualizado exitosamente!']);
    }


    public function editarImagen($imagenID)
    {
        $imagen = Image::find($imagenID);
        if ($imagen) {
            $this->imagenID = $imagen->id;
            $this->titulo = $imagen->titulo;
            $this->imagen = $imagen->imagen;
        } else {
            return redirect()->to("/ejemplo");
        }
    }

    public function eliminarImagen($imagenID)
    {
        /* Ruta */


        $imagen = Image::find($imagenID);
        $this->imagen = $imagen->imagen;

        $this->imagenID = $imagenID;
    }

    public function destruirImagen()
    {

        Storage::delete('public/' . $this->imagen);
        Image::find($this->imagenID)->delete();

        $this->dispatchBrowserEvent('alert', ['message' => 'imagen eliminada exitosamente!']);
        $this->dispatchBrowserEvent("close-model");
    }
    public function mostrarModal($rutaImagen)
    {
        $this->rutaImagen = $rutaImagen;
        $this->dispatchBrowserEvent('mostrar-modal-imagen');
    }

    public function removeImage($rutaImagen)
    {
        Storage::delete('public/' . $rutaImagen);
    }


    public function render()
    {
        $imagenes = Image::all();
        return view('livewire.imagen.imagen-panel', ['imagenes' => $imagenes]);
    }
}
