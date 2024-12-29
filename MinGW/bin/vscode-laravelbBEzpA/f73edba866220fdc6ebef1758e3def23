<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Manajemen PKL</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
            plugins: [require("daisyui")],
            daisyui: {
                themes: ["light", "dark"],
            }
        }
    </script>
    <style>
        .dark-mode-text {
            @apply text-gray-800 dark:text-white;
        }
        .team-card {
            @apply bg-white dark:bg-gray-800;
        }
            /* Dark mode specific styles */
            /* Base text styles */
    .dark-mode-text {
        @apply text-gray-900 dark:text-white;
    }

    /* Card and background styles */
    .team-card {
        @apply bg-white dark:bg-gray-800;
    }

    /* Light mode specific styles */
    [data-theme="light"] {
        background-color: #ffffff;
    }

    [data-theme="light"] .bg-base-100 {
        background-color: #ffffff;
    }

    [data-theme="light"] .team-card {
        background-color: #ffffff;
    }

    [data-theme="light"] .card {
        background-color: #ffffff;
    }

    [data-theme="light"] .collapse {
        background-color: #ffffff;
    }

    [data-theme="light"] .collapse-title,
    [data-theme="light"] .collapse-content {
        background-color: #f8f9fa;
    }

    /* Text colors for light mode */
    [data-theme="light"] .text-gray-600 {
        color: #4b5563;
    }

    [data-theme="light"] .text-gray-500 {
        color: #6b7280;
    }

    [data-theme="light"] .label-text {
        color: #374151;
    }

    /* Input styles for light mode */
    [data-theme="light"] .input,
    [data-theme="light"] .textarea {
        background-color: #ffffff;
        color: #1f2937;
        border-color: #e5e7eb;
    }

    /* Dark mode specific styles */
    [data-theme="dark"] {
        background-color: #1f2937;
    }

    [data-theme="dark"] .bg-base-100 {
        background-color: #1f2937;
    }

    [data-theme="dark"] .collapse {
        background-color: #374151;
    }

    [data-theme="dark"] .collapse-title,
    [data-theme="dark"] .collapse-content {
        background-color: #374151;
    }

    /* Footer styles */
    [data-theme="light"] .footer {
        background-color: #f3f4f6;
    }

    [data-theme="dark"] .footer {
        background-color: #111827;
    }

    /* Navbar styles */
    [data-theme="light"] .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #e5e7eb;
    }

    /* Menu styles */
    [data-theme="light"] .menu a {
        color: #374151;
    }

    [data-theme="light"] .menu a:hover {
        background-color: #f3f4f6;
    }
    </style>
