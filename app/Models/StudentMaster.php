<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMaster extends Model
{
    use HasFactory;
    protected $table = 'studentmaster';
    protected $primaryKey = 'StudentID';
    protected $fillable = [
        'RegistrationNo',
        'StudentName',
        'SCNIC',
        'DOB',
        'GenderID',
        'DeptID',
        'FatherName',
        'FCNIC',
        'GuardianName',
        'GuardianRelation',
        'FMobile',
        'CurrentAddress',
        'PermanentAddress',
        'CountryID',
        'ProvinceID',
        'DistrictID',
        'SessionID',
        'AdmissionDate',
        'HijriYear',
        'StudentTypeID',
        'ClassID',
        'SectionID',
        'HostelStatus',
        'PreviousMadrasa',
        'IslamicEdu',
        'AsriEdu',
        'AddlEdu',
        'DOSLC',
        'ReasonSLC',
        'Image'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryID');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'ProvinceID');
    }
    public function district()
    {
        return $this->belongsTo(District::class, 'DistrictID');
    }
    public function dept()
    {
        return $this->belongsTo(Department::class, 'DeptID');
    }
    public function class ()
    {
        return $this->belongsTo(Classes::class, 'ClassID');
    }
    public function section()
    {
        return $this->belongsTo(Sections::class, 'SectionID');
    }
    public function session()
    {
        return $this->belongsTo(Session::class, 'SessionID');
    }

}
