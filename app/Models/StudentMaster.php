<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMaster extends Model
{
    use HasFactory;
    protected $table = 'studentmaster';
    protected $primaryKey = 'StudentID';
    protected $fillable = ['RegistrationNo',
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
    'ReasonSLC'
    ];

}
