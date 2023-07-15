<?php

namespace App\Filament\Resources\PostParentCategoryResource\Pages;

use App\Filament\Resources\PostParentCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePostParentCategories extends ManageRecords
{
    protected static string $resource = PostParentCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
