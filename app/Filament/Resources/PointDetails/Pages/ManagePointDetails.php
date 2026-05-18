<?php

namespace App\Filament\Resources\PointDetails\Pages;

use App\Filament\Resources\PointDetails\PointDetailsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePointDetails extends ManageRecords
{
    protected static string $resource = PointDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
