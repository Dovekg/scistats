<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Uuids;

class Task extends Model {

    use Uuids;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $table = 'tasks';

    protected $fillable = ['id', 'user_id', 'agreement', 'level', 'description', 'email', 'phone', 'data_file', 'data_mime', 'data_ori_filename', 'result_file', 'result_mime', 'result_ori_filename', 'review_file', 'review_mime', 'review_ori_filename', 'budged', 'pay', 'pay_method', 'pay_account', 'require_invoice', 'invoice_delivered', 'verified', 'claimed', 'completed'];

    protected $casts = [
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function methods()
    {
        return $this->belongsToMany('App\Models\Method');
    }
    
}