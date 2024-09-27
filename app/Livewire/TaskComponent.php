<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public $tasks = [];
    public $title;
    public $description;
    public $modal=false;

    public function render()
    {
        return view('livewire.task-component');
    }

    private function clearFields(){
        $this->title='';
        $this->description='';
    }

    public function createTask(){
        $this->clearFields();
        $this->modal=true;
    }
    public function closeCreateModal(){
        $modal=false;
    }
}
