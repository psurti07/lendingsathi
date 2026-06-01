<form method="POST" action="{{ $action }}" id="easebuzzForm">
    @foreach($data as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
</form>

<script>
    document.getElementById('easebuzzForm').submit();
</script>