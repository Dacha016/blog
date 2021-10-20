<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];  // koristimo pri skladistenju vise unosa odjednom. Ako je prazan niz dozvoljen je unos svih polja
    protected $with = ["category","author"];//  koristimo da bi izbegli ponavljanje query-ja
    // protected $fillable=["title"];    //  odredjujemo joja polja mogu da se popune prilikom skladisenja vise unosa
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class,"user_id");
    }
}
