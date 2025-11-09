<?php
namespace App\Filament\Resources\Siswas\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class SiswasTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),
                    

                TextColumn::make('nama')
                    ->label('nama')
                    ->sortable()
                    ->searchable(),

                BadgeColumn::make('jenis_kelamin')
                    ->label('JK')
                    ->colors([
                        'success' => 'P',
                        'info' => 'L',
                    ])
                    // if  state = P maka perempuan else laki-laki
                    ->formatStateUsing(fn ($state) => ($state) === 'P' ? 'Perempuan' : 'Laki-laki'),
                    TextColumn::make('kelas')
                    ->label('Kelas')
                    ->badge(),
                    TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date('d M Y'),
            ])
            ->defaultSort('nama');
            
    }
}