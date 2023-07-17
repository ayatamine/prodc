<?php

namespace App\Filament\Resources\IntroCardResource\Pages;

use App\Filament\Resources\IntroCardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageIntroCards extends ManageRecords
{
    protected static string $resource = IntroCardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
