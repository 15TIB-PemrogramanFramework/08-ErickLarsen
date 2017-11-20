<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '
		<li>
		<a href="'.site_url('btravel').'"><i class="fa fa-home fa-fw"></i> List Paket</a>
	</li>
	<li>
		<a href="'.site_url('btravelkomentar/tambah').'"><i class="fa fa-book fa-fw"></i> Komentar</a>
	</li>
		
	'



	;
	}

	function generate_sidemenuAdmin()
	{
		return '
		<li>
		<a href="'.site_url('btraveladmin/listpaket').'"><i class="fa fa-home fa-fw"></i> List Paket</a>
	</li>
	<li>
		<a href="'.site_url('btraveladmin/listbooking').'"><i class="fa fa-book fa-fw"></i> List Booking</a>
	</li>
	<li>
		<a href="'.site_url('btraveladmin/listkomentar').'"><i class="fa fa-book fa-fw"></i> List Komentar</a>
	</li>
	<li>
		<a href="'.site_url('btraveladmin/listmember').'"><i class="fa fa-book fa-fw"></i> List Member</a>
	</li>
	<li>
		<a href="'.site_url('btraveladmin/listkonfirmasi').'"><i class="fa fa-book fa-fw"></i> List Konfirmasi</a>
	</li>
	'



	;
	}
?>