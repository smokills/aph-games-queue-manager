<div class="modal fade" id="register_queue" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">New Queue Entry</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => route('queue.store')]) }}
                    @include('partials/queue/form', ['submit' => 'Add'])
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>