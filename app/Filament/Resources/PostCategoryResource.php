<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCategoryResource\Pages;
use App\Filament\Resources\PostCategoryResource\RelationManagers;
use App\Models\PostCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;
    // protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon = 'icons.category';
    protected static ?string $recordTitleAttribute = 'title';
    public static function getNavigationLabel(): string
    {
        return trans('frontend.sub_categories');
    }
    public static function getPluralModelLabel(): string
    {
        return self::getNavigationLabel();
    }
    public static function getModelLabel(): string
    {
        return trans('frontend.sub_category');
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
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        $parent_record = app()->getlocale() == "en" ? 'parentCategory.title' : 'parentCategory.title_'.app()->getLocale();
        return $table
            ->columns([
                Tables\Columns\TextColumn::make($parent_record)->limit(20),
                Tables\Columns\TextColumn::make('title_ar')->limit(20),
                Tables\Columns\TextColumn::make('title_fr')->limit(20),
                Tables\Columns\TextColumn::make('slug')->limit(20),
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
            'index' => Pages\ManagePostCategories::route('/'),
        ];
    }    
}