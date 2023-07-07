<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('language_id')
                    ->relationship('language', 'name')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn($state, callable $set)=> $set('slug',Str::slug($state)))                    ,
                Forms\Components\TextInput::make('slug')->label('URL')
                    ->required()
                    ->maxLength(255),
                Forms\Components\fileUpload::make('image')->label('Meta Image')
                    ->required(),
                Card::make()
                        ->schema([
                  
                        MarkdownEditor::make('content')
                            ->toolbarButtons([
                                'attachFiles',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'edit',
                                'italic',
                                'link',
                                'orderedList',
                                'preview',
                                'strike',
                            ])
                ]),

                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_description')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('language.name'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug')->label('URL'),
                // Tables\Columns\TextColumn::make('content'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('meta_title'),
                Tables\Columns\TextColumn::make('meta_description'),
            ])
            ->filters([
               
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
