<?php

namespace App\Filament\Resources\Siswas;

use app\Filament\Resources\Siswas\Tables\SiswasTable;
use app\Filament\Resources\Siswas\Schemas\SiswaForm;
use app\Filament\Resources\Siswas\Pages\CreateSiswa;
use app\Filament\Resources\Siswas\Pages\EditSiswa;
use app\Filament\Resources\Siswas\Pages\ListSiswas;
use App\Models\Siswa;
use BackedEnum;
use UnitEnum;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;

Class SiswaResource extends Resource{
    protected static ?string $model = Siswa::class;
    protected static  UnitEnum|string|null $navigationGroup = 'SMP Mentari';
    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedUser;
    protected static ?string $navigationLabel = 'Siswa';
    protected static ?string $pluralModelLabel = 'Siswa';
    protected static ?string $modeLabel = 'Siswa';

    public static function form(Schema $schema): Schema
    {
        return SiswaForm::build($schema);
    }
    public static function table(Table $table): Table
    {
        return SiswasTable::table($table);
    }
     public static function getPages(): array
    {
        return [
            'index' => ListSiswas::route('/'),
            'create' => CreateSiswa::route('/create'),
            'edit' => EditSiswa::route('/{record}/edit'),
        ];
    }
}