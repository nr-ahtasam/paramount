@extends('layouts.app')

@section('title', 'Paramount | News & Media')

@section('content')
    <main class="w-full">
        <section class="relative overflow-hidden bg-primary py-24 text-primary-foreground">
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary to-secondary opacity-95"></div>
            <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-6 lg:col-span-8">
                    <div class="inline-flex items-center gap-2 rounded-full border border-border/20 bg-background/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-secondary">
                        <iconify-icon icon="lucide:newspaper" class="text-sm"></iconify-icon>
                        Newsroom
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-foreground/70">
                            News & Media
                        </p>
                        <h1 class="font-heading text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                            News, articles, media coverage, and gallery highlights from Paramount.
                        </h1>
                    </div>
                    <p class="max-w-3xl text-lg leading-relaxed text-primary-foreground/80">
                        Explore corporate announcements, thought leadership, product news, event coverage, and visual
                        media that showcase Paramount’s progress across energy, lubricants, sustainability, and
                        industrial innovation.
                    </p>
                </div>

                <div class="rounded-2xl border border-border/20 bg-background/10 p-6 shadow-2xl backdrop-blur-md lg:col-span-4">
                    <p class="text-sm font-semibold uppercase tracking-widest text-primary-foreground/70">Featured Update</p>
                    <h3 class="mt-3 font-heading text-2xl font-bold">
                        Paramount expands regional capacity for industrial customers.
                    </h3>
                    <p class="mt-3 text-sm leading-relaxed text-primary-foreground/80">
                        Read the latest announcement on distribution growth, engineering support, and market expansion.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto max-w-7xl space-y-12 px-6">
                <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                    <div class="max-w-3xl space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Featured Story</p>
                        <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                            How smarter lubricant engineering is reshaping industrial uptime.
                        </h2>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button class="rounded-full bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground">
                            All
                        </button>
                        <button class="rounded-full border border-border bg-muted px-4 py-2 text-sm font-semibold text-foreground">
                            Articles
                        </button>
                        <button class="rounded-full border border-border bg-muted px-4 py-2 text-sm font-semibold text-foreground">
                            Media
                        </button>
                        <button class="rounded-full border border-border bg-muted px-4 py-2 text-sm font-semibold text-foreground">
                            Gallery
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <div class="overflow-hidden rounded-3xl border border-border bg-card shadow-sm lg:col-span-7">
                        <div class="space-y-5 p-8 md:p-10">
                            <div class="flex items-center justify-between text-xs text-muted-foreground">
                                <span class="font-bold uppercase tracking-wider text-secondary">Technology</span>
                                <span>October 2024</span>
                            </div>
                            <h3 class="font-heading text-3xl font-extrabold leading-tight text-primary">
                                The future of synthetic lubricants in high-load industrial applications.
                            </h3>
                            <p class="leading-relaxed text-muted-foreground">
                                A deeper look at formulation performance, thermal endurance, and how advanced lubricant
                                chemistry supports efficiency gains across manufacturing and heavy equipment environments.
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-primary">
                                Read Article
                                <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                            </a>
                        </div>
                    </div>

                    <div class="space-y-4 lg:col-span-5">
                        <div class="rounded-2xl border border-border bg-muted p-6">
                            <p class="mb-2 text-xs font-bold uppercase tracking-wider text-secondary">Press Release</p>
                            <h3 class="mb-2 font-heading text-xl font-bold text-primary">
                                Paramount achieves new milestone in export network development.
                            </h3>
                            <p class="text-sm text-muted-foreground">
                                Expanded reach strengthens regional availability and customer service across strategic markets.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-border bg-muted p-6">
                            <p class="mb-2 text-xs font-bold uppercase tracking-wider text-secondary">ESG Update</p>
                            <h3 class="mb-2 font-heading text-xl font-bold text-primary">
                                Cleaner production priorities accelerate sustainability roadmap.
                            </h3>
                            <p class="text-sm text-muted-foreground">
                                Recent operational improvements support lower impact manufacturing and resource efficiency goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-muted py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 max-w-3xl space-y-2">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Latest Articles</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                        Insights for partners, engineers, and industrial decision makers.
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs text-muted-foreground">
                            <span class="font-bold uppercase tracking-wider text-secondary">Industry</span>
                            <span>Sep 28, 2024</span>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-primary">
                            Choosing hydraulic oils for extreme-duty systems
                        </h3>
                        <p class="text-sm text-muted-foreground">
                            A practical guide to fluid stability, anti-wear performance, and reliability under pressure.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-primary">
                            Read More
                            <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                        </a>
                    </article>
                    <article class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs text-muted-foreground">
                            <span class="font-bold uppercase tracking-wider text-secondary">Corporate</span>
                            <span>Sep 14, 2024</span>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-primary">
                            Paramount opens new technical support center
                        </h3>
                        <p class="text-sm text-muted-foreground">
                            A strengthened support model improves customer consultation and product selection services.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-primary">
                            Read More
                            <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                        </a>
                    </article>
                    <article class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <div class="flex items-center justify-between text-xs text-muted-foreground">
                            <span class="font-bold uppercase tracking-wider text-secondary">Sustainability</span>
                            <span>Aug 30, 2024</span>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-primary">
                            Circular packaging priorities across lubricant operations
                        </h3>
                        <p class="text-sm text-muted-foreground">
                            A look at packaging improvements, waste reduction, and smarter environmental practices.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-primary">
                            Read More
                            <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div class="max-w-3xl space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Media & Gallery</p>
                        <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                            A clean media gallery for launches, operations, and corporate events.
                        </h2>
                    </div>
                    <a href="#" class="rounded-full bg-primary px-6 py-3 text-sm font-semibold text-primary-foreground">
                        Download Media Kit
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="flex min-h-[220px] flex-col justify-between rounded-2xl border border-border bg-muted p-6">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:image" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="mb-2 font-heading text-lg font-bold text-primary">Plant Operations</h3>
                            <p class="text-sm text-muted-foreground">
                                Industrial production, blending systems, and quality control visuals.
                            </p>
                        </div>
                    </div>
                    <div class="flex min-h-[220px] flex-col justify-between rounded-2xl border border-border bg-muted p-6">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:camera" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="mb-2 font-heading text-lg font-bold text-primary">Corporate Events</h3>
                            <p class="text-sm text-muted-foreground">
                                Leadership sessions, industry forums, and partner engagements.
                            </p>
                        </div>
                    </div>
                    <div class="flex min-h-[220px] flex-col justify-between rounded-2xl border border-border bg-muted p-6">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:play" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="mb-2 font-heading text-lg font-bold text-primary">Video Highlights</h3>
                            <p class="text-sm text-muted-foreground">
                                Product explainers, sustainability updates, and manufacturing spotlights.
                            </p>
                        </div>
                    </div>
                    <div class="flex min-h-[220px] flex-col justify-between rounded-2xl border border-border bg-muted p-6">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            <iconify-icon icon="lucide:folder" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="mb-2 font-heading text-lg font-bold text-primary">Brand Assets</h3>
                            <p class="text-sm text-muted-foreground">
                                Approved corporate visuals, logos, and publication-ready materials.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary py-20 text-primary-foreground">
            <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-6 lg:flex-row lg:items-center">
                <div class="max-w-3xl space-y-3">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Media Enquiries</p>
                    <h2 class="font-heading text-3xl font-extrabold md:text-4xl">
                        Need articles, corporate assets, or press support?
                    </h2>
                    <p class="text-primary-foreground/80">
                        Reach the Paramount communications team for publications, coverage requests, interviews, and
                        media materials.
                    </p>
                </div>
                <a href="#" class="self-start rounded-full bg-secondary px-8 py-4 font-semibold text-secondary-foreground lg:self-auto">
                    Contact Media Team
                </a>
            </div>
        </section>
    </main>
@endsection
