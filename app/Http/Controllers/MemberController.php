<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest;

class MemberController extends Controller
{
    private array $members = [
        ['id' => 1,'nama' => 'Alfa', 'nim' => '324001', 'email' => 'alfa@dummy.com', 'nomor_telepon' => '08100', 'alamat' => 'Jl. Alfabeta', 'status' => 'Aktif'],
        ['id' => 2, 'nama' => 'Beta', 'nim' => '324002', 'email' => 'beta@dummy.com', 'nomor_telepon' => '08101', 'alamat' => 'Jl. Betania', 'status' => 'Aktif'],
        ['id' => 3, 'nama' => 'Gamma', 'nim' => '324003', 'email' => 'gamma@dummy.com', 'nomor_telepon' => '08102', 'alamat' => 'Jl. Gammania', 'status' => 'Tidak aktif'],
    ];

    public function index()
    {
        $members = $this->members;
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

        return redirect()->route('members.index')
        ->with('success', "Member \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}
