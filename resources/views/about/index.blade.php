@extends('layouts.app')

@section('title', 'Paramount | About Us')

@section('content')
    <main class="w-full">
        <section class="relative overflow-hidden bg-primary text-primary-foreground py-24">
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary to-secondary opacity-95"></div>
            <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-end">
                <div class="space-y-5 lg:col-span-8">
                    <div class="inline-flex items-center gap-2 rounded-full border border-border/20 bg-background/10 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-secondary">
                        <iconify-icon icon="lucide:bookmark" class="text-sm"></iconify-icon>
                        Corporate Profile
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-foreground/70">About Paramount</p>
                        <h1 class="font-heading text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">Engineering progress with trust, precision, and global ambition.</h1>
                    </div>
                    <p class="max-w-3xl text-lg leading-relaxed text-primary-foreground/80">Paramount delivers premium industrial lubricants, petroleum solutions, and specialty oils backed by rigorous manufacturing discipline, deep technical expertise, and a long-term commitment to performance and sustainability.</p>
                </div>
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-2 gap-4 rounded-2xl border border-border/20 bg-background/10 p-6 shadow-2xl backdrop-blur-md">
                        <div>
                            <p class="font-heading text-3xl font-extrabold">25+</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Years of Excellence</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">20+</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Countries Served</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">500+</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Product Solutions</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">1000+</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Business Partners</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-6 lg:col-span-6">
                    <div class="space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Our Story</p>
                        <h2 class="font-heading text-3xl font-extrabold leading-tight text-primary md:text-4xl">Built for industries that demand reliability at every operating hour.</h2>
                    </div>
                    <p class="leading-relaxed text-muted-foreground">From its earliest operations, Paramount has focused on solving complex lubrication challenges for automotive, industrial, marine, energy, and heavy equipment sectors. Our approach combines technical rigor, customer proximity, and a premium quality mindset that supports uptime, efficiency, and long-term equipment health.</p>
                    <p class="leading-relaxed text-muted-foreground">Today, Paramount operates as a forward-looking enterprise with growing global reach, robust manufacturing systems, and an innovation agenda centered on smarter production, sustainable formulations, and high-performance product engineering.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:col-span-6">
                    <div class="rounded-2xl border border-border bg-muted p-6 shadow-sm">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:shield" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Mission</h3>
                        <p class="text-sm text-muted-foreground">Deliver dependable lubricant and energy solutions that maximize asset performance and customer confidence.</p>
                    </div>
                    <div class="rounded-2xl border border-border bg-muted p-6 shadow-sm">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:eye" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Vision</h3>
                        <p class="text-sm text-muted-foreground">Lead the future of premium industrial lubrication through innovation, sustainability, and engineering excellence.</p>
                    </div>
                    <div class="rounded-2xl border border-border bg-muted p-6 shadow-sm md:col-span-2">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
                            <iconify-icon icon="lucide:star" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Values</h3>
                        <div class="grid grid-cols-2 gap-3 text-sm md:grid-cols-4">
                            <div class="rounded-xl border border-border bg-card px-4 py-3 font-semibold text-foreground">Integrity</div>
                            <div class="rounded-xl border border-border bg-card px-4 py-3 font-semibold text-foreground">Innovation</div>
                            <div class="rounded-xl border border-border bg-card px-4 py-3 font-semibold text-foreground">Safety</div>
                            <div class="rounded-xl border border-border bg-card px-4 py-3 font-semibold text-foreground">Partnership</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-muted py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 max-w-3xl space-y-2">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Milestones</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">A timeline of growth, capability, and industry leadership.</h2>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="mb-3 text-sm font-bold uppercase tracking-wider text-secondary">1999</p>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Company Founded</h3>
                        <p class="text-sm text-muted-foreground">Paramount launches with a focus on premium industrial and automotive lubrication solutions.</p>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="mb-3 text-sm font-bold uppercase tracking-wider text-secondary">2008</p>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Regional Expansion</h3>
                        <p class="text-sm text-muted-foreground">Distributor network expands across key export markets and industrial sectors.</p>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="mb-3 text-sm font-bold uppercase tracking-wider text-secondary">2016</p>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Advanced Lab Investments</h3>
                        <p class="text-sm text-muted-foreground">Testing and formulation capabilities are upgraded with high-precision analytical systems.</p>
                    </div>
                    <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="mb-3 text-sm font-bold uppercase tracking-wider text-secondary">2024</p>
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Sustainable Growth</h3>
                        <p class="text-sm text-muted-foreground">ESG priorities and smarter manufacturing systems shape Paramount’s next phase of growth.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div class="max-w-3xl space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Leadership</p>
                        <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">Guided by experienced operators, engineers, and strategic leaders.</h2>
                    </div>
                    <a href="#" class="rounded-full bg-primary px-6 py-3 text-sm font-semibold text-primary-foreground">Meet Our Team</a>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary"><iconify-icon icon="lucide:user" class="text-3xl"></iconify-icon></div>
                        <div>
                            <h3 class="font-heading text-lg font-bold text-primary">David Mercer</h3>
                            <p class="text-sm font-semibold text-secondary">Chief Executive Officer</p>
                        </div>
                        <p class="text-sm text-muted-foreground">Leads Paramount’s growth strategy, international partnerships, and long-term enterprise vision.</p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary"><iconify-icon icon="lucide:user" class="text-3xl"></iconify-icon></div>
                        <div>
                            <h3 class="font-heading text-lg font-bold text-primary">Sophia Rahman</h3>
                            <p class="text-sm font-semibold text-secondary">Chief Technology Officer</p>
                        </div>
                        <p class="text-sm text-muted-foreground">Oversees innovation programs, product development pipelines, and laboratory excellence.</p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary"><iconify-icon icon="lucide:user" class="text-3xl"></iconify-icon></div>
                        <div>
                            <h3 class="font-heading text-lg font-bold text-primary">Michael Stein</h3>
                            <p class="text-sm font-semibold text-secondary">VP, Global Operations</p>
                        </div>
                        <p class="text-sm text-muted-foreground">Drives operational resilience across manufacturing, logistics, and regional supply networks.</p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary"><iconify-icon icon="lucide:user" class="text-3xl"></iconify-icon></div>
                        <div>
                            <h3 class="font-heading text-lg font-bold text-primary">Nadia Elmasry</h3>
                            <p class="text-sm font-semibold text-secondary">Director, Sustainability</p>
                        </div>
                        <p class="text-sm text-muted-foreground">Leads ESG strategy, environmental reporting, and decarbonization initiatives across the business.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary py-20 text-primary-foreground">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-4 lg:col-span-8">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Trust Signals</p>
                    <h2 class="font-heading text-3xl font-extrabold md:text-4xl">Certified systems, disciplined processes, and measurable quality assurance.</h2>
                </div>
                <div class="flex flex-wrap gap-3 lg:col-span-4 lg:justify-end">
                    <div class="rounded-full border border-border/20 bg-background/10 px-4 py-3 text-sm font-semibold">ISO 9001</div>
                    <div class="rounded-full border border-border/20 bg-background/10 px-4 py-3 text-sm font-semibold">ISO 14001</div>
                    <div class="rounded-full border border-border/20 bg-background/10 px-4 py-3 text-sm font-semibold">API Standards</div>
                </div>
            </div>
        </section>
    </main>
@endsection
