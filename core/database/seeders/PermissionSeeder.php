<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->id = 1;
        $permission->name = "dashboard";
        $permission->display_name = "Dashboard";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        //administration
        $permission = new Permission();
        $permission->id = 4;
        $permission->name = "adminsite_text";
        $permission->display_name = "adminsite Text";
        $permission->submodule_id = 3;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 8;
        $permission->name = "administration";
        $permission->display_name = "Administration";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 9;
        $permission->name = "admin_user_list";
        $permission->display_name = "Admin User List";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 10;
        $permission->name = "admin_user_add";
        $permission->display_name = "Admin User Add";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 11;
        $permission->name = "admin_user_edit";
        $permission->display_name = "Admin User Edit";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 12;
        $permission->name = "admin_user_delete";
        $permission->display_name = "Admin User Delete";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 13;
        $permission->name = "role_list";
        $permission->display_name = "Role List";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 14;
        $permission->name = "role_add";
        $permission->display_name = "Role Add";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 15;
        $permission->name = "role_edit";
        $permission->display_name = "Role Edit";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 16;
        $permission->name = "role_delete";
        $permission->display_name = "Role Delete";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 17;
        $permission->name = "role_view";
        $permission->display_name = "Role View";
        $permission->submodule_id = 8;
        $permission->guard_name = "admin";
        $permission->save();

        //Email setting
        $permission = new Permission();
        $permission->id = 2;
        $permission->name = "email_setting";
        $permission->display_name = "Email Setting";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 18;
        $permission->name = "email_configure";
        $permission->display_name = "Email Configure";
        $permission->submodule_id = 2;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 19;
        $permission->name = "email_template";
        $permission->display_name = "Email Template";
        $permission->submodule_id = 2;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 20;
        $permission->name = "email_template_edit";
        $permission->display_name = "Email Template Edit";
        $permission->submodule_id = 2;
        $permission->guard_name = "admin";
        $permission->save();

        //setting
        $permission = new Permission();
        $permission->id = 21;
        $permission->name = "system_setting";
        $permission->display_name = "General Setting";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 22;
        $permission->name = "site_setting";
        $permission->display_name = "Site Setting";
        $permission->submodule_id = 21;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 23;
        $permission->name = "database_backup";
        $permission->display_name = "Database Backup";
        $permission->submodule_id = 21;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 3;
        $permission->name = "manage_language";
        $permission->display_name = "Manage Language";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        //category_permission
        $permission = new Permission();
        $permission->id = 24;
        $permission->name = "categories";
        $permission->display_name = "Categories";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 25;
        $permission->name = "category_list";
        $permission->display_name = "Category List";
        $permission->submodule_id = 24;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 26;
        $permission->name = "category_add";
        $permission->display_name = "Category Add";
        $permission->submodule_id = 24;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 27;
        $permission->name = "category_edit";
        $permission->display_name = "Category Edit";
        $permission->submodule_id = 24;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 28;
        $permission->name = "category_delete";
        $permission->display_name = "Category Delete";
        $permission->submodule_id = 24;
        $permission->guard_name = "admin";
        $permission->save();

        // service_permission
        $permission = new Permission();
        $permission->id = 39;
        $permission->name = "services";
        $permission->display_name = "Services";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 40;
        $permission->name = "service_list";
        $permission->display_name = "Service List";
        $permission->submodule_id = 39;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 41;
        $permission->name = "service_add";
        $permission->display_name = "Service Add";
        $permission->submodule_id = 39;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 42;
        $permission->name = "service_edit";
        $permission->display_name = "Service Edit";
        $permission->submodule_id = 39;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 43;
        $permission->name = "service_delete";
        $permission->display_name = "Service Delete";
        $permission->submodule_id = 39;
        $permission->guard_name = "admin";
        $permission->save();


        // Proposal_permission
        $permission = new Permission();
        $permission->id = 44;
        $permission->name = "proposal";
        $permission->display_name = "Proposal";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 45;
        $permission->name = "proposal_list";
        $permission->display_name = "Proposal List";
        $permission->submodule_id = 44;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 46;
        $permission->name = "proposal_details";
        $permission->display_name = "Proposal Details";
        $permission->submodule_id = 44;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 47;
        $permission->name = "send_price";
        $permission->display_name = "Send Price";
        $permission->submodule_id = 44;
        $permission->guard_name = "admin";
        $permission->save();

        // Payment_permission
        $permission = new Permission();
        $permission->id = 48;
        $permission->name = "payment";
        $permission->display_name = "Payment";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 49;
        $permission->name = "payment_list";
        $permission->display_name = "Payment List";
        $permission->submodule_id = 48;
        $permission->guard_name = "admin";
        $permission->save();

        // Package_permission
        $permission = new Permission();
        $permission->id = 50;
        $permission->name = "package";
        $permission->display_name = "Package";
        $permission->submodule_id = 0;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 51;
        $permission->name = "package_list";
        $permission->display_name = "Package List";
        $permission->submodule_id = 50;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 53;
        $permission->name = "package_add";
        $permission->display_name = "Package Add";
        $permission->submodule_id = 51;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 54;
        $permission->name = "package_edit";
        $permission->display_name = "Package Edit";
        $permission->submodule_id = 51;
        $permission->guard_name = "admin";
        $permission->save();

        $permission = new Permission();
        $permission->id = 55;
        $permission->name = "package_delete";
        $permission->display_name = "Package Delete";
        $permission->submodule_id = 51;
        $permission->guard_name = "admin";
        $permission->save();


         // Payment_permission
         $permission = new Permission();
         $permission->id = 56;
         $permission->name = "user";
         $permission->display_name = "User";
         $permission->submodule_id = 0;
         $permission->guard_name = "admin";
         $permission->save();
 
         $permission = new Permission();
         $permission->id = 57;
         $permission->name = "user_list";
         $permission->display_name = "User List";
         $permission->submodule_id = 56;
         $permission->guard_name = "admin";
         $permission->save();

          // Service_provider
          $permission = new Permission();
          $permission->id = 58;
          $permission->name = "service_provider";
          $permission->display_name = "Service Provider";
          $permission->submodule_id = 0;
          $permission->guard_name = "admin";
          $permission->save();
  
          $permission = new Permission();
          $permission->id = 59;
          $permission->name = "service_provider_list";
          $permission->display_name = "Service Provider List";
          $permission->submodule_id = 58;
          $permission->guard_name = "admin";
          $permission->save();

           // Company
           $permission = new Permission();
           $permission->id = 60;
           $permission->name = "company";
           $permission->display_name = "Company";
           $permission->submodule_id = 0;
           $permission->guard_name = "admin";
           $permission->save();
   
           $permission = new Permission();
           $permission->id = 61;
           $permission->name = "company_list";
           $permission->display_name = "Company List";
           $permission->submodule_id = 60;
           $permission->guard_name = "admin";
           $permission->save();

           $permission = new Permission();
           $permission->id = 62;
           $permission->name = "company_add";
           $permission->display_name = "Company ADD";
           $permission->submodule_id = 60;
           $permission->guard_name = "admin";
           $permission->save();

           $permission = new Permission();
           $permission->id = 63;
           $permission->name = "company_edit";
           $permission->display_name = "Company Edit";
           $permission->submodule_id = 60;
           $permission->guard_name = "admin";
           $permission->save();

           $permission = new Permission();
           $permission->id = 64;
           $permission->name = "company_delete";
           $permission->display_name = "Company Delete";
           $permission->submodule_id = 60;
           $permission->guard_name = "admin";
           $permission->save();
    }
}
