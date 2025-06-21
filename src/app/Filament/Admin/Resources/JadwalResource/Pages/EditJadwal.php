<?php

namespace App\Filament\Admin\Resources\JadwalResource\Pages;

use App\Filament\Admin\Resources\JadwalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwal extends EditRecord
{
    protected static string $resource = JadwalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
