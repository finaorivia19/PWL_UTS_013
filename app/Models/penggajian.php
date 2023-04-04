<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Penggajian as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class penggajian extends Model
{
    protected $table="penggajian"; 
 public $timestamps= false;
 protected $primaryKey = 'nip'; // Memanggil isi DB Dengan primarykey
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'Nip',
 'Nama',
 'Alamat',
 'Jabatan',
 'Gaji pokok',
 ];
};
