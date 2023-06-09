<?php

namespace App\Filament\Resources\AuthorInfoResource\Pages;

use App\Filament\Resources\AuthorInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAuthorInfos extends ListRecords
{
    protected static string $resource = AuthorInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
