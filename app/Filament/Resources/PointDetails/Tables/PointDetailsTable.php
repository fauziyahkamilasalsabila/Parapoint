<?php

namespace App\Filament\Resources\PointDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PointDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name_students')
                    ->label('Nama Siswa')
                    ->searchable(),

                TextColumn::make('teacher.name_teacher')
                    ->label('Guru')
                    ->searchable(),

                TextColumn::make('pointCategory.description_point')
                    ->label('Kategori Point')
                    ->searchable(),

                TextColumn::make('pointCategory.amount')
                    ->label('Point (Kategori)')
                    ->numeric(),

                TextColumn::make('occurrence_number')
                    ->label('Jumlah Kejadian')
                    ->numeric(),

                TextColumn::make('counted_point')
                    ->label('Total Point')
                    ->numeric(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Tanggal')
                    ->sortable(),
    

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
