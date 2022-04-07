<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tag extends Component
{
    public ?string $identificacao = null;
    public ?string $origem = null;
    public ?string $destino = null;
    public ?string $produto = null;
    public ?int $patrimonio = null;
    public ?int $chamado = null;
    public ?string $descricao = null;

    public function print()
    {
        $this->dispatchBrowserEvent('print', view('tag.pdf', ['data' => $this->all()])->render());
    }


    public function render()
    {
        return view('livewire.tag');
    }
}
