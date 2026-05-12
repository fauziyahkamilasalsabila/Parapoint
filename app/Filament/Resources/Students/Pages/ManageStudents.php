<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageStudents extends ManageRecords
{
    protected static string $resource = StudentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
