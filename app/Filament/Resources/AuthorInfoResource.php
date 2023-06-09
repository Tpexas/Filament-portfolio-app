<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorInfoResource\Pages;
use App\Filament\Resources\AuthorInfoResource\RelationManagers;
use App\Models\AuthorInfo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AuthorInfoResource extends Resource
{
    protected static ?string $model = AuthorInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                Forms\Components\FileUpload::make('logo')
                ->label(__('Website logo')),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(2048)
                    ->label(__('Website title')),
                            ])
                    ]),
                    Forms\Components\Grid::make(2)
                            ->schema([
                    Forms\Components\Card::make()
                    ->schema([
                                Forms\Components\FileUpload::make('author_image'),
                                
                                Forms\Components\TextInput::make('intro_title')
                                ->required()
                                ->maxLength(2048)
                                ->label(__('Portfolio intro title'))                           
                    ])->columnSpan(1),
                    Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Textarea::make('intro')
                                ->required()
                                ->maxLength(2048)
                                ->label(__('Portfolio intro text'))
                    ])->columnSpan(1),
                    ]),
                    
                    Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Card::make()
                    ->schema([
                                Forms\Components\TextInput::make('github')
                                ->required()
                                ->maxLength(255),
                                Forms\Components\TextInput::make('linkedin')
                                ->required()
                                ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),                          
                    ])->columnSpan(1),
                    Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\RichEditor::make('about_body')
                        ->required()
                        ->label(__('"About me" text'))
                    ])->columnSpan(2),
                            ])
                    ]);
                
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAuthorInfos::route('/'),
            'create' => Pages\CreateAuthorInfo::route('/create'),
            'edit' => Pages\EditAuthorInfo::route('/{record}/edit'),
        ];
    }    
}
