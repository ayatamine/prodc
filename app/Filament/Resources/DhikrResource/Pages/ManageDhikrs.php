<?php

namespace App\Filament\Resources\DhikrResource\Pages;

use App\Filament\Resources\DhikrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDhikrs extends ManageRecords
{
    protected static string $resource = DhikrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
