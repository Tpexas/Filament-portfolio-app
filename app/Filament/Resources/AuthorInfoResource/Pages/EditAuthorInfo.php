<?php

namespace App\Filament\Resources\AuthorInfoResource\Pages;

use App\Filament\Resources\AuthorInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAuthorInfo extends EditRecord
{
    protected static string $resource = AuthorInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
