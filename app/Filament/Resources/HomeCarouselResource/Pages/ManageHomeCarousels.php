<?php

namespace App\Filament\Resources\HomeCarouselResource\Pages;

use App\Filament\Resources\HomeCarouselResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeCarousels extends ManageRecords
{
    protected static string $resource = HomeCarouselResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
