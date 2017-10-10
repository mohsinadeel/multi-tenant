<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SampleSeeder extends Seeder
{
    public function run()
    {
        DB::table('samples')->insert([
            'name' => Str::random(5)
        ]);

        $tenantExtend = new \Hyn\Tenancy\Tests\Extend\TenantExtend();
        $tenantExtend->name = Str::random(5);
        $tenantExtend->save();
    }
}