</head>
<body x-data="themeController">
    <!-- Navbar - Adjusted to be more compact -->
    <div class="navbar bg-base-100 sticky top-0 z-50 px-4">
        <div class="flex-1">
            <div class="dropdown lg:hidden">
                <label tabindex="0" class="btn btn-ghost" @click="isOpen = !isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" 
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52"
                    x-show="isOpen" 
                    @click.away="isOpen = false">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang PKL</a></li>
                    <li><a href="#tim">Tim Pengembang</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">SIMPKL</a>
        </div>
        
        <div class="flex-none hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang PKL</a></li>
                <li><a href="#tim">Tim Pengembang</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </div>
        
        <div class="flex-none">
            <label class="swap swap-rotate btn btn-ghost btn-circle">
                <input type="checkbox" x-model="isDark" class="theme-controller" />
                <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
                <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
            </label>
        </div>
    </div>

    <!-- Hero Section - Updated content -->
    <div class="hero min-h-screen" id="beranda">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                    <div x-data="typewriter()" x-init="start()" class="inline-block overflow-hidden whitespace-nowrap border-r-4 border-primary pr-2">
                        <span class="text-5xl font-bold dark-mode-text" x-text="text"></span>
                    </div>
                </h1>
                <p class="py-6 dark-mode-text">Sistem terintegrasi untuk mengelola kegiatan Praktik Kerja Lapangan mahasiswa dengan efektif dan efisien.</p>
                <a href="/admin/login" class="btn btn-primary">Masuk Sistem</a>
            </div>
        </div>
    </div>

    <!-- About Section - Updated content -->
    <div class="w-full py-10" id="tentang">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 dark-mode-text">Tentang PKL</h2>
            <div class="join join-vertical w-full">
                <div class="collapse collapse-arrow join-item">
                    <input type="radio" name="my-accordion-4" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium dark-mode-text">
                        Apa itu PKL?
                    </div>
                    <div class="collapse-content dark-mode-text">
                        <p>Praktik Kerja Lapangan (PKL) adalah program pembelajaran yang memberikan pengalaman kerja nyata kepada mahasiswa di industri atau instansi yang relevan dengan bidang studinya.</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow join-item">
                    <input type="radio" name="my-accordion-4" />
                    <div class="collapse-title text-xl font-medium dark-mode-text">
                        Manfaat SIMPKL
                    </div>
                    <div class="collapse-content dark-mode-text">
                        <ul class="list-disc list-inside">
                            <li>Monitoring kegiatan PKL secara real-time</li>
                            <li>Manajemen dokumen yang terstruktur</li>
                            <li>Komunikasi efektif antara mahasiswa, dosen, dan mitra</li>
                            <li>Evaluasi dan penilaian yang sistematis</li>
                        </ul>
                    </div>
                </div>
                <div class="collapse collapse-arrow join-item">
                    <input type="radio" name="my-accordion-4" />
                    <div class="collapse-title text-xl font-medium dark-mode-text">
                        Fitur Sistem
                    </div>
                    <div class="collapse-content dark-mode-text">
                        <ul class="list-disc list-inside">
                            <li>Dashboard monitoring PKL</li>
                            <li>Manajemen penempatan mahasiswa</li>
                            <li>Sistem bimbingan online</li>
                            <li>Evaluasi dan penilaian digital</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section - Centered photos -->
    <div class="w-full py-10 bg-base-100" id="tim">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-8 dark-mode-text">Tim Pengembang</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                @if($personalBrandData->isEmpty())
                    <p class="text-center col-span-full text-gray-500 dark:text-gray-400">Tidak ada data tim tersedia.</p>
                @else
                    @foreach($personalBrandData as $data)
                        <div class="team-card rounded-lg shadow-lg overflow-hidden transition duration-300 hover:-translate-y-1 hover:shadow-xl max-w-sm w-full">
                            <div class="p-6">
                                <div class="aspect-w-1 aspect-h-1 mb-4">
                                    <img class="w-full h-64 object-cover object-center rounded-lg" src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}" />
                                </div>
                                <h4 class="text-xl font-semibold dark-mode-text text-center">{{ $data->name }}</h4>
                                <p class="text-md text-gray-600 dark:text-gray-300 text-center">{{ $data->nim }}</p>
                                <p class="mt-2 text-md text-gray-500 dark:text-gray-400 text-center">{{ $data->prodi }}</p>
                                <p class="text-md text-gray-600 dark:text-gray-300 text-center">{{ $data->alamat }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w-full py-10 bg-base-100" id="kontak">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 dark-mode-text">Hubungi Kami</h2>
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <form class="space-y-4">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text dark-mode-text">Nama</span>
                            </label>
                            <input type="text" placeholder="Masukkan nama anda" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text dark-mode-text">Email</span>
                            </label>
                            <input type="email" placeholder="Masukkan email anda" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text dark-mode-text">Pesan</span>
                            </label>
                            <textarea class="textarea textarea-bordered h-24" placeholder="Tulis pesan anda"></textarea>
                        </div>
                        <button class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div>
            <p class="dark-mode-text">Copyright © 2023 - Sistem Informasi Manajemen PKL</p>
        </div>
    </footer>
</body>
<script>
    function typewriter() {
    return {
        text: '',
        texts: [
            'Sistem Informasi',
            'Praktik Kerja Lapangan'
        ],
        delay: 100,
        deleteDelay: 100,
        textIndex: 0,
        start() {
            this.type();
        },
        type() {
            let currentIndex = 0;
            const interval = setInterval(() => {
                this.text = this.texts[this.textIndex].slice(0, currentIndex + 1);
                currentIndex++;

                if (currentIndex === this.texts[this.textIndex].length) {
                    clearInterval(interval);
                    setTimeout(() => this.delete(), 2000); // Wait before deleting
                }
            }, this.delay);
        },
        delete() {
            let currentIndex = this.texts[this.textIndex].length;
            const interval = setInterval(() => {
                this.text = this.texts[this.textIndex].slice(0, currentIndex - 1);
                currentIndex--;

                if (currentIndex === 0) {
                    clearInterval(interval);
                    this.textIndex = (this.textIndex + 1) % this.texts.length; // Move to next text
                    setTimeout(() => this.type(), 500); // Wait before typing again
                }
            }, this.deleteDelay);
        }
    }
}


document.addEventListener('alpine:init', () => {
        Alpine.data('themeController', () => ({
            isDark: localStorage.getItem('theme') === 'dark',
            
            init() {
                this.$watch('isDark', (val) => {
                    localStorage.setItem('theme', val ? 'dark' : 'light');
                    document.documentElement.setAttribute('data-theme', val ? 'dark' : 'light');
                    
                    // Add or remove dark class from html element
                    if (val) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                });
                
                // Set initial theme
                if (this.isDark) {
                    document.documentElement.classList.add('dark');
                    document.documentElement.setAttribute('data-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    document.documentElement.setAttribute('data-theme', 'light');
                }
            }
        }));
    });
</script>
</html>