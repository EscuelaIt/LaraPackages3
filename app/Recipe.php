<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkla\Translator\IsTranslatable;
use Vinkla\Translator\Translatable;

/**
 * This is the article eloquent model class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Recipe extends Model implements IsTranslatable
{
    use Translatable;

    /**
     * List of translated attributes.
     *
     * @var string[]
     */
    protected $translatedAttributes = ['title','description','locale'];

    /**
     * Get the translations relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(RecipeTranslation::class);
    }
}