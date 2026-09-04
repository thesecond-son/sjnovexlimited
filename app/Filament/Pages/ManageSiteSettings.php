<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class ManageSiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            SiteSetting::current()->toArray()
        );
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // FileUpload::make('logo_path')
                //     ->image()
                //     ->directory('logo'),

                TextInput::make('business_name')
                    ->required(),

                TextInput::make('phone'),

                TextInput::make('whatsapp_number')
                    ->helperText(
                        'Digits only, country code first, e.g. 2348031351449'
                    ),

                TextInput::make('whatsapp_default_message'),

                TextInput::make('email')
                    ->email(),

                TextInput::make('address'),

                TextInput::make('service_area'),

                TextInput::make('facebook_url')
                    ->url(),

                TextInput::make('instagram_url')
                    ->url(),

                TextInput::make('tiktok_url_personal')
                    ->url(),

                TextInput::make('tiktok_url_business')
                    ->url(),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        SiteSetting::current()->update(
            $this->form->getState()
        );

        Notification::make()
            ->title('Settings saved')
            ->success()
            ->send();
    }
}