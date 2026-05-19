<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name_students')
                    ->required(),
                TextInput::make('nis')
                    ->required(),
            ]);
    }
}
