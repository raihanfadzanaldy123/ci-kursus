<?php
ini_set('display_errors','off');

foreach($materi as $data){
    $nama = $data->nama_materi;
    $deskripsi = $data->deskripsi;
}
foreach($latihan as $row){
    $id_latihan = reset($row);
    if ($row > 1) {
        break;
    }
}
$ds ='<input type="submit" class="genric-btn primary circle" value="Mulai">';

if (empty($latihan)) {
    $ds = '<h4>soal latihan sedang dibuat</h4>';
}

foreach ($stop as $key) {
    if (isset($key)) {
        $ds = '<h4>anda telah mengerjakan materi ini</h4>';
    }
}
?>
    <!-- bradcam_area_start -->
    <div class="courses_details_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="course_text">
                        <h3><?= $nama?></h3>
                    </div>
                </div>
                <div class="col-xl-6 ">
                    <div class="course_text ">
                        <h3>Mulai Latihan</h3>
                        <form action="<?= base_url('Home/latihan/'.$data->id.'/'.$id_latihan);?>" method="get">
                            <?= $ds?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->


    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses">
                        <h3>Deskripsi</h3>
                        <p><?= $deskripsi?></p>
                    <h3 class="second_title">Highlight soal</h3>
                    </div>
                    <div class="outline_courses_info">
                            <div id="accordion">
                            <?php
                            $no = 1;
                                foreach ($latihan as $row) {
                                    if ($no > 3) {
                                        break;
                                    }
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#<?= $row['id']?>" aria-expanded="false" aria-controls="collapseTwo">
                                                    Soal No.<?= $no++?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="<?= $row['id']?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <?= $row['soal']?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    