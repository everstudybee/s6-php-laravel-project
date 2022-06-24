<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    /**
     * @mixin Builder
     */

    class Doctors extends Model
    {
        use HasFactory;

        protected $table = "doctors";
        protected $primaryKey = 'id';
        const CREATED_AT = 'created_at';
        const UPDATED_AT = 'updated_at';
    }
