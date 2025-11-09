<?php

// jalur
namespace App\Filament\Resources\Kegiatans; 

use App\Filament\Resources\Kegiatans\Pages\CreateKegiatan;
use App\Filament\Resources\Kegiatans\Pages\EditKegiatan;
use App\Filament\Resources\Kegiatans\Pages\ListKegiatans;
use App\Filament\Resources\Kegiatans\Schemas\KegiatanForm;
use App\Filament\Resources\Kegiatans\Tables\KegiatansTable;
use App\Models\Kegiatan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;

    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedRectangleStack;
   protected static  UnitEnum|string|null $navigationGroup = 'SMP Mentari';
    // protected static ?string $navigationIcon = Heroicon::OutlinedUser;
    protected static ?string $recordTitleAttribute = 'SMP Mentari';
    // protected static ?string $navigationGroup = 'SMP-Mentari';
    protected static ?string $navigationLabel = 'Kegiatan';
    protected static ?string $modeLabel = 'Kegiatan';
    protected static ?string $pluralModelLabel = 'Kegiatan';
    public static function form(Schema $schema): Schema
    {
        return KegiatanForm::build($schema);
    }

    public static function table(Table $table): Table
    {
        return KegiatansTable::table($table);
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
            'index' => ListKegiatans::route('/'),
            'create' => CreateKegiatan::route('/create'),
            'edit' => EditKegiatan::route('/{record}/edit'),
        ];
    }
}
