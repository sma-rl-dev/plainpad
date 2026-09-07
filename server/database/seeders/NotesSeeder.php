<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    public function run()
    {
        DB::table('notes')->where('user_id', '00000000-0000-4000-8000-000000000001')->delete();
        DB::table('notes')->insert([
            ['id' => '10000000-0000-4000-8000-000000000001', 'user_id' => '00000000-0000-4000-8000-000000000001', 'title' => 'Quarterly Launch Plan', 'content' => "Quarterly Launch Plan\nCoordinate the April rollout with product, support, and engineering.", 'pinned' => true, 'created_at' => '2024-01-08 09:00:00', 'updated_at' => '2024-03-28 15:30:00'],
            ['id' => '10000000-0000-4000-8000-000000000002', 'user_id' => '00000000-0000-4000-8000-000000000001', 'title' => 'Design Review Checklist', 'content' => "Design Review Checklist\nConfirm keyboard navigation, empty states, and release notes before approval.", 'pinned' => false, 'created_at' => '2024-01-15 10:00:00', 'updated_at' => '2024-03-20 11:15:00'],
            ['id' => '10000000-0000-4000-8000-000000000003', 'user_id' => '00000000-0000-4000-8000-000000000001', 'title' => 'Incident Retrospective: API Timeout', 'content' => "Incident Retrospective: API Timeout\nThe March API timeout was resolved; follow-up owner is platform engineering.", 'pinned' => false, 'created_at' => '2024-02-06 14:00:00', 'updated_at' => '2024-03-12 16:45:00'],
            ['id' => '10000000-0000-4000-8000-000000000004', 'user_id' => '00000000-0000-4000-8000-000000000001', 'title' => 'Vendor Renewal Notes', 'content' => "Vendor Renewal Notes\nFinance needs the renewal comparison before the April budget review.", 'pinned' => false, 'created_at' => '2024-02-20 09:30:00', 'updated_at' => '2024-03-05 09:30:00'],
        ]);
    }
}
