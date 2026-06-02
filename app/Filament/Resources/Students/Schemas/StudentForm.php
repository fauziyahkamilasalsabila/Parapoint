<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('class_id')
                    ->relationship('classStudent', 'class_name')
                    ->preload()
                    ->required(),
                TextInput::make('name_students')
                    ->required(),
                TextInput::make('nis')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->validationMessages([
                    'required' => 'NIS wajib diisi.',
                    'unique' => 'NIS ini sudah terdaftar dan tidak dapat diinput ulang.',
                ]),
            ]);
    }
}
