@extends('layouts.app') @section('title', 'Paramount | Sustainability & ESG')
@section('content')
<div class="w-full">
    <section
        class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-primary text-primary-foreground py-20"
    >
        <div class="absolute inset-0 z-0">
            <img
                src="https://uxmagic.blob.core.windows.net/public/agent-images/sustainability-green-1784443798191-mt3wwlsbubc.png"
                alt="Paramount Sustainable Energy Landscape"
                class="w-full h-full object-cover opacity-30 scale-105"
            />
            <div
                class="absolute inset-0 bg-linear-to-t from-primary via-primary/90 to-transparent"
            ></div>
        </div>
        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center space-y-6">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-background/10 backdrop-blur-md border border-border/20 text-xs font-semibold uppercase tracking-wider text-secondary"
            >
                <iconify-icon icon="lucide:leaf" class="text-sm"></iconify-icon>
                Our ESG Mandate
            </div>
            <h1
                class="text-3xl md:text-5xl lg:text-6xl font-heading font-extrabold leading-tight text-primary-foreground"
            >
                Sustainable Engineering.<br />
                <span
                    class="text-transparent bg-clip-text bg-linear-to-r from-secondary to-background"
                    >Preserving Tomorrow.</span
                >
            </h1>
            <p
                class="text-base md:text-lg text-primary-foreground/80 max-w-2xl mx-auto leading-relaxed"
            >
                At Paramount, we believe high mechanical performance and carbon
                neutrality should coexist. We formulate biodegradable base oils,
                utilize renewable energy across blending plants, and champion
                circular packaging.
            </p>
            <div class="pt-4 flex justify-center gap-4">
                <a
                    href="#"
                    class="px-8 py-4 bg-secondary text-secondary-foreground font-semibold rounded-full hover:bg-secondary/90 transition-all duration-300 shadow-lg shadow-secondary/20 flex items-center gap-2"
                >
                    <iconify-icon
                        icon="lucide:download"
                        class="text-lg"
                    ></iconify-icon>
                    Download ESG Report 2024
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-background">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-2">
                <span
                    class="text-xs font-bold text-secondary uppercase tracking-widest"
                    >Our Framework</span
                >
                <h2
                    class="text-3xl md:text-4xl font-heading font-extrabold text-primary"
                >
                    Environmental, Social &amp; Governance Pillars
                </h2>
                <p class="text-muted-foreground">
                    How we measure and report our positive impact across global
                    operations.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="p-8 bg-muted rounded-2xl border border-border/80 space-y-6 hover:shadow-xl transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center"
                    >
                        <iconify-icon
                            icon="lucide:leaf"
                            class="text-2xl"
                        ></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary">
                        Environmental Excellence
                    </h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">
                        Reducing greenhouse gas emissions across all chemical
                        blending phases, optimizing water purification, and
                        prioritizing biodegradable formulations for sensitive
                        marine and agricultural sectors.
                    </p>
                    <ul class="space-y-3 pt-4 border-t border-border">
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >-35% Carbon footprint target by 2030
                        </li>
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >100% Recyclable packaging solutions
                        </li>
                    </ul>
                </div>

                <div
                    class="p-8 bg-muted rounded-2xl border border-border/80 space-y-6 hover:shadow-xl transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center"
                    >
                        <iconify-icon
                            icon="lucide:user"
                            class="text-2xl"
                        ></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary">
                        Social Responsibility
                    </h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">
                        Prioritizing employee health, safety, and community
                        enrichment. We maintain zero-harm workplace goals and
                        support regional technical education programs in
                        engineering and chemistry.
                    </p>
                    <ul class="space-y-3 pt-4 border-t border-border">
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >Zero-accident goal across all blending plants
                        </li>
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >Global talent development programs
                        </li>
                    </ul>
                </div>

                <div
                    class="p-8 bg-muted rounded-2xl border border-border/80 space-y-6 hover:shadow-xl transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center"
                    >
                        <iconify-icon
                            icon="lucide:shield"
                            class="text-2xl"
                        ></iconify-icon>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-primary">
                        Ethical Governance
                    </h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">
                        Upholding absolute compliance, supply chain
                        transparency, and strong board oversight. We ensure
                        rigorous auditing of raw materials and baseline supplier
                        ethics.
                    </p>
                    <ul class="space-y-3 pt-4 border-t border-border">
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >100% Traceable raw material sourcing
                        </li>
                        <li
                            class="flex items-center gap-3 text-xs text-foreground/80 font-medium"
                        >
                            <iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >EcoVadis Gold certified supplier network
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-muted border-t border-b border-border">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-2">
                <span
                    class="text-xs font-bold text-secondary uppercase tracking-widest"
                    >Our Journey</span
                >
                <h2
                    class="text-3xl md:text-4xl font-heading font-extrabold text-primary"
                >
                    Strategic Decarbonization Roadmap
                </h2>
                <p class="text-muted-foreground">
                    A timeline of our achievements and ambitious milestones
                    heading toward Net-Zero operations.
                </p>
            </div>
            <div
                class="relative border-l-2 border-primary/20 max-w-4xl mx-auto pl-8 space-y-12"
            >
                <div class="relative">
                    <span
                        class="absolute -left-10.25 top-1.5 w-6 h-6 rounded-full bg-secondary border-4 border-muted flex items-center justify-center"
                    ></span>
                    <div class="space-y-2">
                        <span
                            class="text-xs font-bold text-secondary uppercase tracking-wider"
                            >2020 â€” Completed</span
                        >
                        <h3 class="text-xl font-heading font-bold text-primary">
                            Plant Power Neutrality
                        </h3>
                        <p
                            class="text-sm text-muted-foreground leading-relaxed"
                        >
                            Transitioned 100% of electricity consumption across
                            our Rotterdam and Houston blending plants to
                            certified solar and wind-generated green power.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <span
                        class="absolute -left-10.25 top-1.5 w-6 h-6 rounded-full bg-secondary border-4 border-muted flex items-center justify-center"
                    ></span>
                    <div class="space-y-2">
                        <span
                            class="text-xs font-bold text-secondary uppercase tracking-wider"
                            >2022 â€” Completed</span
                        >
                        <h3 class="text-xl font-heading font-bold text-primary">
                            Biodegradable Formulation Line
                        </h3>
                        <p
                            class="text-sm text-muted-foreground leading-relaxed"
                        >
                            Launched the Oceanus Bio line, specifically
                            formulated with renewable plant-derived base stocks
                            for marine and environmental engineering
                            applications.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <span
                        class="absolute -left-10.25 top-1.5 w-6 h-6 rounded-full bg-primary border-4 border-muted flex items-center justify-center"
                    ></span>
                    <div class="space-y-2">
                        <span
                            class="text-xs font-bold text-primary uppercase tracking-wider"
                            >2026 â€” In Progress</span
                        >
                        <h3 class="text-xl font-heading font-bold text-primary">
                            Circular Packaging Deployment
                        </h3>
                        <p
                            class="text-sm text-muted-foreground leading-relaxed"
                        >
                            Replacing 100% of heavy-duty industrial plastic
                            fluid containers with post-consumer recycled
                            plastics and implementing a closed-loop container
                            recovery system.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <span
                        class="absolute -left-10.25 top-1.5 w-6 h-6 rounded-full bg-primary/40 border-4 border-muted flex items-center justify-center"
                    ></span>
                    <div class="space-y-2">
                        <span
                            class="text-xs font-bold text-muted-foreground uppercase tracking-wider"
                            >2030 â€” Target</span
                        >
                        <h3 class="text-xl font-heading font-bold text-primary">
                            Net-Zero Direct Emissions
                        </h3>
                        <p
                            class="text-sm text-muted-foreground leading-relaxed"
                        >
                            Achieving absolute carbon neutrality across Scope 1
                            and Scope 2 emissions, utilizing advanced offsets,
                            carbon capture, and ultra-efficient manufacturing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-background">
        <div
            class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center"
        >
            <div
                class="lg:col-span-6 bg-primary text-primary-foreground p-10 rounded-2xl relative overflow-hidden shadow-2xl"
            >
                <div
                    class="absolute -top-12 -left-12 w-48 h-48 bg-secondary/20 rounded-full blur-3xl"
                ></div>
                <div class="relative z-10 space-y-6">
                    <iconify-icon
                        icon="lucide:activity"
                        class="text-secondary text-5xl"
                    ></iconify-icon>
                    <h3
                        class="text-2xl font-heading font-extrabold text-primary-foreground"
                    >
                        EcoVadis Gold Medalist
                    </h3>
                    <p
                        class="text-sm text-primary-foreground/80 leading-relaxed"
                    >
                        Paramount has been awarded the prestigious Gold Medal by
                        EcoVadis for our sustainability rating, placing us in
                        the top 5% of global companies evaluated for
                        environmental and ethical supply chain standards.
                    </p>
                    <div
                        class="pt-4 flex items-center gap-4 text-xs font-semibold text-primary-foreground/90"
                    >
                        <span class="flex items-center gap-1"
                            ><iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >Top 5% Globally</span
                        >
                        <span class="flex items-center gap-1"
                            ><iconify-icon
                                icon="lucide:check"
                                class="text-secondary text-base"
                            ></iconify-icon
                            >Audit Compliant</span
                        >
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <span
                    class="text-xs font-bold text-secondary uppercase tracking-widest"
                    >Connect with Us</span
                >
                <h2 class="text-3xl font-heading font-extrabold text-primary">
                    Partner on Green Initiatives
                </h2>
                <p class="text-muted-foreground leading-relaxed">
                    Are you looking to optimize your industrial operations to
                    meet strict environmental compliance? Contact our ESG
                    advisory team to coordinate oil recycling programs,
                    bio-lubricant transitioning, and carbon monitoring.
                </p>
                <div class="pt-4">
                    <a
                        href="#"
                        class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary text-primary-foreground font-semibold rounded-full hover:bg-primary/90 transition-all shadow-md shadow-primary/10"
                        >Contact ESG Advisory Team<iconify-icon
                            icon="lucide:arrow-right"
                            class="text-sm"
                        ></iconify-icon
                    ></a>
                </div>
            </div>
        </div>
    </section>

    <button
        class="absolute bottom-6 right-6 w-11 h-11 bg-secondary text-secondary-foreground rounded-full shadow-lg hover:bg-secondary/90 flex items-center justify-center transition-all duration-300 hover:scale-110 z-30"
        aria-label="Back to Top"
    >
        <iconify-icon
            icon="lucide:arrow-right"
            class="-rotate-90 text-lg"
        ></iconify-icon>
    </button>
</div>
@endsection
