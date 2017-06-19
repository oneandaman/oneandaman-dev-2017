<?php

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($connect, "utf8");


function query_all($sql)
{
    global $connect;
    $result=array();

    $query = $connect->query($sql);

    while($data = $query->fetch_assoc())
    {
        $result[] =$data;
    }

    return $result;
}

function query_where($sql) //function query_where($sql)
{
    global $connect;
    $result = array();

    $query = $connect->query($sql);
    $result = $query->fetch_assoc();

    return $result;
}

function query_by_id($table,$id)
{
    global $connect;
    $name = $connect->query("SELECT * FROM ".$table." WHERE id = ".$id)->fetch_assoc();

    return $name;
}


function insert($table,$data)
{
    global $connect;

    $last_id = "";
    $fields="";
    $values="";
    $i=1;

    foreach($data as $key=>$val)
    {
        if($i!=1) { $fields.=", "; $values.=", "; }
        $fields.="$key";
        $values.="'$val'";
        $i++;
    }

    $sql = "INSERT INTO $table ($fields) VALUES ($values)";

    if($connect->query($sql)) {  $last_id = $connect->insert_id;  } // return true;
    else { die("SQL Error: <br>".$sql."<br>".$connect->error);  } //return false;

    return $last_id;
}

function select($sql)
{
    global $connect;

    $result	=	array();
    $res 	= 	$connect->query($sql) or die("SQL Error: <br>".$sql."<br>".$connect->error);

    while($data	= $res->fetch_assoc()) {
        $result[]	=	$data;
    }
    return $result;
}

function update($table,$data,$where)
{
    global $connect;

    $modifs="";
    $i=1;
    foreach($data as $key=>$val)
    {
        if($i!=1){ $modifs.=", "; }
        if(is_numeric($val)) { $modifs.=$key.'='.$val; }
        else { $modifs.=$key.' = "'.$val.'"'; }
        $i++;
    }
    $sql = ("UPDATE $table SET $modifs WHERE $where");
    if($connect->query($sql)) { return true; }
    else { die("SQL Error: <br>".$sql."<br>".$connect->error); return false; }

}

function delete($table, $where)
{
    global $connect;

    $sql = "DELETE FROM $table WHERE $where";

    if($connect->query($sql)) { return true; }
    else { die("SQL Error: <br>".$sql."<br>".$connect->error); return false; }
}

function clear_table($table)
{
    global $connect;

    $sql = "TRUNCATE TABLE $table";

    if($connect->query($sql)) { return true; }
    else { die("SQL Error: <br>".$sql."<br>".$connect->error); return false; }
}

function count_record($table,$where)
{
    global $connect;
    $record = "";

    $sql_count = "SELECT * FROM $table WHERE $where";

    if($result = $connect->query($sql_count)) {  $record = $result->num_rows;  } // return true;
    else { die("SQL Error: <br>".$sql_count."<br>".$connect->error);  } //return false;

    return $record;
}

function count_table_record($table)
{
    global $connect;
    $record = "";

    $sql_count = "SELECT * FROM $table";

    if($result = $connect->query($sql_count)) {  $record = $result->num_rows;  } // return true;
    else { die("SQL Error: <br>".$sql_count."<br>".$connect->error);  } //return false;

    return $record;
}

function sum_column_where($column,$table,$where)
{
    global $connect;

    $sql_sum = "SELECT SUM($column) as `total` FROM $table WHERE $where";
    $dpl = $connect->query($sql_sum);
    $row = $dpl->fetch_assoc();

    return $row['total'];

}

function sum_column($column,$table)
{
    global $connect;

    $sql_sum = "SELECT SUM($column) as `total` FROM $table";
    $dpl = $connect->query($sql_sum);
    $row = $dpl->fetch_assoc();

    return $row['total'];

}
