<?php
namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index', compact('promotions'));
    }
    public function editpage(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian dari form

        $promotions = Promotion::where('title', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->get();

        return view('promotions.editpage', compact('promotions'));
    }


    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $promotion = new Promotion();
        $promotion->title = $request->title;
        $promotion->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $promotion->image = $imagePath;
        }

        $promotion->save();

        return redirect()->route('promotions.index')->with('success', 'Promosi berhasil ditambahkan!');
    }

    public function show(Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }
    // public function editpage(Promotion $promotion)
    // {
    //     return view('promotions.editpage', compact('promotion'));
    // }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $promotion->title = $request->title;
        $promotion->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada sebelum menyimpan yang baru
            if ($promotion->image) {
                Storage::disk('public')->delete($promotion->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
            $promotion->image = $imagePath;
        }

        $promotion->save();

        return redirect()->route('promotions.editpage')->with('success', 'Promosi berhasil diperbarui!');
    }

    public function destroy(Promotion $promotion)
    {
        // Hapus gambar dari penyimpanan jika ada
        if ($promotion->image) {
            Storage::disk('public')->delete($promotion->image);
        }

        // Hapus data promosi dari database
        $promotion->delete();

        return redirect()->route('promotions.index')->with('success', 'Promosi berhasil dihapus!');
    }
}
