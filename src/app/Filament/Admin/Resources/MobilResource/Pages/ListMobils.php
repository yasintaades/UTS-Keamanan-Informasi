<?php

namespace App\Filament\Admin\Resources\MobilResource\Pages;

use App\Filament\Admin\Resources\MobilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMobils extends ListRecords
{
    protected static string $resource = MobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
