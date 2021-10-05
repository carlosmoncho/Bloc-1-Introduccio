<div class="col mb-5">
    <div class="card h-100">
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder"><?=$trainer->getName()?></h5>
                <h5 class="fw-bolder">Edad: <?=$trainer->age()?></h5>
                <h5 class="fw-bolder">Charge: <?=$trainer->getCharge()?></h5>
                <div class="d-flex justify-content-center small text-warning mb-2" >
                    <?php for ($i = 0; $i < $trainer->getYellowCard(); $i++){?>
                        <div class="bi-star-fill" ></div>
                    <?php }?>
                    <?php for ($i = 0; $i < $trainer->getRedCard(); $i++){?>
                        <div class="bi-star-fill" style="color: red"></div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#"><?=$trainer->getCountry()?></a></div>
        </div>
    </div>
</div>