<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
{
    $user = $request->user();

    $validated = $request->validate([
        'name' => [
            'required',
            'string',
            'max:255',
        ],

        'email' => [
            'required',
            'string',
            'lowercase',
            'email',
            'max:255',
            \Illuminate\Validation\Rule::unique('users', 'email')
                ->ignore($user->id),
        ],

        'nama_usaha' => [
            'nullable',
            'string',
            'max:255',
        ],

        'bio' => [
            'nullable',
            'string',
            'max:500',
        ],

        'about' => [
            'nullable',
            'string',
            'max:3000',
        ],

        'jabatan' => [
            'nullable',
            'string',
            'max:100',
        ],

        'bidang_usaha' => [
            'nullable',
            'string',
            'max:150',
        ],

        'lokasi' => [
            'nullable',
            'string',
            'max:150',
        ],

        'website' => [
            'nullable',
            'url',
            'max:255',
        ],

        'whatsapp' => [
            'nullable',
            'string',
            'max:30',
        ],
    ], [
        'website.url' => 'Format website tidak valid.',
        'bio.max' => 'Bio maksimal 500 karakter.',
        'about.max' => 'Deskripsi maksimal 3000 karakter.',
    ]);

    $user->fill($validated);

    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    return redirect()
        ->route('profile.edit')
        ->with('status', 'profile-updated');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updateAvatar(Request $request): RedirectResponse
{
    $user = $request->user();

    $validated = $request->validate([
        'avatar' => [
            'required',
            'image',
            'mimes:jpg,jpeg,png,webp',
            'max:2048',
        ],
    ], [
        'avatar.required' => 'Silakan pilih foto terlebih dahulu.',
        'avatar.image' => 'File yang dipilih harus berupa gambar.',
        'avatar.mimes' => 'Foto harus berformat JPG, JPEG, PNG, atau WEBP.',
        'avatar.max' => 'Ukuran foto maksimal 2 MB.',
    ]);

    // Hapus foto lama
    if ($user->avatar) {
        Storage::disk('public')->delete($user->avatar);
    }

    // Simpan foto baru
    $path = $validated['avatar']->store('avatars', 'public');

    // Simpan path ke database
    $user->avatar = $path;
    $user->save();

    return redirect()
        ->route('profile.edit')
        ->with('status', 'avatar-updated');
}

public function deleteAvatar(Request $request): RedirectResponse
{
    $user = $request->user();

    if ($user->avatar) {
        Storage::disk('public')->delete($user->avatar);

        $user->avatar = null;
        $user->save();
    }

    return redirect()
        ->route('profile.edit')
        ->with('status', 'avatar-deleted');
}
}
