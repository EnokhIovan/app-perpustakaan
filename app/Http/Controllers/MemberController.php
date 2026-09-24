<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;

class MemberController extends Controller
{
    // private array $members = [
    //     ['id' => 1,'nama' => 'Alfa', 'nim' => '324001', 'email' => 'alfa@dummy.com', 'nomor_telepon' => '08100', 'alamat' => 'Jl. Alfabeta', 'status' => 'Aktif'],
    //     ['id' => 2, 'nama' => 'Beta', 'nim' => '324002', 'email' => 'beta@dummy.com', 'nomor_telepon' => '08101', 'alamat' => 'Jl. Betania', 'status' => 'Aktif'],
    //     ['id' => 3, 'nama' => 'Gamma', 'nim' => '324003', 'email' => 'gamma@dummy.com', 'nomor_telepon' => '08102', 'alamat' => 'Jl. Gammania', 'status' => 'Tidak aktif'],
    // ];

    public function index()
    {
        $members = Member::when(request('search'), fn ($query, $search) => 
            $query->where('nama', 'like', "%{$search}%")
        )->paginate(10);

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();
        
        Member::create($validated);

        return redirect()->route('members.index')
        ->with('success', "Member \"{$validated['nama']}\" berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::findOrFail($id);

        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::findOrFail($id);

        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMemberRequest $request, string $id)
    {
        $members = Member::findOrFail($id);

        $validated = $request->validate();

        $members->update($validated);

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $members = Member::findOrFail($id);
        $members->delete();

        return redirect()->route('members.index')
            ->with('success', "Anggota berhasil dihapus.");
    }
}
