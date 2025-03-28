<?php

namespace App\Models\Cart;

use App\Models\Car\BusesLocation;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Guest\Entities\Buses;
use Modules\Guest\Entities\Vehicle;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'transactions';

    const STATUS_DEFAULT = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_CANCEL  = -1;

    const TYPE_PICK_DEFAULT     = 1;
    const TYPE_PICK_SUCCESS     = 2;
    const TYPE_PICK_SUCCESS_CAR = 3;
    const TYPE_PICK_CANCEL      = -1;


    public $statusGlobal;
    public $status = [
        self::STATUS_DEFAULT => [
            'name'  => 'Khởi tạo',
            'class' => 'secondary'
        ],
        self::STATUS_SUCCESS => [
            'name'  => 'Đã giao dịch',
            'class' => 'success'
        ],
        self::STATUS_CANCEL  => [
            'name'  => 'Huỷ bỏ',
            'class' => 'danger'
        ],
    ];

    public $statusPick = [
        self::TYPE_PICK_DEFAULT => [
            'name'  => 'Chưa đóng',
            'class' => 'secondary'
        ],
        self::TYPE_PICK_SUCCESS => [
            'name'  => 'Đã đón',
            'class' => 'success'
        ],
        self::TYPE_PICK_SUCCESS_CAR  => [
            'name'  => 'Đã đón và giao xe',
            'class' => 'danger'
        ],
        self::TYPE_PICK_CANCEL  => [
            'name'  => 'Đã huỷ',
            'class' => 'danger'
        ],
    ];


    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->status;
    }

    public function getStatus()
    {
        return Arr::get($this->status, $this->t_status, "[N\A]");
    }

    public function getStatusPick()
    {
        return Arr::get($this->statusPick, $this->t_status_pick_home, "[N\A]");
    }

    public function buses()
    {
        return $this->belongsTo(Buses::class, 't_busts_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'o_transaction_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 't_user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 't_vehicle_id');
    }

    public function buses_location_start()
    {
        return $this->belongsTo(BusesLocation::class, 't_buses_location_start');
    }

    public function buses_location_stop()
    {
        return $this->belongsTo(BusesLocation::class, 't_buses_location_stop');
    }

    public function starting()
    {
        return $this->belongsTo(Location::class, 't_starting_point_id');
    }

    public function destination()
    {
        return $this->belongsTo(Location::class, 't_destination_id');
    }
}
