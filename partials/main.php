<main>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <?php foreach ($movies as $movie) : ?>

                <div class="col">

                    <div class="card">

                        <div class="card-body">
                            <h4>Titolo: <?= $movie->title ?> </h4>
                            <div>Voto: <?= $movie->rating ?> </div>
                            <div>Lingua: <?= $movie->language ?> </div>
                            <div>Anno: <?= $movie->year ?> </div>
                            <div>
                                <span>Generi:</span>
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