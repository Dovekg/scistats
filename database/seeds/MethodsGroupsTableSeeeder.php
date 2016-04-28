<?php

use Illuminate\Database\Seeder;

class MethodsGroupsTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('methods_groups')->insert([
              [
              'name' => 'Group1'
              ],
              [
              'name' => 'Group2'
              ],
              [
              'name' => 'Group3'
              ]
          ]);
  }
}
