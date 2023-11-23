<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model für die Tabelle article.
 */
class Article extends Model
{
	use HasFactory;

	/**
	 *
	 * @var string
	 */
	protected $table = 'article';

	/**
	 * Definition des Primary Keys als UUID
	 */
	protected $primaryKey = 'id';
	public $incrementing = true;
	protected $keyType = 'int';

}
