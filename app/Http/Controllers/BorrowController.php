<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Loan;
use App\Models\Exemplar;
use App\Models\Statut;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function borrowing() {
        $user = auth()->user();
        if (is_null($user)) {
            return redirect()->route('user.connect');
        }
        
        $loans = Loan::with('borrow', 'user')->where('id_user', $user->id)->get();
        return view('borrow.list', compact('loans'));
    }

    public function borrow($exemplarId) {
        $user = auth()->user();
        if (is_null($user)) {
            return redirect()->route('user.connect')->with('error', 'Veuillez vous connecter pour emprunter.');
        }
        
        $exemplar = Exemplar::findOrFail($exemplarId);
        
        $borrow = Borrow::create([
            'borrowed_date' => now()
        ]);
        
        Loan::create([
            'id_user' => $user->id,
            'id_borrow' => $borrow->id,
            'id_exemplar' => $exemplar->id
        ]);
        
        $exemplar->update(['id_statut' => 2]);
        
        return redirect()->route('borrowing.list');
    }

    public function return($id) {
        try {
            $loan = Loan::findOrFail($id);
            $exemplarId = $loan->id_exemplar;
            
            // Remettre l'exemplaire en disponible
            if ($exemplarId) {
                $exemplar = Exemplar::find($exemplarId);
                if ($exemplar) {
                    $exemplar->update(['id_statut' => 1]);
                }
            }
            
            // Supprimer le prêt
            $loan->delete();
            
            return redirect()->route('borrowing.list');
        } catch (\Exception $e) {
            return redirect()->route('borrowing.list')->with('error', 'Erreur: ' . $e->getMessage());
        }
    }
}
