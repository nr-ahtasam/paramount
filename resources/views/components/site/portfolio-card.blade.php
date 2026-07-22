@props(['tag' => null, 'title' => null, 'description' => null, 'meta' => null])

<div class="bg-card border border-border/80 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
    <div class="h-48 bg-muted relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
        @if($tag)
            <div class="absolute top-4 left-4 bg-primary text-primary-foreground text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">{{ $tag }}</div>
        @endif
        <iconify-icon icon="lucide:car" class="absolute bottom-4 right-4 text-primary/20 text-6xl"></iconify-icon>
    </div>
    <div class="p-6 space-y-4">
        @if($title)
            <h3 class="font-heading font-bold text-xl text-primary group-hover:text-secondary transition-colors">{{ $title }}</h3>
        @endif
        @if($description)
            <p class="text-sm text-muted-foreground line-clamp-2">{{ $description }}</p>
        @endif
        <div class="pt-2 border-t border-border/60 flex items-center justify-between">
            <span class="text-xs text-muted-foreground font-semibold">{{ $meta }}</span>
            <span class="text-sm font-bold text-secondary flex items-center gap-1">View Details<iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon></span>
        </div>
    </div>
</div>
