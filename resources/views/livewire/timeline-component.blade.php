<div>
    <i class="{{ $icon }} bg-{{ $class }}"></i>
    <div class="timeline-item">
        <span class="time"><i class="fas fa-clock mr-1 text-{{ $class }}"></i>
            {{ $time }}</span>
        <h5 class="timeline-header no-border">
            <a href="#" class="text-{{ $class }}">{{ $creator }}
            </a>
        </h5>
        <div class="timeline-body">
            {{ $message }}
        </div>
    </div>
</div>