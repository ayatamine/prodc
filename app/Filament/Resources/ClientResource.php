<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationGroup = 'Users';
    protected static ?string $navigationIcon = 'icons.clients';
    protected static ?string $recordTitleAttribute = 'title';
    
    public static function canCreate():bool
    {
        return false;
    }
    public static function getPluralModelLabel(): string
    {
        return trans_choice('frontend.client',2);
    }
    public static function getModelLabel(): string
    {
        return trans_choice('frontend.client',1);
    }  
    public static function getNavigationLabel(): string
    {
        return trans_choice('frontend.client',2);
    }  
    public static function getNavigationGroup(): string
    {
        return trans_choice('frontend.user',2);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'id')
                    ->required(),
                Forms\Components\TextInput::make('points')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.full_name')->label(trans('forms.full_name')),
                Tables\Columns\TextColumn::make('user.usernmae')->label(trans('forms.username')),
                Tables\Columns\TextColumn::make('user.email')->label(trans('forms.email')),
                Tables\Columns\TextColumn::make('user.phone_number')->label(trans('forms.phone_number')),
                Tables\Columns\ToggleColumn::make('user.account_status')->label(trans('forms.account_status')),
                Tables\Columns\TextColumn::make('points')->label(trans('frontend.points')),
                Tables\Columns\TextColumn::make('created_at')->label(trans('frontend.joined_at'))
                ,
                
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageClients::route('/'),
            'view' => Pages\ViewClient::route('/{record}'),
        ];
    }    
}
