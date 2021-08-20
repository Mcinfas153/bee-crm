<div>
    <i class="{{ $icon }} bg-{{ $class }}"></i>
    <div class="timeline-item">
        <span class="time"><i class="fas fa-clock mr-1 text-{{ $class }}"></i>
            {{ $time }}</span>
        <h3 class="timeline-header no-border">
            <a href="#" class="text-{{ $class }} mr-5">{{ $creator }}
            </a>
        </h3>
        <div class="timeline-body">
            {{ $message }}
        </div>
    </div>
</div>