<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\Livewire;

class ContactForm extends Component
{
    protected $rules = [
        'message' => 'required|string|min:10',
        'email' => 'required|string|min:6',
        'name' => 'required|string|min:6',
    ];
    public $email;
    public $name;
    public $message;
    public $errorMessage;

    public function name_field_is_required_for_saving_a_contact()
    {
        Livewire::test('contact-form')
            ->set('name', 'Paul Byamasu')
            ->set('email', 'paul@gmail.com')
            ->set('message', 'This is a test message from the test case from the contact form')
            ->assertHasNoErrors(['name' => 'required'])
            ->assertHasNoErrors(['email' => 'required'])
            ->assertHasNoErrors(['message' => 'required']);
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
    public function subscribe(){
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ]);

        $this->resetFilters();

        return redirect()->to('/sigin');
    }
    
    public function updated($propertyName)
    {
        
        // session()->flash('message', 'You successfully updated the page.');

        $this->validateOnly($propertyName, [
            'name' => 'min:6',
            'email' => 'email',
            'message' => 'min:10',
        ]);
    }    
    
    public function resetFilters()
    {
    
        $this->reset(['name', 'email', 'message']);
    
    }
}
