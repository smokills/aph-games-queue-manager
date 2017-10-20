<script type="text/javascript">
    @foreach (session('flash_notification', collect())->toArray() as $notification)
        window.toastr.{{ $notification['level'] }}("{{ $notification['message'] }}");
    @endforeach
</script>

{{ session()->forget('flash_notification') }}