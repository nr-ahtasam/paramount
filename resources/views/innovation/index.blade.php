@extends('layouts.app')

@section('title', 'Paramount | Innovation')

@section('content')
    <main class="w-full">
        <section class="relative overflow-hidden bg-primary py-24 text-primary-foreground">
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-secondary opacity-95"></div>
            <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-6 lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-border/20 bg-background/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-secondary">
                        <iconify-icon icon="lucide:zap" class="text-sm"></iconify-icon>
                        Research & Development
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-foreground/70">
                            Innovation at Paramount
                        </p>
                        <h1 class="font-heading text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                            Innovation built into every formulation, process, and performance standard.
                        </h1>
                    </div>
                    <p class="max-w-2xl text-lg leading-relaxed text-primary-foreground/80">
                        Paramount combines advanced laboratories, AI-assisted quality systems, smart manufacturing,
                        and continuous product testing to deliver premium lubricant solutions for demanding global
                        industries.
                    </p>
                </div>

                <div class="rounded-2xl border border-border/20 bg-background/10 p-8 shadow-2xl backdrop-blur-md lg:col-span-5">
                    <h3 class="mb-5 font-heading text-lg font-bold">Innovation Snapshot</h3>
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <p class="font-heading text-3xl font-extrabold">24/7</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Process Monitoring</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">99.8%</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Batch Consistency</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">5</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Core Lab Programs</p>
                        </div>
                        <div>
                            <p class="font-heading text-3xl font-extrabold">100+</p>
                            <p class="text-xs uppercase tracking-wider text-primary-foreground/70">Test Protocols</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 lg:grid-cols-2">
                <div class="space-y-5 rounded-2xl border border-border bg-muted p-8 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <iconify-icon icon="lucide:activity" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="mb-2 font-heading text-2xl font-bold text-primary">AI-Driven Quality Control</h2>
                        <p class="leading-relaxed text-muted-foreground">
                            Real-time systems monitor viscosity, additive balance, thermal behavior, and contamination
                            risk to ensure every production batch matches target specifications.
                        </p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between rounded-xl border border-border bg-card p-4">
                            <span class="text-sm font-semibold text-foreground">Spectrometric analysis</span>
                            <span class="rounded-full bg-secondary/10 px-2.5 py-1 text-xs font-bold text-secondary">Active</span>
                        </div>
                        <div class="flex items-center justify-between rounded-xl border border-border bg-card p-4">
                            <span class="text-sm font-semibold text-foreground">Blend ratio validation</span>
                            <span class="rounded-full bg-secondary/10 px-2.5 py-1 text-xs font-bold text-secondary">Passed</span>
                        </div>
                        <div class="flex items-center justify-between rounded-xl border border-border bg-card p-4">
                            <span class="text-sm font-semibold text-foreground">Thermal stability controls</span>
                            <span class="rounded-full bg-secondary/10 px-2.5 py-1 text-xs font-bold text-secondary">Optimal</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-5 rounded-2xl border border-border bg-card p-8 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
                        <iconify-icon icon="lucide:monitor" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h2 class="mb-2 font-heading text-2xl font-bold text-primary">Smart Manufacturing Systems</h2>
                        <p class="leading-relaxed text-muted-foreground">
                            Paramount’s automated production environments are designed for traceability, energy
                            efficiency, repeatability, and continuous operational improvement.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="rounded-xl border border-border bg-muted p-5">
                            <p class="mb-2 text-sm font-bold text-primary">Automation</p>
                            <p class="text-sm text-muted-foreground">
                                Digitized dosing, blending, and packaging systems reduce variation and improve throughput.
                            </p>
                        </div>
                        <div class="rounded-xl border border-border bg-muted p-5">
                            <p class="mb-2 text-sm font-bold text-primary">Traceability</p>
                            <p class="text-sm text-muted-foreground">
                                Every formulation cycle is logged for auditability, compliance, and continuous refinement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-muted py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 max-w-3xl space-y-2">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Capabilities</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                        Deep testing expertise for extreme operating environments.
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <iconify-icon icon="lucide:flask-conical" class="text-3xl text-primary"></iconify-icon>
                        <h3 class="font-heading text-lg font-bold text-primary">Advanced Laboratories</h3>
                        <p class="text-sm text-muted-foreground">
                            Modern lab workflows support molecular analysis, formulation tuning, and material
                            compatibility testing.
                        </p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <iconify-icon icon="lucide:shield" class="text-3xl text-primary"></iconify-icon>
                        <h3 class="font-heading text-lg font-bold text-primary">Performance Validation</h3>
                        <p class="text-sm text-muted-foreground">
                            Products are evaluated against wear control, oxidation resistance, and thermal stability
                            requirements.
                        </p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <iconify-icon icon="lucide:settings" class="text-3xl text-primary"></iconify-icon>
                        <h3 class="font-heading text-lg font-bold text-primary">Equipment Simulation</h3>
                        <p class="text-sm text-muted-foreground">
                            Application-specific testing supports industrial, marine, transport, and energy-sector
                            performance needs.
                        </p>
                    </div>
                    <div class="space-y-4 rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <iconify-icon icon="lucide:refresh-cw" class="text-3xl text-primary"></iconify-icon>
                        <h3 class="font-heading text-lg font-bold text-primary">Continuous Improvement</h3>
                        <p class="text-sm text-muted-foreground">
                            Data-driven insights shape ongoing formulation enhancement and process optimization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 lg:grid-cols-12 lg:items-start">
                <div class="space-y-4 lg:col-span-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Focus Areas</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                        Innovation priorities aligned with quality, sustainability, and speed.
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:col-span-7">
                    <div class="rounded-2xl border border-border bg-muted p-6">
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Low-Emission Formulations</h3>
                        <p class="text-sm text-muted-foreground">
                            Development programs focused on cleaner chemistry, efficiency gains, and longer drain
                            intervals.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-border bg-muted p-6">
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Predictive Manufacturing</h3>
                        <p class="text-sm text-muted-foreground">
                            Operational data models help anticipate maintenance needs and reduce production interruptions.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-border bg-muted p-6">
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Customer Co-Development</h3>
                        <p class="text-sm text-muted-foreground">
                            Technical teams collaborate with industrial partners to solve application-specific lubrication
                            challenges.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-border bg-muted p-6">
                        <h3 class="mb-2 font-heading text-lg font-bold text-primary">Digital Quality Records</h3>
                        <p class="text-sm text-muted-foreground">
                            Integrated production data supports governance, audit readiness, and scalable operational
                            control.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary py-20 text-primary-foreground">
            <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-6 lg:flex-row lg:items-center">
                <div class="max-w-3xl space-y-3">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Technology Partnership</p>
                    <h2 class="font-heading text-3xl font-extrabold md:text-4xl">
                        Need a custom formulation or technical evaluation?
                    </h2>
                    <p class="text-primary-foreground/80">
                        Our specialists can support product matching, application reviews, and advanced industrial
                        lubrication recommendations.
                    </p>
                </div>
                <a href="#" class="self-start rounded-full bg-secondary px-8 py-4 font-semibold text-secondary-foreground lg:self-auto">
                    Talk to R&amp;D
                </a>
            </div>
        </section>
    </main>
@endsection
