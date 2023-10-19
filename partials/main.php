<main>

    <div class="container mt-5">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">

            <?php foreach ($movies as $key => $movie) : ?>

                <div class="col">

                    <div class="card border-0">

                        <img height="200" src="https://picsum.photos/200/300?random=<?= $key + 1 ?>">

                        <div class="card-body d-flex flex-column gap-2">

                            <h4 class="fw-bold">
                                Titolo: <?= $movie->title ?>
                            </h4>

                            <div>
                                <span class="fw-bold">Voto:</span> <?= $movie->rating ?>
                            </div>

                            <div>
                                <span class="fw-bold">Lingua:</span> <?= $movie->language ?>
                            </div>

                            <div>
                                <span class="fw-bold">Anno:</span> <?= $movie->year ?>
                            </div>

                            <div>
                                <span class="fw-bold">Generi:</span>
                                <ul>
                                    <?php foreach ($movie->genres as $genre) : ?>
                                        <li> <?= $genre ?> </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->

            <?php endforeach ?>

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container -->

</main>
<!-- /main -->