@props(['eyebrow' => null, 'title' => null, 'description' => null, 'align' =>
'center'])

<div class="section-title text-{{ $align }}">
    @if($eyebrow)
    <span class="eyebrow">{{ $eyebrow }}</span>
    @endif @if($title)
    <h2>{{ $title }}</h2>
    @endif @if($description)
    <p>{{ $description }}</p>
    @endif
</div>
