<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Filliere;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use SkipsFailures;

    protected $passwords = [];

    public function model(array $row)
    {
        // Générer un mot de passe aléatoire de 8 caractères (lettres et chiffres)
        $password = Str::random(8);

        // Vérification de l'existence de la filière
        $filiere = Filliere::where('name', $row['filiere'])->first();

        // Gestion de l'image
        $imagePath = null;
        if (!empty($row['image']) && Storage::disk('public')->exists('images/' . $row['image'])) {
            $imagePath = 'images/' . $row['image'];
        }

        // Stocker le mot de passe en clair pour le fichier texte
        $this->passwords[] = [
            'email' => $row['email'],
            'password' => $password
        ];

        return new User([
            'name' => $row['name'],
            'family_name' => $row['family_name'],
            'email' => $row['email'],
            'password' => Hash::make($password),
            'filliere_id' => $filiere ? $filiere->id : null,
            'image' => $imagePath,
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name' => 'required|string|max:255',
            '*.family_name' => 'required|string|max:255',
            '*.email' => 'required|email|unique:users,email',
            '*.filiere' => [
                'required',
                'string',
                Rule::exists('fillieres', 'name'),
            ],
        ];
    }

    public function customValidationMessages()
    {
        return [
            '*.name.required' => 'The name field is required.',
            '*.family_name.required' => 'The family name field is required.',
            '*.email.required' => 'The email field is required.',
            '*.email.unique' => 'The email has already been taken.',
            '*.filiere.required' => 'The filiere field is required.',
            '*.filiere.exists' => 'The specified filiere does not exist.',
        ];
    }

    public function __destruct()
    {
        // Enregistrer les mots de passe dans un fichier texte
        $txtFile = fopen(storage_path('app/public/passwords.txt'), 'w');
        foreach ($this->passwords as $passwordInfo) {
            fwrite($txtFile, "Email: " . $passwordInfo['email'] . " - Password: " . $passwordInfo['password'] . PHP_EOL);
        }
        fclose($txtFile);
    }
}
