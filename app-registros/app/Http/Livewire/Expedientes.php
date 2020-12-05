<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ExpedienteModel;

class Expedientes extends Component
{
    public ExpedienteModel $expedientemodel;
    public $idexpediente,$expedientes,$numero_expediente,$asunto,$numero_documento,$folios,$remitente,$prioridad,$uo_destino,$estado,$observacion,$fefefefe;

    public $isOpen = 0;

    protected $listeners = ['showModal' => 'create', 'closeModal' => 'close'];

        
    public function render()
    {
        $this->expedientes = ExpedienteModel::all();
        return view('livewire.expedientes');
    }
    
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
        //$this->$fefefefe = "abrendod";
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        //$this->expediente = '';
        $this->numero_expediente = '';
        $this->asunto = '';
        $this->numero_documento = '';
        $this->folios = '';
        $this->remitente = '';
        $this->prioridad = '';
        $this->uo_destino = '';
        $this->estado = 1;
        $this->observacion = '';
        $this->idexpediente = '';

    }

    public function store()
    {
        $this->validate([
            'numero_expediente' => 'required',
            'asunto' => 'required',
            'numero_documento' => 'required',
            'folios' => 'required',
            'remitente' => 'required',
            'observacion' => 'required'

        ]);
   


        ExpedienteModel::updateOrCreate(['id' => $this->idexpediente], [
            'numero_expediente' => $this->numero_expediente,
            'asunto' => $this->asunto,
            'numero_documento' => $this->numero_documento,
            'folios' => $this->folios,
            'remitente' => $this->remitente,
            'observacion' => $this->observacion,
            'prioridad' => $this->prioridad,
            'uo_destino' => $this->uo_destino,
            'estado' => $this->estado
        ]);
  
        session()->flash('message', 
            $this->idexpediente ? 'Expediente Actualizado Correctamente.' : 'Expediente Creado Correctamente.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $expediente = ExpedienteModel::findOrFail($id);

        $this->idexpediente =$expediente->id;
        $this->numero_expediente = $expediente->numero_expediente;
        $this->asunto = $expediente->asunto;
        $this->numero_documento = $expediente->numero_documento;
        $this->folios = $expediente->folios;
        $this->remitente = $expediente->remitente;
        $this->observacion = $expediente->observacion;
        $this->estado = $expediente->estado;
        $this->prioridad = $expediente->prioridad;
        $this->uo_destino = $expediente->uo_destino;

        $this->openModal();
    }

    public function delete($id)
    {
        ExpedienteModel::find($id)->delete();
        session()->flash('message', 'Expediente Eliminado Correctamente.');
    }

}