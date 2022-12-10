<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $search = '';
    public $isActive = true;
    public $message;
    // public function mount()
    // {
    //     $this->fill(['message' => 'Please fill the form above!']);
    // }
    public function render()
    {
        return view('livewire.login-form');
    }
    
    public function resetFilters()
    {
        // $this->reset('search');
        // Will only reset the search property.
    
        // $this->reset(['search', 'isActive']);
        // Will reset both the search AND the isActive property.
    
        $this->resetExcept('search');
        // Will only reset the isActive property (any property but the search property).
    }

    public function validateMessage(){
        $this->message = $this->message . " ... ";
    }

    protected $rules = [
        'message' => 'required|string|min:6',
    ];
 
    public function save()
    {
        $this->validate();
        
    }
}
