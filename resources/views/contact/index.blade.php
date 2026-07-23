@extends('layouts.app')

@section('title', 'Paramount | Contact')

@section('content')
    <main class="w-full">
        <section class="relative overflow-hidden bg-primary py-24 text-primary-foreground">
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary to-secondary opacity-95"></div>
            <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:items-center">
                <div class="space-y-6 lg:col-span-8">
                    <div class="inline-flex items-center gap-2 rounded-full border border-border/20 bg-background/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-secondary">
                        <iconify-icon icon="lucide:mail" class="text-sm"></iconify-icon>
                        Contact Paramount
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-foreground/70">
                            Contact Us
                        </p>
                        <h1 class="font-heading text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                            Connect with sales, technical support, and regional teams.
                        </h1>
                    </div>
                    <p class="max-w-3xl text-lg leading-relaxed text-primary-foreground/80">
                        Whether you need product guidance, technical consultation, distribution support, or corporate
                        information, Paramount’s teams are ready to help with responsive, expert-led service.
                    </p>
                </div>

                <div class="rounded-2xl border border-border/20 bg-background/10 p-6 shadow-2xl backdrop-blur-md lg:col-span-4">
                    <p class="text-sm font-semibold uppercase tracking-widest text-primary-foreground/70">Quick Access</p>
                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center gap-3">
                            <iconify-icon icon="lucide:phone" class="text-lg text-secondary"></iconify-icon>
                            <span>Sales & Customer Support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <iconify-icon icon="lucide:map-pin" class="text-lg text-secondary"></iconify-icon>
                            <span>Regional Offices</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <iconify-icon icon="lucide:download" class="text-lg text-secondary"></iconify-icon>
                            <span>Catalogue Requests</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 lg:grid-cols-12 lg:items-start">
                <div class="rounded-3xl border border-border bg-card p-8 shadow-sm lg:col-span-7 md:p-10">
                    <div class="mb-8 space-y-2">
                        <p class="text-xs font-bold uppercase tracking-widest text-secondary">Inquiry Form</p>
                        <h2 class="font-heading text-3xl font-extrabold text-primary">
                            Tell us how we can support your business.
                        </h2>
                    </div>
                    <form class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-foreground">Full Name</label>
                            <input type="text" placeholder="Your full name" class="w-full rounded-2xl border border-input bg-muted px-4 py-3 text-sm text-foreground" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-foreground">Company</label>
                            <input type="text" placeholder="Company name" class="w-full rounded-2xl border border-input bg-muted px-4 py-3 text-sm text-foreground" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-foreground">Email</label>
                            <input type="email" placeholder="Work email" class="w-full rounded-2xl border border-input bg-muted px-4 py-3 text-sm text-foreground" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-foreground">Phone</label>
                            <input type="text" placeholder="Phone number" class="w-full rounded-2xl border border-input bg-muted px-4 py-3 text-sm text-foreground" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-foreground">Department</label>
                            <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
                                <button type="button" class="rounded-2xl bg-primary px-4 py-3 text-sm font-semibold text-primary-foreground">Sales</button>
                                <button type="button" class="rounded-2xl border border-border bg-muted px-4 py-3 text-sm font-semibold text-foreground">Technical</button>
                                <button type="button" class="rounded-2xl border border-border bg-muted px-4 py-3 text-sm font-semibold text-foreground">Media</button>
                                <button type="button" class="rounded-2xl border border-border bg-muted px-4 py-3 text-sm font-semibold text-foreground">Careers</button>
                            </div>
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-foreground">Message</label>
                            <textarea placeholder="Share your inquiry" class="min-h-40 w-full rounded-2xl border border-input bg-muted px-4 py-3 text-sm text-foreground"></textarea>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4 pt-2 md:col-span-2">
                            <p class="text-sm text-muted-foreground">
                                By submitting, you agree to be contacted by Paramount regarding your request.
                            </p>
                            <button type="submit" class="rounded-full bg-secondary px-8 py-4 text-sm font-semibold text-secondary-foreground">
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>

                <div class="space-y-6 lg:col-span-5">
                    <div class="rounded-2xl border border-border bg-muted p-6 shadow-sm">
                        <p class="mb-3 text-xs font-bold uppercase tracking-widest text-secondary">Department Directory</p>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:phone" class="mt-0.5 text-lg text-primary"></iconify-icon>
                                <div>
                                    <p class="font-semibold text-foreground">Sales Team</p>
                                    <p class="text-muted-foreground">Product enquiries, quotations, and account support.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:activity" class="mt-0.5 text-lg text-primary"></iconify-icon>
                                <div>
                                    <p class="font-semibold text-foreground">Technical Services</p>
                                    <p class="text-muted-foreground">Application guidance, lubricant matching, and engineering support.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <iconify-icon icon="lucide:mail" class="mt-0.5 text-lg text-primary"></iconify-icon>
                                <div>
                                    <p class="font-semibold text-foreground">Corporate Affairs</p>
                                    <p class="text-muted-foreground">Media requests, partnerships, and company communications.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-border bg-card p-6 shadow-sm">
                        <p class="mb-4 text-xs font-bold uppercase tracking-widest text-secondary">Office Locations</p>
                        <div class="space-y-4">
                            <div class="rounded-2xl border border-border bg-muted p-4">
                                <h3 class="font-heading text-lg font-bold text-primary">Houston</h3>
                                <p class="text-sm text-muted-foreground">
                                    Global headquarters, strategic account management, and technical coordination.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-border bg-muted p-4">
                                <h3 class="font-heading text-lg font-bold text-primary">Rotterdam</h3>
                                <p class="text-sm text-muted-foreground">
                                    European distribution support, operations planning, and customer service.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-border bg-muted p-4">
                                <h3 class="font-heading text-lg font-bold text-primary">Singapore</h3>
                                <p class="text-sm text-muted-foreground">
                                    APAC regional sales, marine support, and logistics coordination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-muted py-20">
            <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-8 px-6 lg:grid-cols-12">
                <div class="space-y-4 lg:col-span-7">
                    <p class="text-xs font-bold uppercase tracking-widest text-secondary">Download Centre</p>
                    <h2 class="font-heading text-3xl font-extrabold text-primary md:text-4xl">
                        Need the latest catalogue, data sheets, or company profile?
                    </h2>
                    <p class="leading-relaxed text-muted-foreground">
                        Access Paramount’s latest product catalogue and connect with the right team to receive
                        specification sheets and tailored recommendations.
                    </p>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row lg:col-span-5 lg:justify-end">
                    <a href="#" class="rounded-full bg-primary px-8 py-4 text-center text-sm font-semibold text-primary-foreground">
                        Download Catalogue
                    </a>
                    <a href="#" class="rounded-full bg-secondary px-8 py-4 text-center text-sm font-semibold text-secondary-foreground">
                        Request Data Sheets
                    </a>
                </div>
            </div>
        </section>

        <section class="bg-primary py-20 text-primary-foreground">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 px-6 md:grid-cols-3">
                <div class="rounded-2xl border border-border/20 bg-background/10 p-6">
                    <p class="mb-2 text-sm uppercase tracking-widest text-primary-foreground/70">Response Time</p>
                    <h3 class="font-heading text-3xl font-extrabold">24 hrs</h3>
                    <p class="mt-2 text-sm text-primary-foreground/80">Target initial response for most business enquiries.</p>
                </div>
                <div class="rounded-2xl border border-border/20 bg-background/10 p-6">
                    <p class="mb-2 text-sm uppercase tracking-widest text-primary-foreground/70">Global Teams</p>
                    <h3 class="font-heading text-3xl font-extrabold">20+</h3>
                    <p class="mt-2 text-sm text-primary-foreground/80">Markets supported through regional offices and partner channels.</p>
                </div>
                <div class="rounded-2xl border border-border/20 bg-background/10 p-6">
                    <p class="mb-2 text-sm uppercase tracking-widest text-primary-foreground/70">Support Areas</p>
                    <h3 class="font-heading text-3xl font-extrabold">Sales + Tech</h3>
                    <p class="mt-2 text-sm text-primary-foreground/80">Commercial, engineering, documentation, and account support.</p>
                </div>
            </div>
        </section>
    </main>
@endsection
