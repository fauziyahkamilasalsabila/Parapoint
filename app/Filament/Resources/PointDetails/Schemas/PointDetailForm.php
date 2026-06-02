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
                    ->preload()
                    ->required(),

                 Select::make('category_id')
                     ->relationship('pointCategory', 'description_point')
                     ->reactive()
                     ->afterStateUpdated(function ($state, callable $set) {
                        $category = \App\Models\PointCategory::find($state);
                        if ($category) {
                           $set('amount', $category->amount);
                        }
                     })
                     ->required(),

               TextInput::make('amount')
                     ->disabled()
                     ->dehydrated(false),

               TextInput::make('occurrence_number')
                     ->numeric()
                     ->default(1)
                     ->reactive()
                     ->required()
                      ->afterStateUpdated(function ($state, callable $get, callable $set) {

                        $amount = $get('amount') ?? 0;

                        $set('counted_point', $amount * $state);
                    }),

               TextInput::make('counted_point')
                     ->disabled()
                     ->dehydrated(false),
    ]);
            
    }
}
