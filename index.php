
  <?php
    include("library/conn.php");
    $bbname= $_GET['bbname'];
    $src = "http://parts.igem.org/cgi/xml/part.cgi?part=".$bbname;
    $xml = simplexml_load_file($src);
    $seq = $xml->part_list->part->sequences->seq_data;
    $seq = preg_replace('/\s*/','',$seq);
    //echo "{seq: ",  json_encode($seq),"}";
    $arr = array('seq' => $seq);
    echo json_encode($arr);
  ?>
