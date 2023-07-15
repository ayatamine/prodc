<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostParentCategoryResource\Pages;
use App\Filament\Resources\PostParentCategoryResource\RelationManagers;
use App\Models\PostParentCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostParentCategoryResource extends Resource
{
    protected static ?string $model = PostParentCategory::class;

    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon = 'icons.specialities';
    protected static ?string $recordTitleAttribute = 'title';
    public static function getPluralModelLabel(): string
    {
        return self::getNavigationLabel();
    }
    public static function getModelLabel(): string
    {
        return trans('frontend.main_category');
    }  
    public static function getNavigationLabel(): string
    {
        return trans('frontend.main_categories');
    }  
    public static function getNavigationGroup(): string
    {
        return trans('frontend.blog');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_ar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_fr')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->limit(20),
                Tables\Columns\TextColumn::make('title')->limit(20),
                Tables\Columns\TextColumn::make('title_ar')->limit(20),
                Tables\Columns\TextColumn::make('title_fr')->limit(20),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePostParentCategories::route('/'),
        ];
    }    
}
