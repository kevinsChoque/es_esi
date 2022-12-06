<?php
// $serverName = 'localhost';
$serverName = 'informatica2-pc\sicem_bd';

// $connectionInfo = array("Database"=>"Amigos","UID"=>"kevins","PWD"=>"@emusap1@","CharacterSet"=>"UTF-8");
$connectionInfo = array("Database"=>"SICEM_AB","UID"=>"comercial","PWD"=>"1","CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName,$connectionInfo);

if($conn_sis)
{
	// echo("con exitosa");
	// echo "<br>";
	$tsql = "select * from regsoli r
			where r.SolFec=CONVERT(varchar,GETDATE(),5)";
	$stmt = sqlsrv_query($conn_sis, $tsql); 
	$arreglo = array(); 
	$html='';
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	    // echo $row['Clinomx'].", ".$row['Clilelx']."<br />";
	    $arreglo[] = $row;
	    // echo(json_encode(gettype($row['SolFex'])));exit();
	    // echo(date("d/m/Y",$row['SolFex']->getTimestamp()));exit();
	    $fechaFormat = date("d/m/Y",$row['SolFex']->getTimestamp());
	    $html=$html.'<tr class="text-center">'.
	    	'<td class="font-weight-bold">'.$row['SolNro'].'</td>'.
            '<td class="font-weight-bold">'.$row['SolElect'].'</td>'.
            '<td>'.$row['SolNombre'].'</td>'.
            '<td>'.$row['SolTipCal'].$row['SolDirec'].$row['SolDirNro'].'</td>'.
            '<td>'.
                '<div class="btn-group btn-group-sm" role="group">'.
                    '<a class="btn text-info" title="Descargar documento" onclick="sendData('.$row['SolNro'].')" id="'.$row['SolNro'].'" 
                    data-solnro="'.$row['SolNro'].'" data-solnombre="'.$row['SolNombre'].'" data-soltipcal="'.$row['SolTipCal'].'" data-soldirec="'.$row['SolDirec'].'" data-soldirnro="'.$row['SolDirNro'].'" data-soldircom="'.$row['SolDirCom'].'" data-solurban="'.$row['SolUrban'].'" data-solelect="'.$row['SolElect'].'" data-solfex="'.$fechaFormat.'" data-soltelef="'.$row['SolTelef'].'"><i class="fa fa-download"></i></a>'.
                '</div>'.
            '</td>'.
        '</tr>';
	}
	// echo $arreglo[0]['Clinomx'];
	echo $html;
	// echo json_decode($arreglo);
}
else
{
	echo("fallo");
	die(print_r(sqlsrv_errors(),true));
}