<?php

namespace App\Filament\Resources\PointCategories\Pages;

use App\Filament\Resources\PointCategories\PointCategoriesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePointCategories extends ManageRecords
{
    protected static string $resource = PointCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
