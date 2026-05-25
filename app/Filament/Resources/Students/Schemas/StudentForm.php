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
                    ->searchable()
                    ->required(),
                TextInput::make('name_students')
                    ->required(),
                TextInput::make('nis')
                    ->required(),
            ]);
    }
}
