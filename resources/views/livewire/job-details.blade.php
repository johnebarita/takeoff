<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Take Off / Job Name') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"
         x-data="{step:0}">

        <div x-transition:enter="transition transform duration-300"
             x-transition:enter-start="-translate-x-full opacity-30  ease-in"
             x-transition:enter-end="translate-x-0 opacity-100 ease-out"
             x-transition:leave="transition transform duration-300"
             x-transition:leave-start="translate-x-0 opacity-100 ease-out"
             x-transition:leave-end="-translate-x-full opacity-0 ease-in"
             x-show="step==0">
            <div>
                <div class="w-full flex justify-between mb-4 font-bold">
                    <div class="text-lg ">
                        Job & Client Info
                    </div>
                    <div
                        class=" flex  font-bold cursor-default {{!$job?'opacity-50 hover:text-gray-600':'hover:text-blue-600'}}"
                        @click="{step=2}" wire:click="$emit('standard',{{json_encode($job)}})">
                        <span class="mr-2">Standard Take Off</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex justify-between space-x-4">
                    <div class="w-1/2">
                        <div class="flex justify-between space-x-4">
                            <div class="w-full">
                                <x-jet-label class="font-bold ">Client Ref
                                    @if(!$has_job)
                                        <span class="ml-5 text-red-500 text-xs italic">Client Reference not found</span>
                                    @endif
                                </x-jet-label>
                                <x-jet-input wire:model="client_ref" class="mt-1 w-full" type="text"/>
                            </div>
                            <div class="w-full">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Date</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="date"
                                             value="{{($job? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$job['created_at'])->format('Y-m-d'):'')}}"/>
                            </div>
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Job Name</x-jet-label>
                            <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}}  disabled:opacity-50" type="text"
                                         wire:model="job.job_name"
                                         value="{{ucwords($job? $job['job_name']:'')}}"/>
{{--                            value="{{($job? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$job['created_at'])->format('d/m/Y'):'')}}"/>--}}
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Job Site</x-jet-label>
                            <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                         wire:model="job.job_site"
                                         value="{{ucwords($job? $job['job_site']:'')}}"/>
                        </div>
                        <div class="mt-2 flex space-x-4 w-full">
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}} w-full">Earthquake Zone</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.earthquake_zone">
                                    @foreach(range(1,4) as $num)
                                        <option value="{{$num}}">{{$num}}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Snow Loading</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.snow_load">
                                    @foreach($snow_load as $key=>$value)
                                        <option value="{{$key}}">{{$key}}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Wind Zone</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.wind_load">
                                    @foreach($wind_zone as $key=>$value)
                                        <option value="{{$key}}">{{$key}}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Sea Spray Zone</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.sea_spray_zone">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </x-input.select>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">

                        <div class="flex justify-between space-x-4">
                            <div class="w-full">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Merchant</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="Carters"/>
                            </div>
                            <div class="w-full">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Branch</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"/>
                            </div>
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Client Name</x-jet-label>
                            <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                         value="{{ucwords($job? $job['client_name']:'')}}"/>
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Email</x-jet-label>
                            <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                         value="{{ucwords($job? $job['email']:'')}}"/>
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Mobile</x-jet-label>
                            <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                         value="{{ucwords($job? $job['mobile']:'')}}"/>
                        </div>
                    </div>
                </div>
                <div class="mt-5 w-full text-lg mb-4 font-bold">
                    Building Details & Specifications
                </div>
                <div class="flex justify-between space-x-8">
                    <div class="w-2/5">
                        <div class="flex justify-between space-x-4">
                            <div class="w-full">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Building Type</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['building_type']:'')}}"/>

                            </div>
                            <div class="w-full">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Number Of Bays</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.num_bay">
                                    @foreach(range(1,6) as $num)
                                        <option value="{{$num}}">{{$num}}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                        </div>
                        <div class="mt-2 w-full">
                            <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Bay Facade</x-jet-label>
                            @if($job)
                                <div class="">
                                    @foreach(json_decode($job['bay_facades']) as $key=>$bay)
                                        @if($bay->type=='Cladded')
                                            <div
                                                class="">{{($key+1).'.'.$bay->type.' '.($bay->pa=='no'?' w/o pa door':' with PA door')}}</div>
                                        @elseif($bay->type=='Roller Door')
                                            <div
                                                class="">{{($key+1).'.'.$bay->type.' '.$bay->width.' x '.$bay->height}}</div>
                                        @else
                                            <div class="">{{($key+1).'.'.$bay->type}}</div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="mt-2 flex space-x-4">
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Building Depth</x-jet-label>
                                <x-jet-input wire:model="job.building_depth" class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="number" wire:model="job.building_depth"
                                             value="{{($job? $job['building_depth']:'')}}"/>
                            </div>
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Front Height</x-jet-label>
                                <x-jet-input wire:model="job.front_height" class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="number" wire:model="job.front_height"
                                             value="{{($job? $job['front_height']:'')}}"/>
                            </div>
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Rear Height</x-jet-label>
                                <x-jet-input wire:model="job.rear_height" class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="number" wire:model="job.rear_height"
                                             value="{{($job? $job['rear_height']:'')}}"/>
                            </div>

                        </div>
                    </div>
                    <div class="w-3/5">
                        <div class="flex space-x-4">
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Apex Height</x-jet-label>
                                <x-jet-input disabled="{{$job['building_type']=='Mono Pitch'?'true':'false'}}" class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{($job? $job['apex_height']:'')}}"/>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Bay Spacing</x-jet-label>
                                <x-jet-input  wire:model="job.bay_spacing " class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text" wire:model="job.bay_spacing"
                                             value="{{($job? $job['bay_spacing']:'')}}"/>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Wind Column/Pole</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.wind_column_pole">
                                        <option value="Column">Column</option>
                                        <option value="Pole">Pole</option>
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Floor Type</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.floor_type">
                                    <option value="Earth">Earth</option>
                                    <option value="Concrete">Concrete</option>
                                </x-input.select>
                            </div>
                        </div>
                        <div class="mt-2 flex space-x-4">
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Roof Cladding</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.roof_cladding">
                                    <option value="Corrugated">Corrugated</option>
                                    <option value="Trapezoidal">Trapezoidal</option>
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Wall Cladding</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.wall_cladding">
                                    <option value="Corrugated">Corrugated</option>
                                    <option value="Trapezoidal">Trapezoidal</option>
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Color</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.wall_color">
                                    @foreach($cladding_colors as $colors)
                                       <option value="{{$colors}}">{{$colors}}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Roofing Pitch</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                    value="{{($job? $job['roof_pitch']:'')}}">
                                </x-jet-input>
                            </div>
                        </div>
                        <div class="mt-2 flex space-x-4">
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">PA Door</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.pa_door">
                                    <option value="none">None</option>
                                    <option value="RH End Wall Front">RH End Wall Front</option>
                                    <option value="LH End Wall Front">LH End Wall Front</option>
                                </x-input.select>

                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Cladding On End Walls</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{($job? $job['cladding_end_walls']:'')}}"/>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Timber</x-jet-label>
                                <x-input.select class="mt-1 w-full  {{ !$job?'opacity-50':''}}" wire:model="job.timber_option">
                                    <option value="rough sawn">Rough Sawn</option>
                                    <option value="gauged">Gauged</option>
                                </x-input.select>
                            </div>
                            <div class="w-1/4">
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Girt Size</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{($job? $job['grit_size']:'')}}"/>
                            </div>
                        </div>
                        <div class="mt-2 flex space-x-4">
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Spouting Downpipes
                                </x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['spouting_downpipes']:'')}}"/>
                            </div>

                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Wall Underlay Wrap
                                </x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['wall_underlay_wrap']:'')}}"/>
                            </div>
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Water Tank</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['water_tank']:'')}}"/>
                            </div>
                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}}">Clearspan</x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['clearspan']:'')}}"/>
                            </div>
                        </div>
                        <div class="mt-2 flex space-x-4 justify-between">

                            <div>
                                <x-jet-label class="font-bold {{!$job?'opacity-50':''}} truncate">Roofing White underlay
                                    & Netting
                                </x-jet-label>
                                <x-jet-input class="mt-1 w-full {{ !$job?'opacity-50':''}} " type="text"
                                             value="{{ucwords($job? $job['roofing_white_underlay']:'')}}"/>
                            </div>
                            <div class=" m-5 flex hover:text-blue-600 font-bold cursor-default" @click="{step=1}">
                                <span class="mr-2">Custom Take Off</span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-transition:enter="transition transform duration-300"
             x-transition:enter-start="-translate-x-full opacity-30  ease-in"
             x-transition:enter-end="translate-x-0 opacity-100 ease-out"
             x-transition:leave="transition transform duration-300"
             x-transition:leave-start="translate-x-0 opacity-100 ease-out"
             x-transition:leave-end="-translate-x-full opacity-0 ease-in"
             x-show="step==1">

            <div class=" ml-5 mb-5 flex hover:text-blue-600 font-bold cursor-default" @click="{step=0}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="ml-2">Back</span>
            </div>
            <div class="flex">
                <div class="w-64"></div>
                <div class="w-full flex justify-end">
                    @foreach($structures as $loop_structure)
                        <div wire:click="selectStructure({{$loop_structure->id}})"
                             class="{{$selected_structure == $loop_structure->id?'bg-blue-500 hover:bg-blue-700':'bg-gray-500 hover:bg-gray-700'}}
                                 text-white font-bold py-2 px-4 rounded-full mx-2 truncate cursor-default">
                            {{$loop_structure->name}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex mt-5">

                <div class="w-64 mt-2">
                    <div class="font-bold py-2 px-4 rounded-full m-2 truncate">Parts</div>
                    @foreach($parts as $loop_part)
                        <div wire:click="selectPart({{$loop_part->id}})"
                             class="{{$selected_part==$loop_part->id?'underline text-blue-600':''}} font-bold py-2 px-4 rounded-full m-2 cursor-default truncate">
                            {{$loop_part->name}}
                        </div>
                    @endforeach
                </div>
                <div class="w-full mt-2 border border-gray-400">
                    <div class="m-5 flex">
                        <div class="w-40">
                            Section
                        </div>
                        <div class="w-full space-y-2">
                            <div class="flex">
                                <label for="" class="w-44 text-right py-2 pr-5"> Set </label>
                                <select name="" id="" class="rounded-md w-80  h-8 pt-0 pb-0">
                                    <option value="">None</option>
                                    @foreach($sets as $key=>$set)
                                        <option value=""{{$key==0?'selected':''}}>{{$set->set}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex">
                                <label for="" class="w-44 text-right py-2 pr-5"> Override </label>
                                <select name="" id="" class="rounded-md w-80   h-8 pt-0 pb-0">
                                    <option value="" selected></option>
                                    @foreach($set_overrides as $override)
                                        <option value="">{{$override->override}}</option>
                                    @endforeach
                                </select>
                                @if($part->hasQty)
                                    <label for="" class="w-20 text-right py-2 pr-5"> Qty </label>
                                    <input type="text" class="w-20 rounded-md   h-8 pt-0 pb-0">
                                @endif


                            </div>
                            <div class="flex">
                                <div class="w-20"></div>
                                @if($part->hasDepth)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Depth </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasThickness)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Thickness </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasHeight)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Height </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasWidth)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Width </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasLength)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Length </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasEnter)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Enter </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                                @if($part->hasLeave)
                                    <label for="" class="w-24 text-right py-2 pr-5"> Leave </label>
                                    <input type="text" class="w-20 rounded-md  h-8 pt-0 pb-0">
                                @endif
                            </div>
                            <div class="flex">
                                <label for="" class="w-44 text-right py-2 pr-5"> Total </label>
                                <input type="text" class="w-20 rounded-md   h-8 pt-0 pb-0">
                            </div>
                        </div>
                    </div>
                    <div class="m-5 flex">
                        <div class="w-full space-y-2">
                            <table class=" w-full components-table">
                                <thead>
                                <tr>
                                    <th>Component</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th class="truncate">Extra 1</th>
                                    <th class="truncate">Extra 2</th>
                                    <th>Qty</th>
                                    <th>Usage</th>
                                    <th>Waste</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($components as $component)
                                    <tr>
                                        <td class="text-blue-600 underline w-4 truncate">{{$component->name}}</td>
                                        <td class="w-4 truncate"></td>
                                        <td class="truncate"></td>
                                        <td class="w-4 truncate"></td>
                                        <td class="w-4 truncate"></td>
                                        <td class="w-8 truncate">test</td>
                                        <td class="w-4 truncate">
                                            <select name="" id="" class="rounded-md h-8 pt-0 pb-0 ">
                                                <option {{$component->part_usage_id== null ?'selected':''}} value=""
                                                        class="">NONE
                                                </option>
                                                @foreach($usages as $usage)
                                                    <option
                                                        {{$component->part_usage_id== $usage->id?'selected':''}} value="{{$usage->id}}">{{strtoupper($usage->name)}} </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="w-4 truncate">{{$component->waste??0}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div x-transition:enter="transition transform duration-300"
             x-transition:enter-start="-translate-x-full opacity-30  ease-in"
             x-transition:enter-end="translate-x-0 opacity-100 ease-out"
             x-transition:leave="transition transform duration-300"
             x-transition:leave-start="translate-x-0 opacity-100 ease-out"
             x-transition:leave-end="-translate-x-full opacity-0 ease-in"
             x-show="step==2">
            <div class=" mb-5 flex hover:text-blue-600 font-bold cursor-default" @click="{step=0}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="ml-2">Back</span>
            </div>
            <div class=" flex justify-center">
                @if($job!=null)
                    <livewire:standard-take-off/>
                @endif
            </div>
        </div>
    </div>
</div>

