	<!-- =========================== CONTENT =========================== -->

	<!-- Content Wrapper. Contains page content -->

	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1 align="center">
	    Laporan Inventory Dinas Kepemudaan dan Olahraga
	    <small></small>
	  </h1>
	</section>

	<!-- Main content -->
	<section class="content">

	  <!-- Default box -->
	  <div class="box box-primary">
	    <div class="box-header with-border">

	      <div class="box-tools pull-right">
	        <!-- <button class="btn btn-default btn-box-tool" title="Show / Hide" id="myboxwidget"><i class="fa fa-plus"></i> Show / Hide</button> -->
	        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
	      </div>
	    </div>
	    <div class="box-body">
	      <?php echo $message; ?>
	      <div class="table-responsive">
	        <table class="table table-hover table-bordered table-striped">
	          <thead>
	            <tr>
	              <th>Code</th>
	              <th>Brand - Model</th>
	              <th>Category</th>
	              <th>Location</th>
	              <th>Photo</th>
	              <th>Status</th>
	              <th>Nama Peminjam</th>
	              <th>Tanggal Pinjam</th>
	              <th>Tanggal Balik</th>
	              <th>Kondisi barang di pinjam</th>
	              <th>Kondisi barang di kembalikan</th>
	              <th>Tanggal Rusak</th>
	              <th>Tanggal Selesai Perbaikan</th>

	            </tr>
	          </thead>
	          <tbody>
	            <?php if (count($data_list->result()) > 0) : ?>
	              <?php foreach ($data_list->result() as $data) : ?>
	                <tr>
	                  <td><?php echo $data->code; ?></td>
	                  <td><?php echo $data->brand . " " . $data->model; ?></td>
	                  <td><?php echo $data->category_name; ?></td>
	                  <td><?php echo $data->location_name; ?></td>
	                  <td><?php if ($data->thumbnail != "") : ?><a href="<?php echo base_url('assets/uploads/images/inventory/') . $data->photo ?>" data-fancybox data-caption="<?php echo $data->brand . " " . $data->model ?>">
	                        <img src="<?php echo base_url('assets/uploads/images/inventory/') . $data->thumbnail ?>" alt="<?php echo $data->brand . " " . $data->model ?>"></a><?php endif ?></td>
	                  <td>
	                    <?php
                      if ($data->pinjam == 1) {
                        echo "pengajuan peminjaman dalam proses";
                      } elseif ($data->pinjam == 2) {
                        echo "di pinjam";
                      } elseif ($data->pinjam == 3) {
                        echo "peminjaman di setujui";
                      } elseif ($data->pinjam == 4) {
                        echo "peminjaman di tolak";
                      }
                      ?>
	                  </td>
	                  <td><?php echo $data->nama_pinjam; ?></td>
	                  <td><?php echo $data->tgl_pinjam; ?></td>
	                  <td><?php echo $data->tgl_balik; ?></td>
	                  <td>
	                    <?php
                      if ($data->status == 1 || $data->status == 2) {
                        echo "Baik";
                      } elseif ($data->status == 3) {
                        echo "Rusak";
                      }
                      ?>
	                  </td>
	                  <td>
	                    <?php
                      if ($data->status == 1) {
                        echo "Baik";
                      } elseif ($data->status == 3) {
                        echo "Rusak";
                      }
                      ?>
	                  </td>
	                  <td><?php echo $data->tgl_rusak; ?> </td>
	                  <td><?php echo $data->tgl_benar; ?> </td>
	                </tr>

	              <?php endforeach ?>
	            <?php else : ?>
	              <tr>
	                <td class="text-center" colspan="6">No Data Found!</td>
	              </tr>
	            <?php endif ?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	    <!-- /.box-body -->
	    <div class="box-footer text-center">
	      <?php echo $pagination; ?>
	      <?php echo (isset($last_query)) ? $last_query : ""; ?>&nbsp;
	      <!-- Footer -->
	    </div>
	    <!-- /.box-footer-->
	  </div>
	  <!-- /.box -->

	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- =========================== / CONTENT =========================== -->