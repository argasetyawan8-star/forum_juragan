<?php

namespace App\Http\Controllers;

use App\Models\UserLink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileLinkController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'label' => [
                'required',
                'string',
                'max:100',
            ],

            'url' => [
                'required',
                'url',
                'max:500',
            ],

            'icon' => [
                'nullable',
                'string',
                'max:50',
            ],
        ], [
            'label.required' => 'Nama link wajib diisi.',
            'label.max' => 'Nama link maksimal 100 karakter.',
            'url.required' => 'URL wajib diisi.',
            'url.url' => 'URL harus berupa alamat yang valid.',
            'url.max' => 'URL terlalu panjang.',
        ]);

        $request->user()->links()->create($validated);

        return redirect()
            ->route('profile.edit')
            ->with('status', 'link-created');
    }

    public function update(Request $request, UserLink $link): RedirectResponse
    {
        abort_unless($link->user_id === $request->user()->id, 403);

        $validated = $request->validate([
            'label' => [
                'required',
                'string',
                'max:100',
            ],

            'url' => [
                'required',
                'url',
                'max:500',
            ],

            'icon' => [
                'nullable',
                'string',
                'max:50',
            ],
        ], [
            'label.required' => 'Nama link wajib diisi.',
            'url.required' => 'URL wajib diisi.',
            'url.url' => 'URL harus berupa alamat yang valid.',
        ]);

        $link->update($validated);

        return redirect()
            ->route('profile.edit')
            ->with('status', 'link-updated');
    }

    public function destroy(Request $request, UserLink $link): RedirectResponse
    {
        abort_unless($link->user_id === $request->user()->id, 403);

        $link->delete();

        return redirect()
            ->route('profile.edit')
            ->with('status', 'link-deleted');
    }
}