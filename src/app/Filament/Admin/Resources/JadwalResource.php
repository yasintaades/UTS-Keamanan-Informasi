<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalResource\Pages;
use App\Filament\Admin\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

     public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('mobil_id')
                ->label('Mobil')
                ->relationship('mobil', 'nama_mobil')
                ->searchable()
                ->required(),

            Select::make('supir_id')
                ->label('Supir')
                ->relationship('supir', 'nama')
                ->searchable()
                ->required(),

            DatePicker::make('tanggal_jalan')
                ->label('Tanggal Jalan')
                ->required(),

            TextInput::make('tujuan')
                ->label('Tujuan')
                ->required()
                ->maxLength(255),
        ]);
    }

     public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('mobil.nama_mobil')
                ->label('Mobil')
                ->sortable()
                ->searchable(),

            TextColumn::make('supir.nama')
                ->label('Supir')
                ->sortable()
                ->searchable(),

            TextColumn::make('tanggal_jalan')
                ->label('Tanggal Jalan')
                ->date()
                ->sortable(),

            TextColumn::make('tujuan')
                ->label('Tujuan')
                ->sortable()
                ->searchable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
