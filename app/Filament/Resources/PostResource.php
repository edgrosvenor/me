<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Person;
use App\Models\Post;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('uuid')
                    ->required()
                    ->maxLength(36)
                    ->default(fn() => Str::uuid()->toString()),
                Forms\Components\Select::make('person_id')
                    ->options(Person::pluck('name', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('body')
                    ->maxLength(280),
                Forms\Components\TextInput::make('image')
                    ->maxLength(255),
                Forms\Components\TextInput::make('image_alt')
                    ->maxLength(255),
                Forms\Components\Textarea::make('extended')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('likes')
                    ->required()
                    ->integer()
                    ->default(0),
                Forms\Components\TextInput::make('shares')
                    ->required()
                    ->integer()
                    ->default(0),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'post' => 'post',
                        'media' => 'media',
                        'response' => 'response',
                        'like' => 'like',
                    ])
                    ->default('post'),
                Forms\Components\TextInput::make('url')
                    ->url(),
                Forms\Components\TextInput::make('post_id'),
                Forms\Components\Toggle::make('promoted')
                    ->required()
                    ->default(false),
                Forms\Components\Toggle::make('pinned')
                    ->required()
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uuid'),
                Tables\Columns\TextColumn::make('person_id'),
                Tables\Columns\TextColumn::make('body'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('image_alt'),
                Tables\Columns\TextColumn::make('extended'),
                Tables\Columns\TextColumn::make('likes'),
                Tables\Columns\TextColumn::make('shares'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('post_id'),
                Tables\Columns\IconColumn::make('promoted')
                    ->boolean(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
