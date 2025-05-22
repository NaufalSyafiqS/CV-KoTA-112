<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member; // <<< PASTIKAN BARIS INI ADA

class AboutController extends Controller
{
    /**
     * Display the about page with all members.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all members from the database
        $members = Member::all();

        // Pass the members data to the 'about' view
        return view('about', compact('members'));
    }

    /**
     * Display the specified member's profile.
     *
     * Menggunakan Route Model Binding, Laravel akan menemukan Member berdasarkan {member} di URL.
     * Jika tidak ditemukan, akan otomatis melempar 404.
     *
     * @param  \App\Models\Member  $member <<< PASTIKAN PARAMETERNYA BENAR SESUAI ROUTE MODEL BINDING
     * @return \Illuminate\View\View|\Illuminate\Http\Response
     */
    // <<< PASTIKAN METHOD show INI ADA DAN TERDEFINISI DENGAN BENAR
    public function show(Member $member)
    {
        // $member object is already loaded by Route Model Binding

        // Return a view to display the member's full profile
        return view('member.show', compact('member'));
    }

    // Jika Anda memilih method show(id) tanpa Route Model Binding, gunakan ini:
    // public function show($id)
    // {
    //     $member = Member::findOrFail($id); // Find member by ID, or throw 404 if not found
    //     return view('member.show', compact('member'));
    // }
}