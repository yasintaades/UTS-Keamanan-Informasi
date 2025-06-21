<?php

namespace App\Filament\Admin\Resources\MobilResource\Pages;

use App\Filament\Admin\Resources\MobilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMobil extends EditRecord
{
    protected static string $resource = MobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
