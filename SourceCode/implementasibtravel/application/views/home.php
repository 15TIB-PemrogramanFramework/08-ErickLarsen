<?php $this->load->view('templates/header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Home</h2>
                <p>
                Selamat datang 
                <b><?php echo $this->session->userdata('username');?></b>
                </p>
            </div>
        </div>
<?php $this->load->view('templates/footer'); ?>