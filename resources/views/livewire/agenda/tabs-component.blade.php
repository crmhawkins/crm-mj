<div>
    @mobile
        @if ($evento != null)
            @if ($tab == 'tab1')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block" wire:click="cambioTab('tab1')">Añadir
                                cita</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab2')">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('agenda.create')
            @elseif ($tab == 'tab2')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab1')">Añadir
                                cita</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block"
                                wire:click="cambioTab('tab2')">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('agenda.edit', ['identificador' => $evento], key('tab2'))
            @elseif ($tab == 'tab3')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab1')">Añadir
                                cita</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block" wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('agenda.index')
            @elseif ($tab == 'tab4')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab1')">Añadir
                                cita</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab2')">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
            @endif
        @else
            @if ($tab == 'tab1')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block" wire:click="cambioTab('tab1')">Añadir
                                cita</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-secondary btn-block"
                                wire:click="cambioTab('tab2')">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('agenda.create')
            @elseif ($tab == 'tab3')
                <div style="border-bottom: 1px solid black !important;">
                    <div class="row">
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning text-black btn-block"
                                wire:click="cambioTab('tab1')">Añadir cita</button>
                        </div>
                        <div class="ms-auto col-6 d-grid gap-2">
                            <button type="button" class="btn btn-outline-secondary btn-block"
                                wire:click="cambioTab('tab2')">Editar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ms-auto col-12 d-grid gap-2">
                            <button type="button" class="btn btn-warning btn-block" wire:click="cambioTab('tab3')">Ver
                                agenda</button>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                @livewire('agenda.index')
            @endif
        @endif
    @elsemobile
        @if ($evento != null)
            @if ($tab == 'tab1')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab1')">
                            <h3>Añadir cita</h3>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab2')">
                            <h5>Editar</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab3')">
                            <h5>Ver agenda</h5>
                        </button>
                    </li>
                </ul>

                @livewire('agenda.create')
            @elseif ($tab == 'tab2')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab1')">
                            <h5>Añadir cita</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab2')">
                            <h3>Editar</h3>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab3')">
                            <h5>Ver agenda</h5>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('agenda.edit', ['identificador' => $evento], key('tab3'))

                <br>
            @elseif ($tab == 'tab3')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab1')">
                            <h5>Añadir cita</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab2')">
                            <h5>Editar</h5>
                        </button>
                    </li>
                    <li class="nav-item active">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab3')">
                            <h3>Ver agenda</h3>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('agenda.index')
            @endif
        @else
            @if ($tab == 'tab1')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab1')">
                            <h3>Añadir cita</h3>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-black" wire:click.prevent="cambioTab('tab2')" disabled>
                            <h5>Editar</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab3')">
                            <h5>Ver agenda</h5>
                        </button>
                    </li>
                </ul>
                <br>

                @livewire('agenda.create')
            @elseif ($tab == 'tab3')
                <ul class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <button class="nav-link" style="color: #ae9700;" wire:click.prevent="cambioTab('tab1')">
                            <h5>Añadir cita</h5>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-black" wire:click.prevent="cambioTab('tab2')" disabled>
                            <h5>Editar</h5>
                        </button>
                    </li>
                    <li class="nav-item active">
                        <button class="nav-link active" style="color: #ffaa00;" wire:click.prevent="cambioTab('tab3')">
                            <h3>Ver agenda</h3>
                        </button>
                    </li>
                </ul>
                <br>
                @livewire('agenda.index')
            @endif
        @endif
    @endmobile

</div>
