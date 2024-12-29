<?php

namespace App\Providers;

use App\Repositories\ProposalRepository;
use App\Repositories\LogKegiatanRepository;
use App\Repositories\JadwalRepository;
use App\Repositories\LaporanRepository;
use App\Repositories\KomentarRepository;
use App\Repositories\RoleRepository;
use App\Repositories\Contracts\ProposalRepositoryInterface;
use App\Repositories\Contracts\LogKegiatanRepositoryInterface;
use App\Repositories\Contracts\JadwalRepositoryInterface;
use App\Repositories\Contracts\LaporanRepositoryInterface;
use App\Repositories\Contracts\KomentarRepositoryInterface;
use App\Repositories\Contracts\RoleRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ProposalRepositoryInterface::class, ProposalRepository::class);
        $this->app->singleton(LogKegiatanRepositoryInterface::class, LogKegiatanRepository::class);
        $this->app->singleton(JadwalRepositoryInterface::class, JadwalRepository::class);
        $this->app->singleton(LaporanRepositoryInterface::class, LaporanRepository::class);
        $this->app->singleton(KomentarRepositoryInterface::class, KomentarRepository::class);
        $this->app->singleton(RoleRepositoryInterface::class, RoleRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Tambahkan logika lain (misalnya observer atau global validation) jika diperlukan
    }
}
