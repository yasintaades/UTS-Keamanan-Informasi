<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MobilResource\Pages;
use App\Filament\Admin\Resources\MobilResource\RelationManagers;
use App\Models\Mobil;
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


class MobilResource extends Resource
{
    protected static ?string $model = Mobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_mobil')
                    ->label('Nama Mobil')
                    ->required(),

                TextInput::make('plat_nomor')
                    ->label('Plat Nomor')
                    ->required(),

                TextInput::make('warna')
                    ->label('Warna'),

                Select::make('supir_id')
                    ->label('Supir')
                    ->relationship('supir', 'nama')
                    ->searchable()
                    ->preload()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_mobil')
                    ->label('Nama Mobil')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('plat_nomor')
                    ->label('Plat Nomor')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('warna')
                    ->label('Warna')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('supir.nama')
                    ->label('Supir')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([])
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
            'index' => Pages\ListMobils::route('/'),
            'create' => Pages\CreateMobil::route('/create'),
            'edit' => Pages\EditMobil::route('/{record}/edit'),
        ];
    }
}
