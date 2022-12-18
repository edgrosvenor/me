<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonResource\Pages;
use App\Filament\Resources\PersonResource\RelationManagers;
use App\Models\Person;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('handle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->maxLength(255),
                Forms\Components\TextInput::make('banner')
                    ->maxLength(255),
                Forms\Components\TextInput::make('follow_url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('message_url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bio')
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('work')
                    ->maxLength(255),
                Forms\Components\TextInput::make('follows')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('suspended')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('handle'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('banner'),
                Tables\Columns\TextColumn::make('follow_url'),
                Tables\Columns\TextColumn::make('message_url'),
                Tables\Columns\TextColumn::make('bio'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('link'),
                Tables\Columns\TextColumn::make('work'),
                Tables\Columns\TextColumn::make('follows'),
                Tables\Columns\TextColumn::make('suspended'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePerson::route('/create'),
            'edit' => Pages\EditPerson::route('/{record}/edit'),
        ];
    }    
}
