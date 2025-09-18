<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LanguageToggle extends Component
{
    public $currentLanguage;
    public $availableLanguages;

    public function mount()
    {
        $this->currentLanguage = App::getLocale();
        $this->availableLanguages = config('languages');
    }

    public function switchLanguage($lang)
    {
       if(array_key_exists($lang,$this->availableLanguages))
       {
            Session::put('locale',$lang);
            App::setLocale($lang);
            $this->currentLanguage = $lang;
            $this->js('window.location.reload()');
       }
    }

    public function render()
    {
        return view('livewire.language-toggle');
    }
}
