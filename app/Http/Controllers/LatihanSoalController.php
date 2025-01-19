<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanSoalController extends Controller
{
    public function index()
    {
        return \view('latihansoal'); // Mengarah ke view latihan_soal.blade.php
    }

    public function submit(Request $request)
    {
        $correctAnswers = [
            'question1' => 'b',
            'question2' => 'c',
            'question3' => 'b',
            'question4' => 'c',
            'question5' => 'c',
        ];

        $correctCount = 0;

        // Periksa setiap soal untuk melihat apakah jawabannya benar
        foreach ($correctAnswers as $question => $correctAnswer) {
            if ($request->input($question) === $correctAnswer) {
                $correctCount++;
            }
        }

        // Kembalikan hasil ke halaman latihan soal dengan score
        return view('latihansoal', [
            'score' => "$correctCount/5"
        ]);
    }
}
