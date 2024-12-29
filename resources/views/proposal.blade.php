<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proposal PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center items-center min-h-screen">
            <div class="w-full max-w-2xl">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-3xl font-bold text-center mb-6">{{ __('Tambah Proposal PKL') }}</h2>
                        
                        @if (session('success'))
                            <div class="alert alert-success shadow-lg mb-6">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <span>{{ session('success') }}</span>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('proposals.store') }}" enctype="multipart/form-data" class="space-y-6">
                            @csrf

                            <div class="form-control">
                                <label class="label" for="nama">
                                    <span class="label-text">{{ __('Nama') }}</span>
                                </label>
                                <input id="nama" type="text" class="input input-bordered w-full @error('nama') input-error @enderror" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control">
                                <label class="label" for="nim">
                                    <span class="label-text">{{ __('NIM') }}</span>
                                </label>
                                <input id="nim" type="text" class="input input-bordered w-full @error('nim') input-error @enderror" name="nim" value="{{ old('nim') }}" required>
                                @error('nim')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control">
                                <label class="label" for="prodi">
                                    <span class="label-text">{{ __('Prodi') }}</span>
                                </label>
                                <input id="prodi" type="text" class="input input-bordered w-full @error('prodi') input-error @enderror" name="prodi" value="{{ old('prodi') }}" required>
                                @error('prodi')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control">
                                <label class="label" for="judul">
                                    <span class="label-text">{{ __('Judul Proposal') }}</span>
                                </label>
                                <input id="judul" type="text" class="input input-bordered w-full @error('judul') input-error @enderror" name="judul" value="{{ old('judul') }}" required>
                                @error('judul')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control">
                                <label class="label" for="deskripsi">
                                    <span class="label-text">{{ __('Deskripsi Proposal') }}</span>
                                </label>
                                <textarea id="deskripsi" class="textarea textarea-bordered h-24 w-full @error('deskripsi') textarea-error @enderror" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control">
                                <label class="label" for="file">
                                    <span class="label-text">{{ __('Upload File Proposal') }}</span>
                                </label>
                                <input id="file" type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs w-full @error('file') file-input-error @enderror" name="file" required>
                                @error('file')
                                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-control mt-6">
                                <button type="submit" class="btn btn-primary">{{ __('Tambah Proposal') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>