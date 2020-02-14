<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th >No</th>
		    <th>Nilai</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $angka = array(20 ,100 ,30 ,15 ,5, 120);
			sort($angka, SORT_NUMERIC);
            $start = 0;
            foreach ($angka as $nilai)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $nilai ?></td>
		    <td>
			<?php 
			 // echo anchor(site_url('pendaftaran/read/'.$pendaftaran->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
    //          echo '  ';
			// echo anchor(site_url('pendaftaran/update/'.$pendaftaran->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			// echo '  '; 
			// echo anchor(site_url('pendaftaran/delete/'.$pendaftaran->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
</body>
</html>