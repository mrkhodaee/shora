<?php

namespace App\Filament\Pages;

use Filament\Tables\Actions\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Livewire\Component;

class Dashboard extends Component implements HasTable
{
   use InteractsWithTable;
   public function table(Table $table): Table
   {
       return $table
       ->query();
   }
}
