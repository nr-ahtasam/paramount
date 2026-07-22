@props(['tag' => null, 'date' => null, 'title' => null, 'description' => null])

<div class="bg-card border border-border/60 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
    <div class="p-6 space-y-4">
        <div class="flex items-center justify-between text-xs text-muted-foreground">
            <span class="font-semibold text-secondary uppercase tracking-wider">{{ $tag }}</span>
            <span>{{ $date }}</span>
        </div>
        @if($title)
            <h3 class="font-heading font-bold text-lg text-primary group-hover:text-secondary transition-colors">{{ $title }}</h3>
        @endif
        @if($description)
            <p class="text-xs text-muted-foreground leading-relaxed">{{ $description }}</p>
        @endif
        <a href="#" class="inline-flex items-center gap-1 text-sm font-bold text-primary hover:text-secondary transition-colors">Read More<iconify-icon icon="lucide:arrow-right" class="text-xs"></iconify-icon></a>
    </div>
</div>
