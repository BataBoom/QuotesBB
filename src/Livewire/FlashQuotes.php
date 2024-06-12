<?php

namespace BataBoom\QuotesBB\Livewire;

use Livewire\Component;
use BataBoom\QuotesBB\Http\Resources\QuotesResource;

class FlashQuotes extends Component
{
    public $Quotes;
    public $source;
    public $inspire;
    public $NewQuote = '';
    public $NewSource = '';
    public $randomNumber;


    public function mount() {

        $this->Quotes = QuotesResource::Inspire();
        $this->inspire = array_column($this->Quotes, 'quote');
        $this->source = array_column($this->Quotes, 'source');
        $this->randomNumber = rand(array_key_first($this->inspire),array_key_last($this->inspire));
        $this->NewQuote = $this->inspire[$this->randomNumber];
        $this->NewSource = $this->source[$this->randomNumber];
    }

    public function hydrate() {
        $this->reset('randomNumber');
        $this->Quotes = QuotesResource::Inspire();
        $this->inspire = array_column($this->Quotes, 'quote');
        $this->source = array_column($this->Quotes, 'source');
        $this->randomNumber = rand(array_key_first($this->inspire),array_key_last($this->inspire));
        $this->NewQuote = $this->inspire[$this->randomNumber];
        $this->NewSource = $this->source[$this->randomNumber];
    }

    public function poll()
    {
        $this->refresh(); // Refresh quote
    }

    public function updated()
    {
        $this->poll(); // Trigger polling after each update
    }

    public function render()
    {

        return view('quotesbb::livewire.quotes', [
            'quotes' => $this->NewQuote,
            'sources' => $this->NewSource,
        ]);
    }
}
