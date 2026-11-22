<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Services\PendaftaranService;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    protected PendaftaranService $pendaftaranService;

    public function __construct(PendaftaranService $pendaftaranService)
    {
        $this->pendaftaranService = $pendaftaranService;
    }

    // ==========================================
    // PENDAFTARAN PUBLIK
    // ==========================================

    /**
     * Menampilkan formulir pendaftaran.
     */
    public function create()
    {
        return $this->pendaftaranService->getRegistrationForm();
    }

    /**
     * Menyimpan pendaftaran calon santri.
     */
    public function store(Request $request)
    {
        $pendaftaran = $this->pendaftaranService
            ->createRegistration($request->all());

        return redirect()->route('pendaftaran.success', [
            'nomor' => $pendaftaran->nomor_pendaftaran,
        ]);
    }

    /**
     * Menampilkan halaman setelah pendaftaran berhasil.
     */
    public function success(string $nomor)
    {
        $pendaftaran = $this->pendaftaranService
            ->getRegistrationByNumber($nomor);

        abort_if(!$pendaftaran, 404);

        return view('homepage.berhasil_mendaftar', [
            'nomor' => $pendaftaran->nomor_pendaftaran,
            'pendaftaran' => $pendaftaran,
        ]);
    }


    // ==========================================
    // DASHBOARD PENDAFTARAN
    // ==========================================

    /**
     * Menampilkan daftar seluruh pendaftar di dashboard.
     */
    public function dashboardIndex(Request $request)
    {
        $pendaftarans = $this->pendaftaranService
            ->getRegistrations($request);

        return view(
            'dashboard.pendaftaran.pendaftaran',
            compact('pendaftarans')
        );
    }

    /**
     * Menampilkan detail pendaftar.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        $pendaftaran = $this->pendaftaranService
            ->getRegistrationDetail($pendaftaran);

        return view('dashboard.pendaftaran.show', compact('pendaftaran'));
    }

    /**
     * Menampilkan formulir edit pendaftar.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('dashboard.pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Memperbarui data pendaftar.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $this->pendaftaranService->updateRegistration(
            $pendaftaran,
            $request->all()
        );

        return redirect()
            ->route('pendaftaran.show', $pendaftaran)
            ->with('success', 'Data pendaftar berhasil diperbarui.');
    }

    /**
     * Menghapus data pendaftar.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $this->pendaftaranService
            ->deleteRegistration($pendaftaran);

        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Data pendaftar berhasil dihapus.');
    }
}
