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
                    ->relationship('class_student','id')
                    ->required(),
                TextInput::make('nis')
                    ->required(),
                TextInput::make('name_student')
                    ->required(),
            ]);
    }
}
