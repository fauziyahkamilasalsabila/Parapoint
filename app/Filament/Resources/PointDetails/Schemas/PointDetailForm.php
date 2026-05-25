<?php

namespace App\Filament\Resources\PointDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PointDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student', 'name_students')
                    ->searchable()
                    ->required(),
                 Select::make('teacher_id')
                    ->relationship('teacher','name_teacher')
                    ->searchable()
                    ->required(),
                 Select::make('category_id')
                    ->relationship('pointCategory','description_point')
                    ->searchable()
                    ->required(),
                 TextInput::make('initial_point')
                    ->required(),
                 TextInput::make('remaining_point')
                    ->required(),
            ]);
    }
}
