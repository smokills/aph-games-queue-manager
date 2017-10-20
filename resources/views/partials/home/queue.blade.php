<div class="modal fade" id="queue_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Queue
                </h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Needed Stations</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($queues as $queue)
                            <tr>
                                <td>{{ $queue->id }}</td>
                                <td>{{ $queue->type }}</td>
                                <td>{{ $queue->needed_stations }}</td>
                                <td></td>
                            </tr>
                        @empty
                            The queue is empty...
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>