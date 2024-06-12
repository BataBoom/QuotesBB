<?php

namespace BataBoom\QuotesBB\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;


class QuotesResource extends JsonResource
{
    public $quotes;

    public function __construct()
    {

        $file = Config::get('quotesbb.all');
        $this->quotes = Storage::get($file);


    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function Inspire()
    {
        $file = Config::get('quotesbb.all');
        $file = Storage::get($file);

        return json_decode($file, true);
    }
}
