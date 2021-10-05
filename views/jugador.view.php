
<div class="col mb-5">
    <div class="card h-100">
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $jugador->getDorsal()?></div>
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder"><?=$jugador->getName()?></h5>
                <h5 class="fw-bolder">Posicion: <?=$jugador->getPosition()?></h5>
                <h5 class="fw-bolder">Goles: <?=$jugador->getGoals()?></h5>
                <h5 class="fw-bolder">Partidos jugados: <?=$jugador->getMatches()?></h5>
                <h5 class="fw-bolder">Edad: <?=$jugador->age()?></h5>
                <div class="d-flex justify-content-center small text-warning mb-2" >
                    <?php for ($i = 0; $i < $jugador->getYellowCard(); $i++){?>
                        <div class="bi-star-fill" ></div>
                    <?php }?>
                    <?php for ($i = 0; $i < $jugador->getRedCard(); $i++){?>
                        <div class="bi-star-fill" style="color: red"></div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#"><?=$jugador->getCountry()?></a></div>
        </div>
    </div>
</div>