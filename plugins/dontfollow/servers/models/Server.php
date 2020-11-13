<?php namespace DontFollow\Servers\Models;

use Model;
use Cache;
use Session;
use Thedudeguy\Rcon;
use ApplicationException;
use DontFollow\Servers\Classes\Query;

/**
 * Server Model
 */
class Server extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'servers';

    public $timestamps = false;

    public $appends = [
        'info'
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'ip',
        'port',
        'description',
        'rcon_port',
        'rcon_password',
        'is_port_hidden'
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'name' => 'required|between:3,255|unique:servers',
        'ip' => 'required|string',
        'port' => 'required|numeric',
        'rcon_password' => 'required|between:6,255',
        'description' => 'nullable|between:8,255',
        'short_description' => 'nullable|between:3,255',
        'is_port_hidden' => 'nullable|boolean'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function setRconPasswordAttribute($password)
    {
        $this->attributes['rcon_password'] = base64_encode($password);
    }

    public function getInfoAttribute()
    {
        return Cache::remember($this->address, Settings::get('cache.enabled', true) ? Settings::get('cache.timeout', 10) : 0, function () {
            return Query::get($this);
        });
    }

    public function getRconPasswordAttribute($password)
    {
        return base64_decode($password);
    }

    public function getAddressAttribute()
    {
        if ($this->is_port_hidden) {
            return $this->ip;
        }

        return "{$this->ip}:{$this->port}";
    }

    public function beforeSave()
    {
        if (Settings::get('rcon.checkConnectionBeforeSaveServer', false)) {
            $rcon = new Rcon($this->ip, $this->rcon_port, $this->rcon_password, config('rcon.timeout', 1));

            if (!$rcon->connect()) {
                throw new ApplicationException('Не удалось получить доступ к серверу через RCON. Пожалуйста, проверьте правильность введенных данных и повторите снова.');
            }
        }
    }

    public function remember()
    {
        Session::put('server', $this->attributes);
        return $this->attributes;
    }

    public static function selected()
    {
        $server = Session::get('server', false);
        if (!$server || !Server::whereId($server['id'])->exists()) {
            $firstServer = self::first();
            if (!$firstServer) {
                return false;
            }

            $firstServer->remember();
        }

        $server = Session::get('server');

        if (!$server) {
            return false;
        }

        return Server::whereId($server['id'])->first();
    }
}
