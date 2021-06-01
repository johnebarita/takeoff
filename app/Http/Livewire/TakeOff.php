<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Api\JobController;
use App\Models\PartUsage;
use App\Models\ShedStructure;
use App\Models\StructurePart;
use http\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class TakeOff extends Component
{
    public $structures;
    public $selected_structure;
    public $selected_part;
    public $parts;
    public $structure;
    public $part;
    public $components;
    public $usages;
    public $sets;
    public $set_overrides;

    public $client_ref;
    public $has_job = false;

    public $job;
    protected $rules = [
        'client_ref' => 'required',
    ];

    public function mount()
    {

        $this->structures = ShedStructure::with('parts.components.usage')->get();
        $this->usages = PartUsage::all();
        $this->structure = $this->structures[0];
        $this->parts = $this->structure->parts;
        $this->part = $this->parts[0];
        $this->selected_structure = $this->structure->id;
        $this->selected_part = $this->part->id;
        $this->components = $this->part->components;
        $this->sets = $this->part->sets;
        $this->set_overrides = $this->part->overrides;

    }

    public function selectStructure($id)
    {

        $this->structure = ShedStructure::with('parts.components.usage')->find($id);
        $this->selected_structure = $id;
        $this->parts = $this->structure->parts;
        $this->part = $this->parts[0];
        $this->selected_part = $this->part->id;
        $this->components = $this->part->components;
        $this->sets = $this->part->sets;
        $this->set_overrides = $this->part->overrides;
    }

    public function selectPart($id)
    {
        $this->selected_part = $id;
        $this->part = StructurePart::with('components.usage')->find($id);
        $this->components = $this->part->components;
        $this->sets = $this->part->sets;
        $this->set_overrides = $this->part->overrides;
    }

    public function updatedClientRef()
    {
        //TODO update this please later

        $result = json_decode(Http::acceptJson()->get('shed.test/api/jobs', ['client_ref' => $this->client_ref]));
        dd($result);
//        if (count($result) != 0) {
//            $this->job = $result[0];
//            $this->has_job = false;
//        } else {
//            $this->has_job = true;
//        }
    }

    public function render()
    {
        return view('livewire.take-off');
    }
}
