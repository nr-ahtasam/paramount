<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Paramount')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@100..900&family=Fira+Code:wght@300..700&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

        <style type="text/tailwindcss">
            @import "tailwindcss";
            @theme inline {
                --color-background: var(--background);
                --color-foreground: var(--foreground);
                --color-primary: var(--primary);
                --color-primary-foreground: var(--primary-foreground);
                --color-secondary: var(--secondary);
                --color-secondary-foreground: var(--secondary-foreground);
                --color-tertiary: var(--tertiary);
                --color-muted: var(--muted);
                --color-muted-foreground: var(--muted-foreground);
                --color-accent: var(--accent);
                --color-destructive: var(--destructive);
                --color-card: var(--card);
                --color-card-foreground: var(--card-foreground);
                --color-border: var(--border);
                --color-input: var(--input);
                --color-ring: var(--ring);
                --radius-sm: calc(var(--radius) - 4px);
                --radius-md: calc(var(--radius) - 2px);
                --radius-lg: var(--radius);
                --font-family-sans: var(--font-sans);
                --font-family-heading: var(--font-heading);
                --font-family-mono: var(--font-mono);
            }

            :root {
                --background: #ffffff;
                --foreground: #1f2937;
                --primary: #3a3d96;
                --primary-foreground: #ffffff;
                --secondary: #f51d26;
                --secondary-foreground: #ffffff;
                --tertiary: #3a3d96;
                --muted: #f5f7fa;
                --muted-foreground: #6b7280;
                --accent: #dfe0ee;
                --accent-foreground: #1f2937;
                --card: #ffffff;
                --card-foreground: #1f2937;
                --destructive: #ef4444;
                --border: #e5e7eb;
                --input: #e5e7eb;
                --ring: #3a3d96;
                --radius: 1rem;
                --font-sans: Inter, sans-serif;
                --font-heading: Sora, sans-serif;
                --font-mono: JetBrains Mono, monospace;
                --shadow-offset-x: 0;
                --shadow-offset-y: 10;
                --shadow-blur: 30;
                --shadow-spread: -8;
                --shadow-color: rgba(15, 23, 42, 0.12);
            }
        </style>
        <style>
            .brand-gradient {
                background-image: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--accent)
                );
            }
            .shadow-theme {
                box-shadow: calc(var(--shadow-offset-x, 0) * 1px)
                    calc(var(--shadow-offset-y, 10) * 1px)
                    calc(var(--shadow-blur, 30) * 1px)
                    calc(var(--shadow-spread, -8) * 1px)
                    var(--shadow-color, rgba(15, 23, 42, 0.12));
            }
        </style>
    </head>
    <body>
        <div
            class="min-h-screen w-full bg-background flex flex-col relative overflow-x-hidden font-sans text-foreground selection:bg-primary selection:text-primary-foreground"
        >
            @include('layouts.partials.header') @yield('content')
            @include('layouts.partials.footer')
        </div>
    </body>
</html>
