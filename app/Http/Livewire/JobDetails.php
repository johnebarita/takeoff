<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Api\JobController;
use App\Models\PartUsage;
use App\Models\ShedStructure;
use App\Models\StructurePart;
use http\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class JobDetails extends Component
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
    public $client_ref = 'WC-00163';
    public $has_job = true;
    public $job = [];
    public $wind_zone;
    public $snow_load;
    public $cladding_colors;

    protected $rules = [
        'client_ref' => 'required',
    ];

    public function mount()
    {
        $this->wind_zone = ['High Wind' => 1.05, 'Very High Wind' => 1.38, 'Extra High Wind' => 1.69];
        $this->snow_load = ['Nil Snow' => 0.0, '0.9 kPa' => 1.1, '1.35 kPa' => 1.5, '1.8 kPa' => 1.8];
        $this->cladding_colors = ['Sandstone Grey','Ebony','Ironsand','Grey Friars','New Denim Blue','Mist Green'];


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


        //Todo Remove this later
        $result = json_decode(Http::acceptJson()->get('https://shedzone.net/api/jobs', ['client_ref' => $this->client_ref]));
        if (count($result) != 0) {
            $this->job = (json_decode(json_encode($result[0]), true));
            $this->has_job = true;
            $this->job['cladding_end_walls'] = ucwords(str_replace(',', ', ', str_replace(['[', '"', ']'], '',  $this->job['cladding_end_walls'])));
            $this->job['wall_color']= json_decode($this->job['wall_color'])->name;
            $this->job['num_bay'] = (str_replace('bay', '', $this->job['num_bay']) + 0);

        } else {
            $this->job=null;
            $this->has_job = false;
        }

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

        $result = json_decode(Http::acceptJson()->get('https://shedzone.net/api/jobs', ['client_ref' => $this->client_ref]));

        if (count($result) != 0) {
            $this->job = (json_decode(json_encode($result[0]), true));
            $this->has_job = true;
            $this->emit('standard',$this->job);
        } else {
            $this->job=null;
            $this->has_job = false;
        }

    }



    public function render()
    {
        return view('livewire.job-details');
    }
}
