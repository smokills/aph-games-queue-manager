@forelse ($stations as $station)
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h5>
                    {{ $station->name }}
                    &nbsp;

                    <a class="btn btn-primary btn-xs timer_start"
                        href="#" data-timer_id="station-timer-{{ $station->id }}"
                        data-timer-duration="{{ $station->duration }}">
                        <i class="glyphicon glyphicon-play"></i>
                    </a>

                    <a class="btn btn-primary btn-xs timer_stop"
                        href="#" data-timer_id="station-timer-{{ $station->id }}"
                        data-timer-duration="{{ $station->duration }}">
                        <i class="glyphicon glyphicon-stop"></i>
                    </a>
                    @component('components/label', ['class' => "pull-right station-timer-{$station->id}"])
                        @slot('type')
                            @switch($station->status)
                                @case('free')
                                    label-success
                                    @break
                                @case('idle')
                                    label-warning
                                    @break
                                @default
                                    label-danger
                            @endswitch
                        @endslot

                        {{ $station->status }}
                    @endcomponent
                </h5>
            </div>
            <div class="panel-body">
                <div class="timer align-center"
                id="station-timer-{{ $station->id }}">
                    {{ $station->duration }}:00
                </div>

                <hr>

                @foreach($station->games as $game)
                    <span>
                        @component('components/label')
                            @slot('type')
                                label-primary
                            @endslot

                            {{ $game->name }}
                        @endcomponent
                    </span>

                    &nbsp;
                @endforeach
            </div>
        </div>
    </div>
@empty
    <p>No bitch!</p>
@endforelse