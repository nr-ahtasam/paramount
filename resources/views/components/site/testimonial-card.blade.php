@props(['quote' => null, 'name' => null, 'role' => null])

<article class="testimonial">
    <div class="stars">★★★★★</div>
    @if($quote)
        <p class="quote">"{{ $quote }}"</p>
    @endif
    @if($name)
        <div class="person">{{ $name }}</div>
    @endif
    @if($role)
        <div class="meta">{{ $role }}</div>
    @endif
</article>
