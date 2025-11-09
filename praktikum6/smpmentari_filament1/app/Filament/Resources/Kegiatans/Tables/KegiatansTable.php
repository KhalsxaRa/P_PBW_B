<?php

namespace App\Filament\Resources\Kegiatans\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
// use Filament\Tables\Filters\DatePicker;
use Filament\Forms\Components\DatePicker;
class KegiatansTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->limit(40)
                    ->wrap()
                    ->sortable(true),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(true),

                TextColumn::make('Ringkasan')
                    ->label('Ringkasan')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                ImageColumn::make('foto')
                    ->label('Foto')
                    ->square()
                    ->disk('public')
                    ->size(60),

            ])
            ->defaultSort('tanggal', 'desc')
            ->filters([
                Tables\Filters\Filter::make('tahun')
                  ->form([
                           
                            DatePicker::make('from')
                                ->label('Dari tahun')
                                ->native(false)
                                ->displayFormat('Y'),
                            DatePicker::make('until')
                                ->label('Sampai')
                                ->native(false)
                                ->displayFormat('Y'),
                  ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'] ?? null, fn ($query, $from) => $query->whereYear('tanggal', '>=', $from))
                            ->when($data['until'] ?? null, fn ($query, $until) => $query->whereYear('tanggal', '<=', $until));
                    }),
                ]);
            }
 }
