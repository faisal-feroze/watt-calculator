<?php

function showCpu(){ ?>
  <div class="cus_input_form_con">
    <form action="" method="post">
      <input type="text" name="cpu_name" value="" placeholder="Add a CPU">
      <input type="number" name="cpu_watt" value="" placeholder="Add Watt">
      <input type="submit" name="cpu_submit" value="ADD">
    </form>
  </div>

  <?php
    global $wpdb;
    $table_name = $wpdb->prefix . "wc_cpu";

    if(isset($_POST['cpu_submit'])){
      $cpu_name = $_POST['cpu_name'];
      $cpu_watt = $_POST['cpu_watt'];

      $wpdb->insert($table_name, array(
                                'name' => $cpu_name,
                                'watt' => $cpu_watt
                                ),array(
                                '%s')
                                );

    }

  ?>

  <?php
  //global $wpdb;
  //$table_name = $wpdb->prefix . "wc_cpu";
  $query = "SELECT * FROM $table_name";
  $tbl_data = $wpdb->get_results( $query );

  echo "
   <div class='ad_cus_table_con'>
    <table class='wc_cus_table'>
      <tr>
        <th>SL</th>
        <th>CPU</th>
        <th>Watt</th>
      </tr>";

   if($tbl_data){
        foreach ($tbl_data as $tbl_row){
              $cpu_id = $tbl_row->id;
              $cpu_name = $tbl_row->name;
              $cpu_watt = $tbl_row->watt;

              echo"
                  <tr>
                    <td>".$cpu_id."</td>
                    <td>".$cpu_name."</td>
                    <td>".$cpu_watt."</td>
                  </tr>
                ";
        }
        echo "</table>
              </div>";
      }
}


function showRam(){ ?>
  <div class="cus_input_form_con">
    <form action="" method="post">
      <input type="text" name="ram_name" value="" placeholder="Add a RAM">
      <input type="number" name="ram_watt" value="" placeholder="Add Watt">
      <input type="submit" name="ram_submit" value="ADD">
    </form>
  </div>

  <?php
    global $wpdb;
    $table_name = $wpdb->prefix . "wc_memory";

    if(isset($_POST['ram_submit'])){
     $ram_name = $_POST['ram_name'];
     $ram_watt = $_POST['ram_watt'];

      $wpdb->insert($table_name, array(
                                'ram' => $ram_name,
                                'watt' => $ram_watt
                                ),array(
                                '%s')
                                );

    }

  ?>

  <?php
  //global $wpdb;
  //$table_name = $wpdb->prefix . "wc_cpu";
  $query = "SELECT * FROM $table_name";
  $tbl_data = $wpdb->get_results( $query );

  echo "
   <div class='ad_cus_table_con'>
    <table class='wc_cus_table'>
      <tr>
        <th>SL</th>
        <th>RAM</th>
        <th>Watt</th>
      </tr>";

   if($tbl_data){
        foreach ($tbl_data as $tbl_row){
              $ram_id = $tbl_row->id;
              $ram_name = $tbl_row->ram;
              $ram_watt = $tbl_row->watt;

              echo"
                  <tr>
                    <td>".$ram_id."</td>
                    <td>".$ram_name."</td>
                    <td>".$ram_watt."</td>
                  </tr>
                ";
        }
        echo "</table>
              </div>";
      }
}



function showStorage(){ ?>
  <div class="cus_input_form_con">
    <form action="" method="post">
      <input type="text" name="storage_name" value="" placeholder="Add a Storage">
      <input type="number" name="storage_watt" value="" placeholder="Add Watt">
      <input type="submit" name="storage_submit" value="ADD">
    </form>
  </div>

  <?php
    global $wpdb;
    $table_name = $wpdb->prefix . "wc_storage";

    if(isset($_POST['storage_submit'])){
     $storage_name = $_POST['storage_name'];
     $storage_watt = $_POST['storage_watt'];

      $wpdb->insert($table_name, array(
                                'storage' => $storage_name,
                                'watt' => $storage_watt
                                ),array(
                                '%s')
                                );

    }

  ?>

  <?php
  //global $wpdb;
  //$table_name = $wpdb->prefix . "wc_cpu";
  $query = "SELECT * FROM $table_name";
  $tbl_data = $wpdb->get_results( $query );

  echo "
   <div class='ad_cus_table_con'>
    <table class='wc_cus_table'>
      <tr>
        <th>SL</th>
        <th>Storage</th>
        <th>Watt</th>
      </tr>";

   if($tbl_data){
        foreach ($tbl_data as $tbl_row){
              $storage_id = $tbl_row->id;
              $storage_name = $tbl_row->storage;
              $storage_watt = $tbl_row->watt;

              echo"
                  <tr>
                    <td>".$storage_id."</td>
                    <td>".$storage_name."</td>
                    <td>".$storage_watt."</td>
                  </tr>
                ";
        }
        echo "</table>
              </div>";
      }
}

function showMotherboard(){ ?>
  <div class="cus_input_form_con">
    <form action="" method="post">
      <input type="text" name="mb_name" value="" placeholder="Add a Mother Board">
      <input type="number" name="mb_watt" value="" placeholder="Add Watt">
      <input type="submit" name="mb_submit" value="ADD">
    </form>
  </div>

  <?php
    global $wpdb;
    $table_name = $wpdb->prefix . "wc_mother_board";

    if(isset($_POST['mb_submit'])){
     $mb_name = $_POST['mb_name'];
     $mb_watt = $_POST['mb_watt'];

      $wpdb->insert($table_name, array(
                                'mother_board' => $mb_name,
                                'watt' => $mb_watt
                                ),array(
                                '%s')
                                );

    }

  ?>

  <?php
  //global $wpdb;
  //$table_name = $wpdb->prefix . "wc_cpu";
  $query = "SELECT * FROM $table_name";
  $tbl_data = $wpdb->get_results( $query );

  echo "
   <div class='ad_cus_table_con'>
    <table class='wc_cus_table'>
      <tr>
        <th>SL</th>
        <th>Mother Board</th>
        <th>Watt</th>
      </tr>";

   if($tbl_data){
        foreach ($tbl_data as $tbl_row){
              $mb_id = $tbl_row->id;
              $mb_name = $tbl_row->mother_board;
              $mb_watt = $tbl_row->watt;

              echo"
                  <tr>
                    <td>".$mb_id."</td>
                    <td>".$mb_name."</td>
                    <td>".$mb_watt."</td>
                  </tr>
                ";
        }
        echo "</table>
              </div>";
      }
}






 ?>
