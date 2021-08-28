<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="addRemark">
        @csrf
        <input type="hidden" value="{{ $leadId }}" name="lead_id" />
        <div class="form-group">
            <textarea class="form-control" rows="5" wire:model.defer="remark" required></textarea>
            @error('remark') <span class="error error__msg">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit"><i class="fas fa-edit mr-2"></i>Add</button>
        </div>
    </form>
    <div class="remark__panel mt-3" id="remark__panel">
        @foreach ($remarks as $r)
        <div class="callout callout-{{ Arr::random($classes) }}">
            <h6 class="text-{{ Arr::random($classes) }}">{{ $r->creator->name }}</h6>

            <p>{{ $r->message }}</p>
        </div>
        @endforeach
    </div>
</div>