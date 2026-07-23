@extends('layouts.app')

@section('title', 'Paramount | Global Presence')

@section('content')
    <main class="w-full">
        <section class="relative overflow-hidden bg-primary py-24 text-primary-foreground">
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary to-secondary opacity-95"></div>
            <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-6 lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-border/20 bg-background/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-secondary">
                        <iconify-icon icon="lucide:globe" class="text-sm"></iconify-icon>
                        Worldwide Operations
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-foreground/70">
                            Global Presence
                        </p>
                        <h1 class="font-heading text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                            A connected global network built for supply confidence and local support.
                        </h1>
                    </div>
                    <p class="max-w-3xl text-lg leading-relaxed text-primary-foreground/80">
                        Paramount supports customers through strategic hubs, manufacturing facilities, export channels,
                        and distribution partnerships that ensure rapid availability and technical responsiveness across
                        major industrial markets.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-5 rounded-2xl border border-border/20 bg-background/10 p-8 shadow-2xl backdrop-blur-md lg:col-span-5">
                    <div>
                        <p class="font-heading text-3xl font-extrabold">20+</p>
                        <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Countries Served</p>
                    </div>
                    <div>
                        <p class="font-heading text-3xl font-extrabold">5</p>
                        <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Regional Hubs</p>
                    </div>
                    <div>
                        <p class="font-heading text-3xl font-extrabold">3</p>
                        <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Key Export Regions</p>
                    </div>
                    <div>
                        <p class="font-heading text-3xl font-extrabold">24/7</p>
                        <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Partner Support</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-start">
                <div class="min-h-[480px] overflow-hidden rounded-3xl border border-border bg-card p-8 shadow-xl lg:col-span-7">
                    <div class="relative flex h-full items-center justify-center">
                        <div class="relative aspect-[16/9] w-full max-w-3xl overflow-hidden rounded-3xl border border-dashed border-border bg-muted/70">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <iconify-icon icon="lucide:globe" class="text-[180px] text-primary/10"></iconify-icon>
                            </div>
                            <div class="absolute left-[22%] top-[24%] flex flex-col items-center gap-1">
                                <span class="h-4 w-4 animate-ping rounded-full bg-secondary"></span>
                                <span class="rounded-full bg-background px-2 py-1 text-[11px] font-bold text-primary shadow-sm">Houston HQ</span>
                            </div>
                            <div class="absolute left-[48%] top-[30%] flex flex-col items-center gap-1">
                                <span class="h-4 w-4 animate-ping rounded-full bg-secondary"></span>
                                <span class="rounded-full bg-background px-2 py-1 text-[11px] font-bold text-primary shadow-sm">Rotterdam</span>
                            </div>
                            <div class="absolute right-[17%] top-[34%] flex flex-col items-center gap-1">
                                <span class="h-4 w-4 animate-ping rounded-full bg-secondary"></span>
                                <span class="rounded-full bg-background px-2 py-1 text-[11px] font-bold text-primary shadow-sm">Dubai</span>
                            </div>
                            <div class="absolute bottom-[26%] right-[20%] flex flex-col items-center gap-1">
                                <span class="h-4 w-4 animate-ping rounded-full bg-secondary"></span>
                                <span class="rounded-full bg-background px-2 py-1 text-[11px] font-bold text-primary shadow-sm">Singapore</span>
                            </div>
                            <div class="absolute bottom-[22%] left-[34%] flex flex-col items-center gap-1">
                                <span class="h-4 w-4 animate-ping rounded-full bg-secondary"></span>
                                <span class="rounded-full bg-background px-2 py-1 text-[11px] font-bold text-primary shadow-sm">São Paulo</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 lg:col-span-5">
                    <div class="space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Interactive Map</p>
                        <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                            Global footprint with regional intelligence and operational resilience.
                        </h2>
                    </div>
                    <p class="leading-relaxed text-muted-foreground">
                        Our global structure is designed to combine central quality control with agile regional
                        execution. This ensures faster lead times, closer customer service, and dependable product flow
                        for automotive, industrial, marine, and energy clients.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 rounded-2xl border border-border bg-muted p-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-primary-foreground">
                                <iconify-icon icon="lucide:map-pin" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <h3 class="mb-1 font-heading text-lg font-bold text-primary">Headquarters & Regional Offices</h3>
                                <p class="text-sm text-muted-foreground">
                                    Core commercial and technical coordination centers across strategic markets.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 rounded-2xl border border-border bg-muted p-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-primary-foreground">
                                <iconify-icon icon="lucide:truck" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <h3 class="mb-1 font-heading text-lg font-bold text-primary">Distribution Network</h3>
                                <p class="text-sm text-muted-foreground">
                                    Regional partner channels support reliable product movement and local inventory responsiveness.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-muted py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 max-w-3xl space-y-2">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Regional Hubs</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                        Strategic locations that power service, logistics, and market reach.
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="space-y-3 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="text-sm font-bold uppercase tracking-wider text-secondary">North America</p>
                        <h3 class="font-heading text-xl font-bold text-primary">Houston</h3>
                        <p class="text-sm text-muted-foreground">
                            Corporate headquarters, technical support leadership, and regional supply coordination.
                        </p>
                    </div>
                    <div class="space-y-3 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="text-sm font-bold uppercase tracking-wider text-secondary">Europe</p>
                        <h3 class="font-heading text-xl font-bold text-primary">Rotterdam</h3>
                        <p class="text-sm text-muted-foreground">
                            Gateway for European distribution, manufacturing support, and export operations.
                        </p>
                    </div>
                    <div class="space-y-3 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="text-sm font-bold uppercase tracking-wider text-secondary">Asia-Pacific</p>
                        <h3 class="font-heading text-xl font-bold text-primary">Singapore</h3>
                        <p class="text-sm text-muted-foreground">
                            Regional hub for marine customers, industrial supply, and strategic trade connectivity.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 px-6 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <iconify-icon icon="lucide:layers" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="mb-2 font-heading text-lg font-bold text-primary">Supply Chain Visibility</h3>
                    <p class="text-sm text-muted-foreground">
                        Integrated planning supports predictable fulfillment across key product categories and industries.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <iconify-icon icon="lucide:shield" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="mb-2 font-heading text-lg font-bold text-primary">Quality Consistency</h3>
                    <p class="text-sm text-muted-foreground">
                        Central standards and local execution ensure reliable product experience in every market.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <iconify-icon icon="lucide:users" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="mb-2 font-heading text-lg font-bold text-primary">Local Technical Support</h3>
                    <p class="text-sm text-muted-foreground">
                        Regional teams help customers select, implement, and optimize lubrication programs.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <iconify-icon icon="lucide:refresh-cw" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="mb-2 font-heading text-lg font-bold text-primary">Scalable Expansion</h3>
                    <p class="text-sm text-muted-foreground">
                        Our network is designed to grow with demand across new regions and specialized sectors.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-primary py-20 text-primary-foreground">
            <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-6 lg:flex-row lg:items-center">
                <div class="max-w-3xl space-y-3">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Partner Network</p>
                    <h2 class="font-heading text-3xl font-extrabold md:text-4xl">
                        Looking for distribution or regional sales support?
                    </h2>
                    <p class="text-primary-foreground/80">
                        Connect with our global team to identify local representatives, supply channels, and market-specific
                        product availability.
                    </p>
                </div>
                <a href="#" class="self-start rounded-full bg-secondary px-8 py-4 font-semibold text-secondary-foreground lg:self-auto">
                    Contact Regional Team
                </a>
            </div>
        </section>
    </main>
@endsection
