<?php

namespace App\Filament\Mowies\Resources\NewsResource\Pages;

use App\Filament\Mowies\Resources\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
