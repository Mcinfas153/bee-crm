<div>
    @foreach ($leads as $lead)
    <p>{{ $lead->name }}</p>
    @endforeach

    {{ $leads->links() }}
</div>