@props(['icon' => null, 'title' => null, 'description' => null, 'items' => []])

<article class="card">
    @if($icon)
    <div class="card-icon">{{ $icon }}</div>
    @endif @if($title)
    <h3>{{ $title }}</h3>
    @endif @if($description)
    <p>{{ $description }}</p>
    @endif @if(!empty($items))
    <ul class="check-list">
        @foreach($items as $item)
        <li><span>âœ“</span> {{ $item }}</li>
        @endforeach
    </ul>
    @endif
</article>
