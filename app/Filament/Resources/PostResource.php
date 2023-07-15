<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon = 'icons.posts';
    protected static ?string $recordTitleAttribute = 'title';
    public static function getPluralModelLabel(): string
    {
        return trans('frontend.articles');
    }
    public static function getModelLabel(): string
    {
        return trans('frontend.article');
    }  
    public static function getNavigationLabel(): string
    {
        return trans('frontend.blog');
    }  
    public static function getNavigationGroup(): string
    {
        return trans('frontend.blog');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('language_id')
                    ->relationship('language', 'id'),
                Forms\Components\Select::make('post_category_id')
                    ->relationship('postCategory', 'title'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'id'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->columnSpan('full')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TagsInput::make('tags')->separator(',')
                    ->required(),
                Forms\Components\TagsInput::make('keywords')->separator(',')
                    ->required(),
                Forms\Components\TextInput::make('meta_seo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_publishable')
                    ->required(),
                Forms\Components\fileUpload::make('image')
                    ->directory('posts')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('language.name'),
                Tables\Columns\TextColumn::make('postCategory.title'),
                Tables\Columns\TextColumn::make('user.full_name'),
                Tables\Columns\TextColumn::make('title')->limit(20),
                Tables\Columns\TextColumn::make('slug')->limit(20),
                // Tables\Columns\TextColumn::make('content'),
                // Tables\Columns\TextColumn::make('tags'),
                // Tables\Columns\TextColumn::make('keywords'),
                // Tables\Columns\TextColumn::make('meta_seo'),
                Tables\Columns\ToggleColumn::make('is_publishable'),
                // Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ,
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ManagePosts::route('/'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
            
        ];
    }    
    
}
